<?php
	require_once('koneksi.php');
	
	//Membuat SQL Query
	
	$sql = "SELECT * FROM tb_daftar_pemohon WHERE jenis = 'Pengadaan Sarpas' AND disposisi2 IN ('Pokja 1','Pokja 2','Pokja 3','Tim Legal Asistance') ORDER BY tgl_masuk DESC";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Membuat Array Kosong
	$result = array();

	while($row = mysqli_fetch_array($r)){

		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
		array_push($result,array(
			"id"=>$row['id'],
			"noregis"=>$row['no_regis'],
			"instansi"=>$row['instansi'],
			"alamat"=>$row['alamat'],
			"no_surat"=>$row['no_surat'],
			"tgl_surat"=>$row['tgl_surat'],
			"tgl_msk"=>$row['tgl_masuk'],
			"jenis"=>$row['jenis'],
			"kegiatan"=>$row['kegiatan'],
			"pagu"=>$row['pagu'],
			"instansi"=>$row['instansi'],
			"tahun"=>$row['tahun'],
			"cara"=>$row['cara'],
			"pembayaran"=>$row['pembayaran'],
			"lokasi"=>$row['lokasi'],
			"konsultan"=>$row['konsultan'],
			"awal"=>$row['awal'],
			"akhir"=>$row['akhir'],
			"uitzet"=>$row['uitzet'],
			"pcm"=>$row['pcm'],
			"mc"=>$row['mc'],
			"pho"=>$row['pho'],
			"waktu"=>$row['waktu'],
			"tujuan"=>$row['tujuan']
		));
	}

	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));

	mysqli_close($con);
?>