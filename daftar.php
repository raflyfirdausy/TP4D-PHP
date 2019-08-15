<?php

	require_once('koneksi.php');

	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	$result = mysqli_query($con, "SELECT * FROM tb_pemohon WHERE email='$email'");
	$count = mysqli_num_rows($result);
	if ( $count > 0 ) {
	echo "Email sudah terdaftar";
	} else {
	//Pembuatan Syntax SQL
	mysqli_query($con,"INSERT INTO tb_pemohon (email, username, password) VALUES('".$email."','".$username."','".$password."')");
	echo "Berhasil mendaftar. Silahkan login...";
	}
		mysqli_close($con);
?>	