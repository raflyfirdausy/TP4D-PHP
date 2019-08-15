<?php
 
 	include "koneksi.php";

		if($_SERVER['REQUEST_METHOD']=='POST'){
		//Mendapatkan Nilai Variable
		
		$id = $_POST['id'];
		$no_regis = $_POST['noregis'];
		$instansi = $_POST['instansi'];
		$alamat = $_POST['alamat'];
		$no_surat = $_POST['nosurat'];
		$tgl_surat = $_POST['tglsurat'];		
		$tgl_masuk = $_POST['tglmasuk'];
		$jenis = $_POST['jenis'];
		$pagu = $_POST['pagu'];
		$tahun = $_POST['tahun'];
		$cara = $_POST['cara'];
		$pembayaran = $_POST['pembayaran'];
		$lokasi = $_POST['lokasi'];
		$konsultan = $_POST['konsultan'];
		$disposisi = $_POST['disposisi'];
		$telaah = $_POST['telaah'];
		$tindak = $_POST['tindak'];
		$status = ("Dalam Proses");

		$query2 = "INSERT INTO tb_petugas (id, no_regis, instansi, alamat, no_surat, tgl_msk, tgl_surat, jenis, pagu, tahun, cara, pembayaran, lokasi, konsultan, disposisi, telaah, tindak, status) VALUES ('$id', '$no_regis', '$instansi', '$alamat', '$no_surat', '$tgl_masuk', '$tgl_surat', '$jenis', '$pagu', '$tahun', '$cara', '$pembayaran', '$lokasi', '$konsultan', '$disposisi', '$telaah', '$tindak', '$status')";
		
		if (mysqli_query($con, $query2)) {
		echo 'Berhasil Menambahkan Data';
		}else{
		}
			
		mysqli_close($con);
		}
?>