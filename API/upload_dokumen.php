<?php
include "koneksi.php";

$id_daftar_pemohon  = isset($_POST['id_daftar_pemohon']) ? htmlspecialchars($_POST['id_daftar_pemohon']) : null;
$foto = isset($_POST['foto']) ? $_POST['foto'] : null;

if ($id_daftar_pemohon != null) {
    $img_name = md5($foto) . ".jpg";
    $path = "dokumentasi/";
    $upload = file_put_contents($path . $img_name, base64_decode($foto));
    if ($upload) {
        echo json_encode(array(
            "status" => 1,
            "result" => "Berhasil Upload Foto"
        ));
    } else {
        echo json_encode(array(
            "status" => 0,
            "result" => "Terjadi Kesalahan Saat mengupload foto"
        ));
    }
} else {
    echo json_encode(array(
        "status" => 0,
        "result" => "Terjadi Kesalahan id Pendaftar"
    ));
}
