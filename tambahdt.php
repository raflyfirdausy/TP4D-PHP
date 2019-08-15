<?php
 
		include "koneksi.php";
		
 
		$query = "SELECT max(no_regis) as maxKode FROM tb_daftar_pemohon";
		$hasil = mysqli_query($con,$query);
		$data = mysqli_fetch_array($hasil);
		$kodeBarang = $data['maxKode'];
		$noUrut = (int) substr($kodeBarang, 3, 3);
		$noUrut++;
		$char = "PBK";
		$kodeBarang = $char . sprintf("%03s", $noUrut);
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
		//Mendapatkan Nilai Variable
		$instansi =$_POST['pemohon'];
		$alamat = $_POST['alamat'];
		$no_surat = $_POST['nosurat'];
		$tgl_surat = $_POST['tglsurat'];
		$tgl_masuk = $_POST['tglmasuk'];


		$query2 = "INSERT INTO tb_pemohon_baru (no_regis, instansi,alamat,no_surat,tgl_surat,tgl_msk) VALUES ('$kodeBarang','$instansi','$alamat','$no_surat','$tgl_surat','$tgl_masuk')";
		
		if (mysqli_query($con, $query2)) {
		echo 'Berhasil Menambahkan Data';
		}else{
		echo 'Gagal Menambahkan Data';
		}
			
		mysqli_close($con);
		}
	

?>