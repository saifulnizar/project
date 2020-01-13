<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title id="title">SI UPK Keluhan Pelanggan</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url().'asset/css/bootstrap.min.css'?>" rel="stylesheet">
   <link href="<?php echo base_url().'asset/css/addons/datatables.min.css'?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url().'asset/css/mdb.min.css'?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url().'asset/css/style.css'?>" rel="stylesheet">

</head>


<body>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg fixed-top navbar-dark orange lighten-1">
  <a class="navbar-brand" href="#">SI UPK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin')?>">Home</a>
		
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/laporan')?>">Laporan</a>
		
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('login/logout')?>">Keluar</a>
      </li>
	  
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a class="nav-link p-0" href="#">
          <img style= "background-color: black;" src="<?php echo base_url().'asset/img/siupk.png'?>" class=" rounded z-depth-2" alt="avatar image" height="35">
        </a>
      </li>
    </ul>

  </div>
</nav>
<!--/.Navbar -->
<div class="container">
<div class="row mx-md-n5">
  <div class="col py-3 px-md-5 bordered col-example"></div>
  <div class="col py-3 px-md-5 bordered col-example"></div>
  <div class="col py-3 px-md-5 bordered col-example"></div>
</div>
<br><br>
	<div class="row">
	<div class="col-3">
		<i class="fas fa-user fa-4x"></i>
		<p class="h6">Jumlah User <span class="badge badge-default ml-1"><?php echo $user; ?></span></p>
	</div>
	<div class="col-3">
		<i class="fas fa-envelope fa-4x"></i>
		<p class="h6">Pesan Masuk <span class="badge badge-default ml-1"><?php echo $solusi; ?></span></p>
	</div>
	<div class="col-3">
		<i class="fas fa-envelope-open fa-4x"></i>
		<p class="h6">Pesan Terjawab <span class="badge badge-default ml-1"><?php echo $chat; ?></span></p>
	</div>
	<div class="col-3">
		<i class="far fa-envelope fa-4x"></i>
		<p class="h6">Jumlah Pesan<span class="badge badge-default ml-1"><?php echo $all; ?></span></p>
	</div>
	</div>
	<hr>
 <div class="row">
  
    <div class="col-12">
	<h4 class="text-center" id="judul">Laporan Data Solusi dan Request</h4>
		<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
		  <thead>
			<tr>
			  <th class="th-sm">Id User
			  </th>
			  <th class="th-sm">Nama User
			  </th>
			  <th class="th-sm">Request
			  </th>
			  <th class="th-sm">Foto Request
			  </th>
			  <th class="th-sm">Solusi
			  </th>
			  <th class="th-sm">Foto Solusi
			  </th>
			   <th class="th-sm">Tanggal
			  </th>
			</tr>
		  </thead>
		  <tbody id="laporan_data">
			
		  </tbody>
		  <tfoot>
			<tr>
			  <th>Id User
			  </th>
			  <th>Nama User
			  </th>
			  <th>Request
			  </th>
			  <th>Foto Request
			  </th>
			  <th>Solusi
			  </th>
			  <th>Foto Solusi
			  </th>
			   <th>Tanggal
			  </th>
			</tr>
			<a href="<?php echo site_url('admin/cetak')?>"><button type="button" class="btn btn-sm btn-dark float-right">Print</button>
		  </tfoot>
		</table>
	
		
	</div>
	
    <div class="col-6 col-lg-4">
	
		
	
  </div>
  <hr>
  <div class="row">
    <div class="col-12 col-sm-6 col-lg-8">
		
	</div>
    <div class="col-6 col-sm-4"></div>
    <div class="col-6 col-sm-4"></div>
  </div>
</div>


  <script type="text/javascript" src="<?php echo base_url().'asset/js/jquery-3.4.1.min.js'?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'asset/js/addons/datatables.min.js'?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url().'asset/js/popper.min.js'?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url().'asset/js/bootstrap.min.js'?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url().'asset/js/mdb.min.js'?>"></script>
  <script type="text/javascript">
	$(document).ready(function () {
		$('#dtBasicxample').DataTable();
		$('.dataTables_length').addClass('bs-select');
		
		
		data_all();
		
		function data_all(){
			$.ajax({
				type  : 'ajax',
				url   : '<?php echo site_url('admin/data_semua')?>',
				async  : false,
				dataType : 'json',
				success : function(data){
					var html = '';
					var i;
					for (i=0; i<data.length; i++){
						html +='<tr>'+
								  '<td>'+data[i].id_user+'</td>'+
								  '<td>'+data[i].username+'</td>'+
								  '<td>'+data[i].request+'</td>'+
								 '<td>'+'<img src="<?php echo base_url('asset/img/')?>'+data[i].image+'" alt="thumbnail" class="rounded float-left" style="width: 75px" height="50">'+'</td>'+
								 '<td>'+data[i].solusi+'</td>'+
								 '<td>'+'<img src="<?php echo base_url('asset/img/')?>'+data[i].file+'" alt="thumbnail" class="rounded float-left" style="width: 75px" height="50">'+'</td>'+
								 '<td>'+data[i].tanggal+'</td>'+
								'</tr>';
					}
				
					$('#laporan_data').html(html);
				}
				
			});
		}
	});
  </script>
  
</body>

</html>
