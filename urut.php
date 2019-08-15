<?php
 
	include "koneksi.php";
		
		$query = "SELECT max(no_regis) as maxKode FROM tb_daftar_pemohon";
		$hasil = mysqli_query($con,$query);
		$data = mysqli_fetch_array($hasil);
		$kodeBarang = $data['maxKode'];
		$noUrut = (int) substr($kodeBarang, 3, 3);
		$noUrut++;
		$char = "TPB";
		$kodeBarangg = $char . sprintf("%03s", $noUrut);
		
?>