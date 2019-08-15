<?php

	require_once('koneksi.php');

	class usr{}
	
	$password = $_POST["password"];
	$email = $_POST["email"];
	
	if ((empty($email)) || (empty($password))) { 
	$response = new usr();
	$response->success = 0;
	$response->message = "Kolom tidak boleh kosong"; 
	die(json_encode($response));
	}
	
	$query = mysqli_query($con, "SELECT * FROM tb_userpemohon WHERE password='$password' AND email='$email'");
	
	$row = mysqli_fetch_array($query);
	
	if (!empty($row)){
	$response = new usr();
	$response->success = 1;
	$response->message = "Selamat datang ".$row['instansi'];
	$response->id = $row['id'];
	$response->email = $row['email'];
	$response->instansi = $row['instansi'];
	die(json_encode($response));
		
	} else { 
	$response = new usr();
	$response->success = 0;
	$response->message = "Email atau password salah!";
	die(json_encode($response));
	}
	
	mysqli_close($con);

?>