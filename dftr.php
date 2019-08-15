<?php
 
	#if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
	$email = "cek";#$_POST["email"];
	$username = "ods";#$_POST["username"];
	$password = "1234ods";#$_POST["password"];
		
		if ((empty($email))) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom email tidak boleh kosong"; 
		die(json_encode($response));
	} else if ((empty($username))) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom username tidak boleh kosong"; 
		die(json_encode($response));
	} else if ((empty($password))) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Konfirmasi password tidak sama"; 
		die(json_encode($response));
	} else {
		if (!empty($email) && !empty($username) && !empty($password)){
			$num_rows =mysqli_query("SELECT * FROM tb_pemohon WHERE email='".$email."'");

			if ($num_rows == 0){
				$query = mysqli_query("INSERT INTO tb_pemohon (email, username, password) VALUES('".$email."','".$username."','".$password."')");

				if ($query){
					$response = new usr();
					$response->success = 1;
					$response->message = "Register berhasil, silahkan login.";
					die(json_encode($response));

				} else {
					$response = new usr();
					$response->success = 0;
					$response->message = "Username sudah ada";
					die(json_encode($response));
				}
			} else {
				$response = new usr();
				$response->success = 0;
				$response->message = "Username sudah ada";
				die(json_encode($response));
			}
		}
	}
		
		mysqli_close($con);
	#}
?>