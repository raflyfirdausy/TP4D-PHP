<?php
 
	include "koneksi.php";
		
		#if($_SERVER['REQUEST_METHOD']=='POST'){
		//Mendapatkan Nilai Variable
	
		$jenis = $_POST['jenis'];
		$kegiatan = $_POST['kegiatan'];
		$pagu = $_POST['pagu'];
		$instansi = $_POST['instansi'];
		$tahun = $_POST['tahun'];
		$cara = $_POST['cara'];
		$lokasi = $_POST['lokasi'];
		$konsultan = $_POST['konsultan'];
		$awal = $_POST['awal'];
		$akhir = $_POST['akhir'];
		$tujuan = $_POST['tujuan'];
		$perencanaan = $_POST['uitzet'];
		$persiapan = $_POST['pcm'];
		$pelaksanaan = $_POST['mc'];
		$hasil = $_POST['pho'];
		$pegawai = $_POST['pegawai'];
		$hp = $_POST['hp'];
		$mail = $_POST['mail'];

		$query2 = "INSERT INTO tb_daftar_pemohon (jenis, kegiatan, pagu, instansi, tahun, cara, lokasi, konsultan, awal, akhir, tujuan, perencanaan, persiapan, pelaksanaan, hasil, pegawai, hp, mail) VALUES ( '$jenis', '$kegiatan', '$pagu', '$instansi', '$tahun', '$cara', '$lokasi', '$konsultan', '$awal', '$akhir', '$tujuan', '$perencanaan', '$persiapan', '$pelaksanaan', '$hasil', '$pegawai', '$hp', '$mail')";
		
		if (mysqli_query($con, $query2)) {
		echo 'Berhasil Menambahkan Data';
		}else{
		echo 'Gagal Menambahkan Data';
		}
			
		#mysqli_close($con);
		#}
?>