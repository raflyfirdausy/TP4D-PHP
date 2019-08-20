<?php
include "koneksi.php";

$id_daftar_pemohon  = isset($_POST['id_daftar_pemohon']) ? htmlspecialchars($_POST['id_daftar_pemohon']) : null;
$nomor_sprint_pendampingan = isset($_POST['nomor_sprint_pendampingan']) ? $_POST['nomor_sprint_pendampingan'] : null;
$tanggal_sprint_pendampingan = isset($_POST['tanggal_sprint_pendampingan']) ? $_POST['tanggal_sprint_pendampingan'] : null;
$anggota1 = isset($_POST['anggota1']) ? $_POST['anggota1'] : null;
$nik1 = isset($_POST['nik1']) ? $_POST['nik1'] : null;
$anggota2 = isset($_POST['anggota2']) ? $_POST['anggota2'] : null;
$nik2 = isset($_POST['nik2']) ? $_POST['nik2'] : null;
$anggota3 = isset($_POST['anggota3']) ? $_POST['anggota3'] : null;
$nik3 = isset($_POST['nik3']) ? $_POST['nik3'] : null;
$anggota4 = isset($_POST['anggota4']) ? $_POST['anggota4'] : null;
$nik4 = isset($_POST['nik4']) ? $_POST['nik4'] : null;
$anggota5 = isset($_POST['anggota5']) ? $_POST['anggota5'] : null;
$nik5 = isset($_POST['nik5']) ? $_POST['nik5'] : null;
$anggota6 = isset($_POST['anggota6']) ? $_POST['anggota6'] : null;
$nik6 = isset($_POST['nik6']) ? $_POST['nik6'] : null;

$p_uitzet_perencanaan = isset($_POST['p_uitzet_perencanaan']) ? $_POST['p_uitzet_perencanaan'] : null;
$p_pcm_persiapan = isset($_POST['p_pcm_persiapan']) ? $_POST['p_pcm_persiapan'] : null;
$p_mc_pelaksanaan = isset($_POST['p_mc_pelaksanaan']) ? $_POST['p_mc_pelaksanaan'] : null;
$p_pho_penyerahan_hasil = isset($_POST['p_pho_penyerahan_hasil']) ? $_POST['p_pho_penyerahan_hasil'] : null;

$share_lokasi = isset($_POST['share_lokasi']) ? $_POST['share_lokasi'] : null;
$serah_terima = isset($_POST['serah_terima']) ? $_POST['serah_terima'] : null;

$latitude = isset($_POST['latitude']) ? $_POST['latitude'] : null;
$longitude = isset($_POST['longitude']) ? $_POST['longitude'] : null;


$is_serah_terima = isset($_POST['is_serah_terima']) ? $_POST['is_serah_terima'] : 0;

if($is_serah_terima == 0){
    $status = 2;
} else {
    $status = 3;
}


$query = "UPDATE
    `daftar_pemohon`
SET
    `status` = $status,
    `nomor_sprint_pendampingan` = '$nomor_sprint_pendampingan',
    `tanggal_sprint_pendampingan` = '$tanggal_sprint_pendampingan',
    `anggota1` = '$anggota1',
    `nik1` = '$nik1',
    `anggota2` = '$anggota2',
    `nik2` = '$nik2',
    `anggota3` = '$anggota3',
    `nik3` = '$nik3',
    `anggota4` = '$anggota4',
    `nik4` = '$nik4',
    `anggota5` = '$anggota5',
    `nik5` = '$nik5',
    `anggota6` = '$anggota6',
    `nik6` = '$nik6',
    `p_uitzet_perencanaan` = '$p_uitzet_perencanaan',
    `p_pcm_persiapan` = '$p_pcm_persiapan',
    `p_mc_pelaksanaan` = '$p_mc_pelaksanaan',
    `p_pho_penyerahan_hasil` = '$p_pho_penyerahan_hasil',
    `share_lokasi` = '$share_lokasi',
    `latitude` = '$latitude',
    `longitude` = '$longitude',
    `serah_terima` = '$serah_terima'
WHERE
    `id_daftar_pemohon` = '$id_daftar_pemohon'";

if ($id_daftar_pemohon != null) { 
    $result     = $koneksi->query($query);
    if($koneksi->affected_rows > 0){
        echo json_encode(array(
            "status" => 1,
            "result" => "Berhasil Update Permohonan"
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
        "result" => "Terjadi Kesalahan id Pendaftar"
    ));
}
