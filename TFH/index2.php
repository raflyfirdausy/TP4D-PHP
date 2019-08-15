<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100">No</th>
									<th class="cell100 column2">Nomor Surat</th>
									<th class="cell100 column3">Instansi Pemohon</th>
									<th class="cell100 column4">Tanggal Permohonan</th>
									<th class="cell100 column5">Jenis Kegiatan</th>
									<th class="cell100 column6">Lokasi Kegiatan</th>
									<th class="cell100 column7">Waktu Pekerjaan</th>
									<th class="cell100 column8">Tujuan Permohonan</th>
									<th class="cell100 column9">Perencanaan</th>
									<th class="cell100 column10">Persiapan</th>
									<th class="cell100 column11">Pelaksanaan</th>
									<th class="cell100 column12">Penyerahan Hasil</th>
									<th class="cell100 column13">Keterangan</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "tp4d";
 
            // Membuat Koneksi
            $koneksi = new mysqli($servername, $username, $password, $dbname);
            
            // Melakukan Cek Koneksi
            if ($koneksi->connect_error) {
                die("Koneksi Gagal : " . $koneksi->connect_error);
            } 
            //Melakukan query
			
			$halaman = 10; //batasan halaman
			$page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
			$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
            $sql = "SELECT * FROM tb_utama LEFT JOIN tb_permohonan ON tb_utama.id = tb_permohonan.id LEFT JOIN tb_fisarpras ON tb_permohonan.id = tb_fisarpras.id LIMIT";
            //$hasil = $koneksi->query($sql);
			$pages = ceil($sql/$halaman);            
			$query = mysqli_query($koneksi, "SELECT * FROM tb_utama LEFT JOIN tb_permohonan ON tb_utama.id = tb_permohonan.id LEFT JOIN tb_peta ON tb_permohonan.id = tb_peta.id ORDER BY tglmasuk DESC LIMIT $mulai, $halaman");
            $no = 1;
            if ($query->num_rows > 0) {
                foreach ($query as $row) { ?>
                  <tr>     
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nosurat']; ?></td>
				  <td><?php echo $row['pemohon']; ?></td>
				  <td><?php echo $row['tglmasuk']; ?></td>
				  <td><?php echo $row['kegiatan']; ?></td>
				  <td><?php echo $row['lokasi']; ?></td>
						<?php $date1=$row['awal'];
										$date2=$row['akhir'];
										$start_date = new DateTime($date1);
										$end_date = new DateTime($date2);
										$interval = $start_date->diff($end_date); ?>
                  <td><?php echo "$interval->days hari ";?></td>				  
				  <td><?php echo $row['tujuan']; ?></td>					
				  <td><?php echo $row['perencana']; ?></td>
				  <td><?php echo $row['persiapan']; ?></td>
				  <td><?php echo $row['pelaksana']; ?></td>
				  <td><?php echo $row['hasil']; ?></td>
                  <?php echo "<td><a href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal' data-id=".$row['id'].">Detail</a></td>"; ?>
                  </tr>
            <?php 
            $no++; 
            } 
				}else { 
            echo "0 results"; 
									} $koneksi->close(); 
            ?>
							</tbody>
						</table>
						<div class="clearfix">
                <ul class="pagination">
						<?php if ($page>1) { ?>
					<li>
						<a href="?halaman=<?php echo $page - 1; ?>" aria-label="Previous" >
						<span aria-hidden="true">&laquo; Previous</span>
						</a>
					</li>
					
						<?php }else{ ?> 
					<li class="disabled">
						<a href="?halaman=<?php echo $page; ?>" aria-label="Previous">
						<span aria-hidden="true">&laquo; Previous</span>
						</a>
					</li> <?php } ?>
					
					<?php for ($i=1; $i<=$pages; $i++){ ?>
						<a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?> </a>
					<?php } ?>
					
					<li>
						<a href="?halaman=<?php echo $page + 1; ?>" aria-label="Next">
						<span aria-hidden="true">Next &raquo;</span>
						</a>
					</li>
                </ul>
            </div>
      </div>
 
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>