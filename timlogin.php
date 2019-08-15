<?php

	require_once('koneksi.php');

	class usr{}
	
	$password = $_POST["password"];
	$username = $_POST["username"];
	$nip = $_POST["nip"];
	
	if ((empty($nip)) || (empty($username)) || (empty($password))) { 
	$response = new usr();
	$response->success = 0;
	$response->message = "Kolom tidak boleh kosong"; 
	die(json_encode($response));
	}
	
	$query = mysqli_query($con, "SELECT * FROM tb_userpetugas WHERE password='$password' AND username='$username' AND nip='$nip'");
	
	$row = mysqli_fetch_array($query);
	
	if (!empty($row)){
	$response = new usr();
	$response->success = 1;
	$response->message = "Selamat datang ".$row['username'];
	$response->id = $row['id'];
	$response->nip = $row['nip'];
	$response->username = $row['username'];
	$response->status = $row['status'];
	die(json_encode($response));
	}
	else if (!empty($row)){
	$response = new usr();
	$response->success =1;
	$response->message = "Selamat datang ".$row['username'];
	$response->id = $row['id'];
	$response->nip = $row['nip'];
	$response->username = $row['username'];
	$response->status = $row['status'];
	die(json_encode($response));
	}
	else { 
	$response = new usr();
	$response->success = 0;
	$response->message = "Data salah!";
	die(json_encode($response));
	}
	
	mysqli_close($con);

?>