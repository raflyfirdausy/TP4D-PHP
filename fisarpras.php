<?php
 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable	
		$uitzet = $_POST['uitzet'];
		$pcm = $_POST['pcm'];
		$mc = $_POST['mc'];
		$pho = $_POST['pho'];
		$pegawaipemohon = $_POST['namapegawai'];
		$nohp = $_POST['nohp'];
		$email = $_POST['mail'];
		
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_fisarpras (uitzet,pcm,mc,pho,pegawaipemohon,nohp,email) VALUES ('$uitzet','$pcm','$mc','$pho','$pegawaipemohon','$nohp','$email')";
		
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