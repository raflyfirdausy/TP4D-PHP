<?php
 
	include "koneksi.php";
		
		#if($_SERVER['REQUEST_METHOD']=='POST'){
		//Mendapatkan Nilai Variable
	

		$jenis = 'dasfasf';#$_POST['jenis'];
		$kegiatan = 'dasfasf';#$_POST['kegiatan'];
		$pagu = 'dasfasf';#$_POST['pagu'];
		$instansi = 'dasfasf';#$_POST['instansi'];
		$tahun = 'dasfasf';#$_POST['tahun'];
		$cara = 'dasfasf';#$_POST['cara'];
		$lokasi = 'dasfasf';#$_POST['lokasi'];
		$konsultan = 'dasfasf';#$_POST['konsultan'];
		$awal = 'dasfasf';#$_POST['awal'];
		$akhir = 'dasfasf';#$_POST['akhir'];
		$tujuan = 'dasfasf';#$_POST['tujuan'];
		$perencanaan = 'dasfasf';#$_POST['perencanaan'];
		$persiapan = 'dasfasf';#$_POST['persiapan'];
		$pelaksanaan = 'dasfasf';#$_POST['pelaksanaan'];
		$hasil = 'dasfasf';#$_POST['hasil'];
		$pegawai = 'dasfasf';#$_POST['pegawai'];
		$hp = 'dasfasf';#$_POST['hp'];
		$mail = 'dasfasf';#$_POST['mail'];

		$query2 = "INSERT INTO tb_daftar_pemohon (jenis, kegiatan, pagu, instansi, tahun, cara, lokasi, konsultan, awal, akhir, tujuan, perencanaan, persiapan, pelaksanaan, hasil, pegawai, hp, mail) VALUES ('$jenis', '$kegiatan', '$pagu', '$instansi', '$tahun', '$cara', '$lokasi', '$konsultan', '$awal', '$akhir', '$tujuan', '$perencanaan', '$persiapan', '$pelaksanaan', '$hasil', '$pegawai', '$hp', '$mail')";
		
		if (mysqli_query($con, $query2)) {
		echo 'Berhasil Menambahkan Data';
		}else{
		echo 'Gagal Menambahkan Data';
		}
			
		#mysqli_close($con);
		#}
?>