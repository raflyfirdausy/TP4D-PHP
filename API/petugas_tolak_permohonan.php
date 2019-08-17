<?php
include "koneksi.php";

$id_daftar_pemohon  = isset($_GET['id_daftar_pemohon']) ? htmlspecialchars($_GET['id_daftar_pemohon']) : null; 

$query = "UPDATE daftar_pemohon SET status = '-2' WHERE id_daftar_pemohon = '$id_daftar_pemohon'";

if($id_daftar_pemohon != null){
    $result     = $koneksi->query($query);
    if($koneksi->affected_rows > 0){
        echo json_encode(array(
            "status" => 1,
            "result" => "Berhasil Tolak Permohonan"
        ));
    } else {
        echo json_encode(array(
            "status" => 0,
            "result" => "$koneksi->error"
        ));
    }
} else {
    echo json_encode(array(
        "status" => 0,
        "result" => "$koneksi->error"
    ));
}