<?php

require_once('koneksi.php');
	
	//Membuat SQL Query
	
	$sql = "SELECT * FROM tb_pemohon_baru INNER JOIN tb_daftar_pemohon USING (instansi) WHERE jenis = 'pengadaan tanah'";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Membuat Array Kosong
	$result = array();

	while($row = mysqli_fetch_array($r)){

		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
		array_push($result,array(
			"no_surat"=>$row['no_surat'],
			"instansi"=>$row['instansi'],
			"tgl_msk"=>$row['tgl_msk'],
			"jenis"=>$row['alamat'],
			"waktu"=>$row['jenis']
		));
	}

	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));

	mysqli_close($con);
?>