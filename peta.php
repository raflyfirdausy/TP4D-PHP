<?php
 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$perencana = $_POST['perencanaan'];
		$persiapan = $_POST['persiapan'];
		$pelaksana = $_POST['pelaksanaan'];
		$hasil = $_POST['penyerahan'];
		$pegawaipemohon = $_POST['namapegawai'];
		$nohp = $_POST['nohp'];
		$email = $_POST['mail'];
		
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_peta VALUES ('$perencana','$persiapan','$pelaksana','$hasil','$pegawaipemohon','$nohp','$email')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Data';
		}else{
			echo 'Gagal Menambahkan Data';
		}
		
		mysqli_close($con);
	}
?>