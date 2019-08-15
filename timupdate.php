<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable
		$id = $_POST['id'];
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
		$catatan = $_POST['catatan'];
		$tindak = $_POST['tindak'];

		//import file koneksi database
		require_once('koneksi.php');

		//Membuat SQL Query
		$sql = "UPDATE tb_daftar_pemohon SET tindak = '$tindak', catatan = '$catatan', telaah = '$telaah', disposisi = '$disposisi', konsultan = '$konsultan', lokasi = '$lokasi', pembayaran = '$pembayaran', cara = '$cara', tahun = '$tahun', pagu = '$pagu', jenis = '$jenis', tgl_masuk = '$tgl_masuk', tgl_surat = '$tgl_surat', no_surat = '$no_surat', alamat = '$alamat', instansi = '$instansi' WHERE id='$id'";

		//Meng-update Database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menyimpan';
		}else{
			echo 'Gagal!';
		}

		mysqli_close($con);
	}
?>
