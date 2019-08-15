<?php
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM tb_daftar_pemohon WHERE disposisi2='Pokja 1' ORDER BY tgl_masuk DESC ";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Membuat Array Kosong
	$result = array();

	while($row = mysqli_fetch_array($r)){

		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
		array_push($result,array(
			"no_surat"=>$row['no_surat'],
			"noregis"=>$row['no_regis'],
			"id"=>$row['id'],
			"tgl_msk"=>$row['tgl_masuk'],
			"jenis"=>$row['jenis'],
			"instansi"=>$row['instansi'],
			"pagu"=>$row['pagu'],
			"status"=>$row['disposisi2'],
			"tahun"=>$row['tahun']
		));
	}

	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));

	mysqli_close($con);
?>