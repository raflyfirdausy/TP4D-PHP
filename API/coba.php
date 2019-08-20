<?php
include "koneksi.php";

$query = "SELECT no_regis FROM `daftar_pemohon` LIMIT 1";
$result     = $koneksi->query($query);

die(json_encode($result->fetch_assoc()["no_regis"]));