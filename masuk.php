<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$email = $_POST['email'];
		$password = $_POST['password'];
				
		//Pembuatan Syntax SQL
		$sql = "SELECT * FROM tbl_awal WHERE email='$email' AND password='$password'";
		
		$result = mysqli_query($con,$sql);
		$check = mysqli_fetch_array($result);
		
				//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(isset($check)){
			echo 'Berhasil Menambahkan Data';
		}else{
			echo 'Gagal Menambahkan Data';
		}
		
		mysqli_close($con);
	}
?>