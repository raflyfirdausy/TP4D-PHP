<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Responsive & Accessible Data Table</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:before, *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
  color: #5e5d52;
}

a {
  color: #337aa8;
}
a:hover, a:focus {
  color: #4b8ab2;
}

.container {
  margin: 5% 3%;
}
@media (min-width: 48em) {
  .container {
    margin: 2%;
  }
}
@media (min-width: 75em) {
  .container {
    margin: 2em auto;
    max-width: 75em;
  }
}

.responsive-table {
  width: 100%;
  margin-bottom: 1.5em;
  border-spacing: 0;
}
@media (min-width: 48em) {
  .responsive-table {
    font-size: .9em;
  }
}
@media (min-width: 62em) {
  .responsive-table {
    font-size: 1em;
  }
}
.responsive-table thead {
  position: absolute;
  clip: rect(1px 1px 1px 1px);
  /* IE6, IE7 */
  padding: 0;
  border: 0;
  height: 1px;
  width: 1px;
  overflow: hidden;
}
@media (min-width: 48em) {
  .responsive-table thead {
    position: relative;
    clip: auto;
    height: auto;
    width: auto;
    overflow: auto;
  }
}
.responsive-table thead th {
  background-color: #1d96b2;
  border: 1px solid #1d96b2;
  font-weight: normal;
  text-align: center;
  color: white;
}
.responsive-table thead th:first-of-type {
  text-align: left;
}
.responsive-table tbody,
.responsive-table tr,
.responsive-table th,
.responsive-table td {
  display: block;
  padding: 0;
  text-align: left;
  white-space: normal;
}
@media (min-width: 48em) {
  .responsive-table tr {
    display: table-row;
  }
}
.responsive-table th,
.responsive-table td {
  padding: .5em;
  vertical-align: middle;
}
@media (min-width: 30em) {
  .responsive-table th,
  .responsive-table td {
    padding: .75em .5em;
  }
}
@media (min-width: 48em) {
  .responsive-table th,
  .responsive-table td {
    display: table-cell;
    padding: .5em;
  }
}
@media (min-width: 62em) {
  .responsive-table th,
  .responsive-table td {
    padding: .75em .5em;
  }
}
@media (min-width: 75em) {
  .responsive-table th,
  .responsive-table td {
    padding: .75em;
  }
}
.responsive-table caption {
  margin-bottom: 1em;
  font-size: 1em;
  font-weight: bold;
  text-align: center;
}
@media (min-width: 48em) {
  .responsive-table caption {
    font-size: 1.5em;
  }
}
.responsive-table tfoot {
  font-size: .8em;
  font-style: italic;
}
@media (min-width: 62em) {
  .responsive-table tfoot {
    font-size: .9em;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody {
    display: table-row-group;
  }
}
.responsive-table tbody tr {
  margin-bottom: 1em;
}
@media (min-width: 48em) {
  .responsive-table tbody tr {
    display: table-row;
    border-width: 1px;
  }
}
.responsive-table tbody tr:last-of-type {
  margin-bottom: 0;
}
@media (min-width: 48em) {
  .responsive-table tbody tr:nth-of-type(even) {
    background-color: rgba(94, 93, 82, 0.1);
  }
}
.responsive-table tbody th[scope="row"] {
  background-color: #1d96b2;
  color: white;
}
@media (min-width: 30em) {
  .responsive-table tbody th[scope="row"] {
    border-left: 1px solid #1d96b2;
    border-bottom: 1px solid #1d96b2;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody th[scope="row"] {
    background-color: transparent;
    color: #5e5d52;
    text-align: left;
  }
}
.responsive-table tbody td {
  text-align: right;
}
@media (min-width: 48em) {
  .responsive-table tbody td {
    border-left: 1px solid #1d96b2;
    border-bottom: 1px solid #1d96b2;
    text-align: center;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody td:last-of-type {
    border-right: 1px solid #1d96b2;
  }
}
.responsive-table tbody td[data-type=currency] {
  text-align: right;
}
.responsive-table tbody td[data-title]:before {
  content: attr(data-title);
  float: left;
  font-size: .8em;
  color: rgba(94, 93, 82, 0.75);
}
@media (min-width: 30em) {
  .responsive-table tbody td[data-title]:before {
    font-size: .9em;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody td[data-title]:before {
    content: none;
  }
}

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <div class="container">
  <table class="responsive-table">
    <caption>Top 10 Grossing Animated Films of All Time</caption>
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nomor Surat</th>
        <th scope="col">Instansi Pemohon</th>
        <th scope="col">Tanggal Permohonan</th>
        <th scope="col">Jenis Kegiatan</th>
        <th scope="col">Lokasi Kegiatan</th>
        <th scope="col">Waktu Pekerjaan</th>
		<th scope="col">Tujuan Permohonan</th>
		<th scope="col">Rencana Uitzet</th>
		<th scope="col">Rencana PCM</th>
		<th scope="col">Rencana MC50</th>
		<th scope="col">Rencana PHO</th>
		<th scope="col">K</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <td colspan="7">Copyright TP4D KEJARI PURWOKERTO | 2019</td>
      </tr>
    </tfoot>
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
			$query = mysqli_query($koneksi, "SELECT * FROM tb_utama LEFT JOIN tb_permohonan ON tb_utama.id = tb_permohonan.id LEFT JOIN tb_fisarpras ON tb_permohonan.id = tb_fisarpras.id LIMIT $mulai, $halaman");
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
				  <td><?php echo $row['uitzet']; ?></td>
				  <td><?php echo $row['pcm']; ?></td>
				  <td><?php echo $row['mc']; ?></td>
				  <td><?php echo $row['pho']; ?></td>
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
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

</body>

</html>
