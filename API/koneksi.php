<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp4d";

$koneksi = new mysqli($servername, $username, $password, $dbname);
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
} 

$root = "http://192.168.1.5/"
?>