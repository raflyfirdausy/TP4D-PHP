<?php
include "koneksi.php";

$disposisi = isset($_GET['disposisi']) ? htmlspecialchars($_GET['disposisi']) : null; 
$id_daftar_pemohon = isset($_GET['id_daftar_pemohon']) ? htmlspecialchars($_GET['id_daftar_pemohon']) : null; 

if($id_daftar_pemohon != null){
    $query = "SELECT * FROM daftar_pemohon WHERE status = 2 AND disposisi = '$disposisi' AND id_daftar_pemohon = '$id_daftar_pemohon' ORDER BY id_daftar_pemohon DESC";
} else {
    $query = "SELECT * FROM daftar_pemohon WHERE status = 2 AND disposisi = '$disposisi' ORDER BY id_daftar_pemohon DESC";
}

$result     = $koneksi->query($query);

if($result->num_rows > 0){
    $result_ = array();
    while($data = $result->fetch_assoc()){
        $data['foto_dokumen'] = $root . "tp4d/api/image/" . $data['foto_dokumen'];
        array_push($result_, $data);
    }

    echo json_encode(array(
        "status" => 1,
        "result" => $result_
    ));

} else {
    echo json_encode(array(
        "status" => 0,
        "result" => "Tidak ada permohonan Baru"
    ));
}