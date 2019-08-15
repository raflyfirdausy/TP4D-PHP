<?php
include "koneksi.php";

$email      = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : null; 
$instansi   = isset($_POST['instansi']) ? htmlspecialchars($_POST['instansi']) : null; 
$password   = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : null;

if($email == null || $instansi == null || $password == null){
    echo json_encode(array(
        "status" => 0,
        "result" => "Masih ada data yang kosong !"
    ));
} else {
    $query   = "INSERT INTO `pemohon` (`email`, `instansi`, `password`) VALUES ('$email', '$instansi', '$password')";
    $result  = $koneksi->query($query);

    if($result != null){
        echo json_encode(array(
            "status" => 1,
            "result" => "Berhasil Daftar Akun"
        ));
    } else {
        echo json_encode(array(
            "status" => 0,
            "result" => $koneksi->error
        ));
    }
}