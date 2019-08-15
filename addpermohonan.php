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
		
		$alamat = $_POST['alamat'];
		$no_surat = $_POST['nosurat'];
		$tgl_surat = $_POST['tglsurat'];
		$tgl_masuk = $_POST['tglmasuk'];		
		$jenis = $_POST['jenis'];
		$kegiatan = $_POST['kegiatan'];
		$pagu = $_POST['pagu'];
		$instansi = $_POST['instansi'];
		$tahun = $_POST['tahun'];
		$cara = $_POST['cara'];
		$pembayaran = $_POST['pembayaran'];
		$lokasi = $_POST['lokasi'];
		$konsultan = $_POST['konsultan'];
		$awal = $_POST['awal'];
		$akhir = $_POST['akhir'];
		$diff = ((abs(strtotime ($awal) - strtotime ($akhir)))/(60*60*24));
		$tujuan = $_POST['tujuan'];
		$uitzet = $_POST['uitzet'];
		$pcm = $_POST['pcm'];
		$mc = $_POST['mc'];
		$pho = $_POST['pho'];
		$perencanaan = $_POST['perencanaan'];
		$persiapan = $_POST['persiapan'];
		$pelaksanaan = $_POST['pelaksanaan'];
		$hasil = $_POST['hasil'];
		$pegawai = $_POST['pegawai'];
		$hp = $_POST['hp'];
		$mail = $_POST['mail'];

		$query2 = "INSERT INTO tb_daftar_pemohon ( no_regis, alamat, no_surat, tgl_surat, tgl_masuk, jenis, kegiatan, pagu, instansi, tahun, cara, pembayaran, lokasi, konsultan, awal, akhir, waktu, tujuan, uitzet, pcm, mc, pho,  perencanaan, persiapan, pelaksanaan, hasil, pegawai, hp, mail) VALUES ( '$kodeBarang', '$alamat', '$no_surat', '$tgl_surat', '$tgl_masuk', '$jenis', '$kegiatan', '$pagu', '$instansi', '$tahun', '$cara',  '$pembayaran', '$lokasi', '$konsultan', '$awal', '$akhir', '$diff', '$tujuan', '$uitzet', '$pcm', '$mc', '$pho', '$perencanaan', '$persiapan', '$pelaksanaan', '$hasil', '$pegawai', '$hp', '$mail')";
		
		if (mysqli_query($con, $query2)) {
		echo 'Berhasil Menambahkan Data';
		}else{
		echo 'GAGAL!';
		}
			
		mysqli_close($con);
		}
?>