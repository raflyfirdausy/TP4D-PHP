<?php
include "koneksi.php";

$disposisi = isset($_GET['disposisi']) ? htmlspecialchars($_GET['disposisi']) : null; 

$query = "SELECT * FROM daftar_pemohon WHERE status = 2 AND disposisi = '$disposisi'";
$result     = $koneksi->query($query);

if($result->num_rows > 0){
    $result_ = array();
    while($data = $result->fetch_assoc()){
        $data['foto_dokumen'] = "http://localhost/tp4d/api/image/" . $data['foto_dokumen'];
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