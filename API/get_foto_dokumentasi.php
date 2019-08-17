<?php
include "koneksi.php";

$id_daftar_pemohon = isset($_GET['id_daftar_pemohon']) ? htmlspecialchars($_GET['id_daftar_pemohon']) : null; 

if($id_daftar_pemohon != null){
    $query = "SELECT * FROM `foto` WHERE id_daftar_pemohon = '$id_daftar_pemohon'";
    $result     = $koneksi->query($query);
    if($result->num_rows > 0){
        $result_ = array();
        while($data = $result->fetch_assoc()){
            // $data['foto'] = "http://localhost/tp4d/api/dokumentasi/" . $data['foto'];
            $data['foto'] = "http://192.168.1.18/tp4d/api/dokumentasi/" . $data['foto'];
            array_push($result_, $data);
        }
        echo json_encode(array(
            "status" => 1,
            "result" => $result_
        ));
    } else {
        echo json_encode(array(
            "status" => 0,
            "result" => "Foto dokumen tidak ditemukan"
        ));
    }
} else {
    echo json_encode(array(
        "status" => 0,
        "result" => "Id daftar pemohon tidak ditemukan!"
    ));
}