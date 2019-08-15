<?php
include "koneksi.php";

$id_daftar_pemohon  = isset($_POST['id_daftar_pemohon']) ? htmlspecialchars($_POST['id_daftar_pemohon']) : null; 
$disposisi          = isset($_POST['disposisi']) ? htmlspecialchars($_POST['disposisi']) : null; 
$catatan_disposisi  = isset($_POST['catatan_disposisi']) ? htmlspecialchars($_POST['catatan_disposisi']) : null;

$query = "UPDATE daftar_pemohon SET disposisi = '$disposisi', catatan_disposisi = '$catatan_disposisi', status = '1' WHERE id_daftar_pemohon = '$id_daftar_pemohon'";

if($id_daftar_pemohon != null){
    $result     = $koneksi->query($query);
    if($koneksi->affected_rows > 0){
        echo json_encode(array(
            "status" => 1,
            "result" => "Berhasil Update"
        ));
    } else {
        echo json_encode(array(
            "status" => 0,
            "result" => "Terjadi Kesalahan Update"
        ));
    }
} else {
    echo json_encode(array(
        "status" => 0,
        "result" => "Terjadi Kesalahan id Pendaftar"
    ));
}