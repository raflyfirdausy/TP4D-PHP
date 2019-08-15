<?php
/* 
Nama Database yang telah dibuat bernama "kejari"
Jika database yang kalian buat tidak sama dengan yang dibuat oleh penulis maka ganti nama database
sesuai dengan nama database yang kalian buat
*/
//Mendefinisikan Konstanta
$host   = 'sql100.epizy.com';
$user   = 'epiz_24269120';
$pass   = '200uKhN1lL';
$db     = 'epiz_24269120_tp4d';
//membuat koneksi dengan database
$con = mysqli_connect($host, $user, $pass, $db) or die("Koneksi Ke Database Gagal");
?>