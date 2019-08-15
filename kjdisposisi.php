<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable
		$id = $_POST['id'];
		$disposisi = $_POST['disposisi'];
		$disposisi2 = $_POST['disposisi2'];

		//import file koneksi database
		require_once('koneksi.php');

		//Membuat SQL Query
		$sql = "UPDATE tb_daftar_pemohon SET disposisi = '$disposisi', disposisi2 = '$disposisi2' WHERE id = $id;";

		//Meng-update Database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data';
		}else{
			echo 'Gagal Update Data';
		}

		mysqli_close($con);
	}
	
?>