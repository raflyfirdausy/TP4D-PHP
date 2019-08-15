<?php

	$id = $_GET['id'];

	//Importing database
	require_once('koneksi.php');

	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM tb_daftar_pemohon WHERE id=$id";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"id"=>$row['id'],
			"noregis"=>$row['no_regis'],
			"instansi"=>$row['instansi'],
			"alamat"=>$row['alamat'],		
			"no_surat"=>$row['no_surat'],			
			"tgl_msk"=>$row['tgl_masuk'],
			"tgl_surat"=>$row['tgl_surat'],
			"jenis"=>$row['jenis'],	
			"pagu"=>$row['pagu'],	
			"tahun"=>$row['tahun'],	
			"cara"=>$row['cara'],	
			"pembayaran"=>$row['pembayaran'],	
			"lokasi"=>$row['lokasi'],	
			"konsultan"=>$row['konsultan'],	
			"telaah"=>$row['telaah'],	
			"disposisi"=>$row['disposisi']

		));

	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));

	mysqli_close($con);
	
?>