<?php
include "koneksi.php";

$id_daftar_pemohon  = isset($_POST['id_daftar_pemohon']) ? htmlspecialchars($_POST['id_daftar_pemohon']) : null; 
$instansi_pemohon = isset($_POST['instansi_pemohon']) ? $_POST['instansi_pemohon'] : null;
$alamat_instansi = isset($_POST['alamat_instansi']) ? $_POST['alamat_instansi'] : null;
$nomer_surat = isset($_POST['nomer_surat']) ? $_POST['nomer_surat'] : null;
$tanggal_surat = isset($_POST['tanggal_surat']) ? $_POST['tanggal_surat'] : null;
$jenis_kegiatan = isset($_POST['jenis_kegiatan']) ? $_POST['jenis_kegiatan'] : null;
$pagu_anggaran = isset($_POST['pagu_anggaran']) ? $_POST['pagu_anggaran'] : null;
$tahun_anggaran = isset($_POST['tahun_anggaran']) ? $_POST['tahun_anggaran'] : null;
$pelaksanaan_dengan_cara = isset($_POST['pelaksanaan_dengan_cara']) ? $_POST['pelaksanaan_dengan_cara'] : null;
$metode_pembayaran = isset($_POST['metode_pembayaran']) ? $_POST['metode_pembayaran'] : null;
$lokasi_kegiatan = isset($_POST['lokasi_kegiatan']) ? $_POST['lokasi_kegiatan'] : null;
$konsultan_perencanaan = isset($_POST['konsultan_perencanaan']) ? $_POST['konsultan_perencanaan'] : null;
$hasil_telaah = isset($_POST['hasil_telaah']) ? $_POST['hasil_telaah'] : null;
$catatan = isset($_POST['catatan']) ? $_POST['catatan'] : null;

$query = "UPDATE
    `daftar_pemohon`
SET
    `instansi_pemohon` = '$instansi_pemohon',
    `alamat_instansi` = '$alamat_instansi',
    `nomer_surat` = '$nomer_surat',
    `tanggal_surat` = '$tanggal_surat',
    `jenis_kegiatan` = '$jenis_kegiatan',
    `pagu_anggaran` = '$pagu_anggaran',
    `tahun_anggaran` = '$tahun_anggaran',
    `pelaksanaan_dengan_cara` = '$pelaksanaan_dengan_cara',
    `metode_pembayaran` = '$metode_pembayaran',
    `lokasi_kegiatan` = '$lokasi_kegiatan',
    `konsultan_perencanaan` = '$konsultan_perencanaan',
    `hasil_telaah` = '$hasil_telaah',
    `catatan` = '$catatan',
    `status` = '2'
WHERE
    `id_daftar_pemohon` = '$id_daftar_pemohon'";

if($id_daftar_pemohon != null){
    $result     = $koneksi->query($query);
    if($koneksi->affected_rows > 0){
        echo json_encode(array(
            "status" => 1,
            "result" => "Berhasil Terima Permohonan"
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
