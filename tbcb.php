
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tabel Permohonan TP4D</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

 body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	
	
	/*search*/
.search {
    padding:8px 15px;
    background:rgba(50, 50, 50, 0.2);
    border:0px solid #dbdbdb;
}
.button {
    position:relative;
    padding:6px 15px;
    left:-8px;
    border:2px solid #53bd84;
    background-color:#53bd84;
    color:#fafafa;
}
.button:hover  {
    background-color:#fafafa;
    color:#207cca;
}

   @import "bourbon";

// Breakpoints
$bp-maggie: 15em; 
$bp-lisa: 30em;
$bp-bart: 48em;
$bp-marge: 62em;
$bp-homer: 75em;

// Styles
* {
 @include box-sizing(border-box);
 
 &:before,
 &:after {
   @include box-sizing(border-box);
 }
}

body {
  font-family: $helvetica;
  color: rgba(94,93,82,1);
}

a {
  color: rgba(51,122,168,1);
  
  &:hover,
  &:focus {
    color: rgba(75,138,178,1); 
  }
}

.container {
  margin: 5% 3%;
  
  @media (min-width: $bp-bart) {
    margin: 2%; 
  }
  
  @media (min-width: $bp-homer) {
    margin: 2em auto;
    max-width: $bp-homer;
  }
}

.responsive-table {
  width: 100%;
  margin-bottom: 1.5em;
  border-spacing: 0;
  
  @media (min-width: $bp-bart) {
    font-size: .9em; 
  }
  
  @media (min-width: $bp-marge) {
    font-size: 1em; 
  }
  
  thead {
    // Accessibly hide <thead> on narrow viewports
    position: absolute;
    clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
    padding: 0;
    border: 0;
    height: 1px; 
    width: 1px; 
    overflow: hidden;
    
    @media (min-width: $bp-bart) {
      // Unhide <thead> on wide viewports
      position: relative;
      clip: auto;
      height: auto;
      width: auto;
      overflow: auto;
    }
    
    th {
      background-color: rgba(29,150,178,1);
      border: 1px solid rgba(29,150,178,1);
      font-weight: normal;
      text-align: center;
      color: white;
      
      &:first-of-type {
        text-align: left; 
      }
    }
  }
  
  // Set these items to display: block for narrow viewports
  tbody,
  tr,
  th,
  td {
    display: block;
    padding: 0;
    text-align: left;
    white-space: normal;
  }
  
  tr {   
    @media (min-width: $bp-bart) {
      // Undo display: block 
      display: table-row; 
    }
  }
  
  th,
  td {
    padding: .5em;
    vertical-align: middle;
    
    @media (min-width: $bp-lisa) {
      padding: .75em .5em; 
    }
    
    @media (min-width: $bp-bart) {
      // Undo display: block 
      display: table-cell;
      padding: .5em;
    }
    
    @media (min-width: $bp-marge) {
      padding: .75em .5em; 
    }
    
    @media (min-width: $bp-homer) {
      padding: .75em; 
    }
  }
  
  caption {
    margin-bottom: 1em;
    font-size: 1em;
    font-weight: bold;
    text-align: center;
    
    @media (min-width: $bp-bart) {
      font-size: 1.5em;
    }
  }
  
  tfoot {
    font-size: .8em;
    font-style: italic;
    
    @media (min-width: $bp-marge) {
      font-size: .9em;
    }
  }
  
  tbody {
    @media (min-width: $bp-bart) {
      // Undo display: block 
      display: table-row-group; 
    }
    
    tr {
      margin-bottom: 1em;
      
      @media (min-width: $bp-bart) {
        // Undo display: block 
        display: table-row;
        border-width: 1px;
      }
      
      &:last-of-type {
        margin-bottom: 0; 
      }
      
      &:nth-of-type(even) {
        @media (min-width: $bp-bart) {
          background-color: rgba(94,93,82,.1);
        }
      }
    }
    
    th[scope="row"] {
      background-color: rgba(29,150,178,1);
      color: white;
      
      @media (min-width: $bp-lisa) {
        border-left: 1px solid  rgba(29,150,178,1);
        border-bottom: 1px solid  rgba(29,150,178,1);
      }
      
      @media (min-width: $bp-bart) {
        background-color: transparent;
        color: rgba(94,93,82,1);
        text-align: left;
      }
    }
    
    td {
      text-align: right;
      
      @media (min-width: $bp-bart) {
        border-left: 1px solid  rgba(29,150,178,1);
        border-bottom: 1px solid  rgba(29,150,178,1);
        text-align: center; 
      }
      
      &:last-of-type {
        @media (min-width: $bp-bart) {
          border-right: 1px solid  rgba(29,150,178,1);
        } 
      }
    }
    
    td[data-type=currency] {
      text-align: right; 
    }
    
    td[data-title]:before {
      content: attr(data-title);
      float: left;
      font-size: .8em;
      color: rgba(94,93,82,.75);
      
      @media (min-width: $bp-lisa) {
        font-size: .9em; 
      }
      
      @media (min-width: $bp-bart) {
        // Don’t show data-title labels 
        content: none; 
      }
    } 
  }
}
</style>

<script type="text/javascript"> 
//check all checkbox
function checkAll(form){
	for (var i=0;i<document.forms[form].elements.length;i++)
	{
		var e=document.forms[form].elements[i];
		if ((e.name !='allbox') && (e.type=='checkbox'))
		{
			e.checked=document.forms[form].allbox.checked;
		}
	}
}
</script>
 
</head>
<body>


	<!-- memulai modal nya. pada id="$myModal" harus sama dengan data-target="#myModal" pada tombol di atas -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Data siswa</h4>
				</div>
				<!-- memulai untuk konten dinamis -->
				<!-- lihat id="data_siswa", ini yang di pangging pada ajax di bawah -->
				<div class="modal-body" id="data_siswa">
				</div>
				<!-- selesai konten dinamis -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>


	<!-- ini buat memasukkan library jquery, kalau gak ada ini nanti gak jalan modalnya -->
	<script src="js/jquery.min.js"></script>
	<!-- ini buat memasukkan javascript Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- nah, ini buat menampilkan data modal dengan ajax, pantengin ya :) -->
	<script>
	// ini menyiapkan dokumen agar siap grak :)
	$(document).ready(function(){
		// yang bawah ini bekerja jika tombol lihat data (class="view_data") di klik
		$('.view_data').click(function(){
			// membuat variabel id, nilainya dari attribut id pada button
			// id="'.$row['id'].'" -> data id dari database ya sob, jadi dinamis nanti id nya
			var id = $(this).attr("id");
			
			// memulai ajax
			$.ajax({
				url: 'pop.php',	// set url -> ini file yang menyimpan query tampil detail data siswa
				method: 'post',		// method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
				data: {id:id},		// nah ini datanya -> {id:id} = berarti menyimpan data post id yang nilainya dari = var id = $(this).attr("id");
				success:function(data){		// kode dibawah ini jalan kalau sukses
					$('#data_siswa').html(data);	// mengisi konten dari -> <div class="modal-body" id="data_siswa">
					$('#myModal').modal("show");	// menampilkan dialog modal nya
				}
			});
		});
	});
	</script>
  
  <div class="container">
  <table class="responsive-table">
    <caption>Top 10 Grossing Animated Films of All Time</caption>
    <thead>
      <tr>
        <th scope="col">Film Title</th>
        <th scope="col">Released</th>
        <th scope="col">Studio</th>
        <th scope="col">Worldwide Gross</th>
        <th scope="col">Domestic Gross</th>
        <th scope="col">Foreign Gross</th>
        <th scope="col">Budget</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <td colspan="7">Sources: <a href="http://en.wikipedia.org/wiki/List_of_highest-grossing_animated_films" rel="external">Wikipedia</a> &amp; <a href="http://www.boxofficemojo.com/genres/chart/?id=animation.htm" rel="external">Box Office Mojo</a>. Data is current as of October 3, 2018.</td>
      </tr>
    </tfoot>
    <tbody>
      <tr>
        <th scope="row">Frozen</th>
        <td data-title="Released">2013</td>
        <td data-title="Studio">Disney</td>
        <td data-title="Worldwide Gross" data-type="currency">$1,276,480,335</td>
        <td data-title="Domestic Gross" data-type="currency">$400,738,009</td>
        <td data-title="Foreign Gross" data-type="currency">$875,742,326</td>
        <td data-title="Budget" data-type="currency">$150,000,000</td>
      </tr>
       <tr>
        <th scope="row">Incredibles 2</th>
        <td data-title="Released">2018</td>
        <td data-title="Studio">Disney Pixar</td>
        <td data-title="Worldwide Gross" data-type="currency">$1,210,072,582</td>
        <td data-title="Domestic Gross" data-type="currency">$606,782,977</td>
        <td data-title="Foreign Gross" data-type="currency">$602,369,069</td>
        <td data-title="Budget" data-type="currency">$200,000,000</td>
      </tr>
      <tr>
        <th scope="row">Minions</th>
        <td data-title="Released">2015</td>
        <td data-title="Studio">Universal</td>
        <td data-title="Worldwide Gross" data-type="currency">$1,159,398,397</td>
        <td data-title="Domestic Gross" data-type="currency">$336,045,770</td>
        <td data-title="Foreign Gross" data-type="currency">$823,352,627</td>
        <td data-title="Budget" data-type="currency">$74,000,000</td>
      </tr>
      <tr>
        <th scope="row">Toy Story 3</th>
        <td data-title="Released">2010</td>
        <td data-title="Studio">Disney Pixar</td>
        <td data-title="Worldwide Gross" data-type="currency">$1,066,969,703</td>
        <td data-title="Domestic Gross" data-type="currency">$415,004,880</td>
        <td data-title="Foreign Gross" data-type="currency">$651,964,823</td>
        <td data-title="Budget" data-type="currency">$200,000,000</td>
      </tr>
      <tr>
        <th scope="row">Despicable Me 3</th>
        <td data-title="Released">2017</td>
        <td data-title="Studio">Universal</td>
        <td data-title="Worldwide Gross" data-type="currency">$1,034,799,409</td>
        <td data-title="Domestic Gross" data-type="currency">$264,624,300</td>
        <td data-title="Foreign Gross" data-type="currency">$770,175,109</td>
        <td data-title="Budget" data-type="currency">$80,000,000</td>
      </tr>
      <tr>
        <th scope="row">Finding Dory</th>
        <td data-title="Released">2016</td>
        <td data-title="Studio">Disney Pixar</td>
        <td data-title="Worldwide Gross" data-type="currency">$1,028,570,889</td>
        <td data-title="Domestic Gross" data-type="currency">$486,295,561</td>
        <td data-title="Foreign Gross" data-type="currency">$542,275,328</td>
        <td data-title="Budget" data-type="currency">$175,000,000</td>
      </tr>
      <tr>
        <th scope="row">Zootopia</th>
        <td data-title="Released">2016</td>
        <td data-title="Studio">Disney</td>
        <td data-title="Worldwide Gross" data-type="currency">$1,023,227,498</td>
        <td data-title="Domestic Gross" data-type="currency">$341,268,248</td>
        <td data-title="Foreign Gross" data-type="currency">$681,959,250</td>
        <td data-title="Budget" data-type="currency">$150,000,000</td>
      </tr>
      <tr>
        <th scope="row">Despicable Me 2</th>
        <td data-title="Released">2013</td>
        <td data-title="Studio">Universal</td>
        <td data-title="Worldwide Gross" data-type="currency">$970,761,885</td>
        <td data-title="Domestic Gross" data-type="currency">$368,061,265</td>
        <td data-title="Foreign Gross" data-type="currency">$602,700,620</td>
        <td data-title="Budget" data-type="currency">$76,000,000</td>
      </tr>
      <tr>
        <th scope="row">The Lion King</th>
        <td data-title="Released">1994</td>
        <td data-title="Studio">Disney</td>
        <td data-title="Worldwide Gross" data-type="currency">$987,483,777</td>
        <td data-title="Domestic Gross" data-type="currency">$422,783,777</td>
        <td data-title="Foreign Gross" data-type="currency">$564,700,000</td>
        <td data-title="Budget" data-type="currency">$45,000,000</td>
      </tr>
      <tr>
        <th scope="row">Finding Nemo</th>
        <td data-title="Released">2003</td>
        <td data-title="Studio">Pixar</td>
        <td data-title="Worldwide Gross" data-type="currency">$936,743,261</td>
        <td data-title="Domestic Gross" data-type="currency">$380,843,261</td>
        <td data-title="Foreign Gross" data-type="currency">$555,900,000</td>
        <td data-title="Budget" data-type="currency">$94,000,000</td>
      </tr>
    </tbody>
  </table>
</div>
  
  
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Tabel <b>Permohonan TP4D</b></h2>
					</div>
					<div class="col-sm-6">
					</div>
                </div>
            </div>
			<form method="post" name="form[0]" action="">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
						<th>Nomor Surat</th>
						<th>Instansi Pemohon</th>
						<th>Tanggal Permohonan</th>
						<th>Jenis Kegiatan</th>
						<th>Lokasi Kegiatan</th>
						<th>Waktu Pekerjaan</th>
						<th>Tujuan Permohonan</th>
						<th>Rencana Uitzet</th>
						<th>Rencana PCM</th>
						<th>Rencana MC50</th>
						<th>Rencana PHO</th>
                        <th>Detail</th>
                    </tr> 
	
                </thead>
				
				 <?php
                                    include 'koneksi.php';
									$halaman = 10; //batasan halaman
									$page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
									$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                                    $lihat  = mysqli_query($con, "SELECT * FROM tb_utama JOIN tb_permohonan JOIN tb_fisarpras ORDER BY tanggal DESC LIMIT $mulai, $halaman");
									$sqli = mysqli_query($con, "FROM tb_utama INNER JOIN tb_permohonan ON tb_permohonan.id = tb_utama.id");
								
									
                                    if (mysqli_num_rows($sqli) == 0) { //jika hasil dari query menampilkan 0 data maka akan memperlihatkan data kosong
                                        echo '<tr><td colspan="9"><center>Data Kosong!!!</center></td></tr>';
                                    }else{
                                    $no     = 1;
                                    while($data = mysql_fetch_assoc($lihat)) {
										
										 ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $data['nosurat']?></td>
                                        <td><?php echo $data['pemohon']?></td>
										<td><?php echo $data['tanggal']?></td>
                                        <td><?php echo $data['kegiatan']?></td>
										<td><?php echo $data['lokasi']?></td>
										<?php $date1=$data['awal'];
										$date2=$data['akhir'];
										$start_date = new DateTime($date1);
										$end_date = new DateTime($date2);
										$interval = $start_date->diff($end_date); ?>
                                        <td><?php echo "$interval->days hari ";?></td>
                                        <td><?php echo $data['tujuan']?></td>
										<td><?php echo $data['uitzet']?></td>
										<td><?php echo $data['pcm']?></td>
										<td><?php echo $data['mc']?></td>
										<td><?php echo $data['pho']?></td>
                                        <td>
											<!-- perhatikan pada atribut class dan id, ini atribut yang berisi data yang akan dipanggil ketika tombol di klik -->
											<button type="button" class="view_data btn btn-primary btn-xs" data-toggle="modal" id="'.$data['id'].'" data-target="#myModal">Lihat data</button>
											<a href="#myModal" id="jwpopupLink" data-toggle="modal"><i class="material-icons" style="color:green" data-toggle="tooltip" title="Detail">&#xE85D;</i></a>
											<a href="hapus.php?id=<?php echo $data['nosurat']?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php $no++;}}?>      
		</tbody>
            </table>
			</form>
  
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
  
    <li>
	
					<?php for ($i=1; $i<=$pages; $i++){ ?>
						<a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?> </a>
					<?php } ?>
					
      <a href="?halaman=<?php echo $page + 1; ?>" aria-label="Next">
        <span aria-hidden="true">Next &raquo;</span>
      </a>
    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>                                		                            