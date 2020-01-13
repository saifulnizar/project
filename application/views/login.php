<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Selamat Datang SI UPK Keluhan Pelanggan</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url().'asset/css/bootstrap.min.css'?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url().'asset/css/mdb.min.css'?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url().'asset/css/style.css'?>" rel="stylesheet">
</head>

<body>

  <div style="height: 100vh  ">
    <div class="flex-center flex-column">
		
		<h1 class="text-hide animated fadeIn mb-4"
        style="background-image: url('<?php echo base_url().'asset/img/siupk.png'?>');">
        Asta Brata</h1>
		
		<img style= "background-color: black;" src="<?php echo base_url().'asset/img/siupk.png'?>" class="float-right rounded z-depth-2" alt="avatar image" height="50">
					
		<!-- Default form login -->
		<form class="text-center border border-light p-5" action="<?php echo site_url('login/login')?>" method="post">
			<p class="h4 mb-4">Sign in</p>
			<input type="text" id="defaultLoginFormEmail" name="nama"class="form-control mb-4" placeholder="Username">
			<input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="Password">
			<div class="d-flex justify-content-around">
			  
			  <div>
			  <?php echo $this->session->flashdata('gagal');?>
			   <?php echo $this->session->flashdata('close');?>
			    <?php echo $this->session->flashdata('sukses');?>
				
			  </div>
			</div>
			<button class="btn btn-info btn-block my-4" type="submit">Masuk</button>
			<p>Belum menjadi anggota?
				<a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Daftar</a>
			</p>
		</form>
		<!-- Default form login -->
		
      <h5 class="animated fadeIn mb-3">Terima kasih telah menggunakan layanan SI UPK Keluhan Pelanggan</h5>

      <p class="animated fadeIn text-muted">Asta Brata Team</p>
		<div class="text-center">
			
		</div>
    </div>
	
  </div>
  <!-- Start your project here-->
	
	<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h4 class="modal-title w-100 font-weight-bold">Daftar</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo site_url('login/daftar')?>" method="post">
			<div class="modal-body mx-3">
				<div class="md-form mb-5">
					<input type="hidden" id="orangeForm-name" name="id_user" class="form-control validate">
				</div>
				
				<div class="md-form mb-5">
					<i class="fas fa-user prefix grey-text"></i>
					<input type="text" id="orangeForm-name" name="nama" class="form-control validate">
					<label data-error="wrong" data-success="right" for="orangeForm-name">Tulis Nama</label>
				</div>
				<div class="md-form mb-5">
					<i class="fas fa-home prefix grey-text"></i>
					<input type="text" id="orangeForm-email" name="alamat" class="form-control validate">
					<label data-error="wrong" data-success="right" for="orangeForm-email">Tulis Alamat</label>
				</div>

				<div class="md-form mb-4">
					<i class="fas fa-lock prefix grey-text"></i>
					<input type="password" id="orangeForm-pass" name="password" class="form-control validate">
					<label data-error="wrong" data-success="right" for="orangeForm-pass">Tulis Password</label>
				</div>

			</div>
			<div class="modal-footer d-flex justify-content-center">
				<button class="btn btn-deep-success"  type="submit" >Daftar</button>
			</div>
			</form>
		</div>
	  </div>
	</div>
  
  
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo base_url().'asset/js/jquery-3.4.1.min.js'?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url().'asset/js/popper.min.js'?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url().'asset/js/bootstrap.min.js'?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url().'asset/js/mdb.min.js'?>"></script>

  <script type="text/javascript">
  $('.toast').toast('show');
  </script>
</body>

</html>
