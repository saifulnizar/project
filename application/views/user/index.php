<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>SI UPK Keluhan Pelanggan</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url().'asset/css/bootstrap.min.css'?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url().'asset/css/mdb.min.css'?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url().'asset/css/style.css'?>" rel="stylesheet">

</head>


<body>

	<!--Navbar -->
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-dark">
	<img src="<?php echo base_url().'asset/img/siupk.png'?>" class=" rounded z-depth-2" alt="avatar image" height="20">
	  <a class="navbar-brand" href="#"><strong>Selamat Datang</strong>  <strong class="text-center"> SI UPK Keluhan Pelanggan</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>  </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
             
              <a class="dropdown-item" href="<?php echo site_url('login/logout')?>">Log out</a>
            </div>
         </li>
        </ul>
      </div>
    </nav>
    <!--/.Navbar -->
	
	<div class="container">
		
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4"></div>
			<div class="col-4"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-12 col-sm-6 col-lg-8">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home"
				  aria-selected="true">Data tanpa foto</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile"
				  aria-selected="false">Data dengan foto</a>
			  </li>
			<!--  <li class="nav-item">
				<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact"
				  aria-selected="false">Contact</a>
			  </li> -->
			</ul>
			<div class="tab-content" id="myTabContent">
			  <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
				<div class="card">
				<div class="card-header bg-dark">
					
				</div>
					<div id="show_chat" class="card-body example-1 scrollbar-ripe-malinka">
					
					<!--data chat-->
					
					</div>
				</div>
			  </div>
			  <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
					<div class="card">
				<div class="card-header bg-dark">
					
				</div>
					<div id="show_chat_photo" class="card-body example-1 scrollbar-ripe-malinka">
					
					<!--data chat-->
					
					</div>
				</div>
			  </div>
			  <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab"></div>
			</div>
				
			</div>
			<div class="col-6 col-lg-4">
			
			
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"aria-selected="true">Profil Admin</a>
					</li>
				  <li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					  aria-selected="false">Profil Saya</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
					  aria-selected="false">Ubah Profil Saya</a>
				  </li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  
				  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					
					<div class="card mb-0">
					<div class="card-body" id="show_admin">
					
					<!--Data Admin-->		
					
						</div>
					</div>
				
					<!--Alert Modal Info-->
					<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
						<div class="toast-header">
							<svg class=" rounded mr-2" width="20" height="20" xmlns="<?php echo base_url().'asset/img/siupk.png'?>" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#007aff" width="100%" height="100%" /></svg>
							<strong class="mr-auto">SI Keluhan Pelanggan</strong>
							<small>1 min</small>
							<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="toast-body" id="message"></div>
					</div>
					<!--Alert Modal Info-->
					
					<div class="card form_kirim">
						<div class="card-body ">
						<form method="post">
							<h5 class="card-title">Tulis Keluhan</h5>
							<input type="hidden" name="id_admin_text" id="id_admin_text" class="form-control" >
							<div class="form-group shadow-textarea">
								<textarea name="request" id="request" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Tulis pesan disini..."></textarea>
							</div>
							
							<button type="submit"id="btn_kirim" class="float-right btn peach-gradient"><span id="logText"></span></button>
						</form>
						</div>
					</div>
				
					<div class="card form_foto" >
						<div class="card-body ">
						<form method="post" id="form_foto">
							<h5 class="card-title">Tulis Keluhan</h5>
							<input type="hidden" name="id_admin_foto" id="id_admin_foto" class="form-control" >
							<input type="text" name="request"  class="form-control" >
							 <div class="custom-file">
							<input type="file" name="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
								<label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
							</div>
							<button type="submit" id="btn_foto" class="float-right btn peach-gradient">Kirim</button>
						</form>
						</div>
					</div>

				 </div>
				  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				   
						<!-- Card -->
						<div class="card" id="show_user">
						  
						</div>
						<!-- Card -->
				   
				   </div>
				  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				
					<form id="form_user" class="text-center border border-light p-5" method="post">
						
						<input type="text" id="nama" name="nama"  value="<?php echo $this->session->userdata('username');?>" class="form-control mb-4" placeholder="Nama">
						<input type="text" id="alamat" name="alamat" value="<?php echo $this->session->userdata('alamat');?>" class="form-control mb-4" placeholder="Alamat">
						<input type="text" id="sandi" name="sandi" value="<?php echo $this->session->userdata('password');?>" class="form-control mb-4" placeholder="Password">
						<div class="custom-file">
							<input type="file" name="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
								<label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
							</div>
						<button class="btn btn-info btn-block my-4" id="submit" name="submit" type="submit">Ubah Profil</button>
					</form>
				  
				  </div>
				
				</div>
			
				
				
				
			</div>
		</div>
	</div>
								
	<!-- Footer -->
	<footer class="page-footer font-small special-color-dark fixed-bottom ">
	
		<div class="footer-copyright text-center py-3">© 2019 Copyright:
			<a href="<?php echo base_url()?>"><img src="<?php echo base_url().'asset/img/siupk.png'?>" class=" rounded z-depth-2" alt="avatar image" height="20"> Keluhan Pelanggan</a>
		</div>
	</footer>
	<!-- Footer -->
	
	

  <script type="text/javascript" src="<?php echo base_url().'asset/js/jquery-3.4.1.min.js'?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url().'asset/js/popper.min.js'?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url().'asset/js/bootstrap.min.js'?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url().'asset/js/mdb.min.js'?>"></script>
  
  <script type="text/javascript">
	$(document).ready (function () {
		
		
		setInterval(function(){
		data_admin();
		data_chat();
		data_chat_photo();
	}, 5000);
		
		data_chat_photo();
		data_user();
		data_chat();
		data_admin();
		$('.form_kirim').hide();
		$('.form_foto').hide();
		
		function data_admin(){
			$.ajax({
				type  : 'ajax',
				url   : '<?php echo site_url('user/data_admin')?>',
				async : false,
				dataType : 'json',
				success : function(data){
					var html = '';
					var a;
					for(a=0; a<data.length; a++){
						html +='<h5 class="card-title">'+data[a].username+'</h5>'+
								'<img style= "background-color: black;" src="<?php echo base_url().'asset/img/siupk.png'?>" class="float-right rounded z-depth-2"  alt="avatar image" height="20">'+
								'<p class="card-text">'+data[a].keterangan+'</p>'+
								'<button type="button" data-admin="'+data[a].id_admin+'" class=" float-right btn btn-sm btn-default btn_text">Pesan Text</button>'+
								'<button type="button" data-admin="'+data[a].id_admin+'" class=" float-right btn btn-sm btn-dark btn_foto">Kirim Foto</button>';
					}
					$('#show_admin').html(html);
				}
			});
		}
		
		function data_chat(){
			$.ajax({
				type  : 'ajax',
				url   : '<?php echo site_url('user/data_request')?>',
				async : false,
				dataType : 'json',
				success : function(data){
					var html = '';
					var a;
					for(a=0; a<data.length; a++){
						html += '<div class="card w-auto mb-3 item_chat" data-id_chat="'+data[a].id_chat+'">'+
									'<div class="card-body"><img src="<?php echo base_url('asset/img/')?>'+data[a].photo+'" class="float-left rounded-circle z-depth-2" alt="avatar image" height="30">'+
										'<h6 class="card-title text-center">'+data[a].request+'</h6>'+
										'<p class="card-text "></p>'+
										'<p class="card-text text-muted float-right" style="font-size: 13px">'+data[a].tanggal+'</p>'+
									'</div>'+
								'</div>'+
								'<div class="card w-auto mb-3 item_chat" data-id_chat="'+data[a].id_chat+'">'+
									'<div class="card-body"><img style= "background-color: black;" src="<?php echo base_url('asset/img/siupk.png')?>" class="float-right rounded z-depth-2" alt="avatar image" height="20">'+
										'<h6 class="card-title ">'+data[a].solusi+'</h6>'+
										'<p class="card-text "></p>'+
										'<p class="card-text text-muted float-left" style="font-size: 13px">'+data[a].tanggal+'</p>'+
									'</div>'+
								'</div>';
					
					}
					$('#show_chat').html(html);
				}
			});
		}
		
		function data_chat_photo(){
			$.ajax({
				type  : 'ajax',
				url   : '<?php echo site_url('user/data_request_photo')?>',
				async : false,
				dataType : 'json',
				success : function(data){
					var html = '';
					var a;
					for(a=0; a<data.length; a++){
						html += '<div class="card w-auto mb-3 item_chat" data-id_chat="'+data[a].id_chat+'">'+
									'<div class="card-body"><img src="<?php echo base_url('asset/img/')?>'+data[a].photo+'" class="float-right rounded-circle z-depth-2" alt="avatar image" height="30">'+
										'<h6 class="card-title text-center">'+data[a].request+'</h6>'+
										'<img src="<?php echo base_url('asset/img/')?>'+data[a].image+'" alt="thumbnail" class="rounded float-left" style="width: 150px" height="100">'+
									
										'<p class="card-text text-muted float-right" style="font-size: 13px">'+data[a].tanggal+'</p>'+
									'</div>'+
								'</div>'+
								'<div class="card w-auto mb-3 item_chat" data-id_chat="'+data[a].id_chat+'">'+
									'<div class="card-body"><img style= "background-color: black;" src="<?php echo base_url('asset/img/siupk.png')?>" class="float-right rounded z-depth-2" alt="avatar image" height="20">'+
										'<h6 class="card-title ">'+data[a].solusi+'</h6>'+
										'<img src="<?php echo base_url('asset/img/')?>'+data[a].file+'" alt="thumbnail" class="rounded float-left" style="width: 150px" height="100">'+
										'<p class="card-text text-muted float-right" style="font-size: 13px">'+data[a].tanggal+'</p>'+
									'</div>'+
								'</div>';
					
					}
					$('#show_chat_photo').html(html);
				}
			});
		}
		
		function data_user(){
			$.ajax({
				type  : 'ajax',
				url   : '<?php echo site_url('user/data_user')?>',
				async : false,
				dataType : 'json',
				success : function(data){
					var html = '';
					var a;
					for(a=0; a<data.length; a++){
						html += '<div class="view overlay">'+
									'<img class="card-img-top rounded mx-auto d-block" src="<?php echo base_url('asset/img/')?>'+data[a].photo+'" alt="Card image cap" style="width:75%; height:75%;">'+
									'<a href="#!">'+
										'<div class="mask rgba-white-slight"></div>'+
									'</a>'+
								'</div>'+
								'<div class="card-body">'+
									'<h4 class="card-title">'+data[a].username+'</h4>'+
									'<p class="card-text">'+data[a].alamat+'</p>'+
								'</div>';
					
					}
					$('#show_user').html(html);
				}
			});
		}
		
		$('#show_admin').on('click','.btn_text',function(){
            var id_admin = $(this).data('admin');
			$('.form_foto').hide();
			$('.form_kirim').show();
            $('[name="id_admin_text"]').val(id_admin);
        });
		
		$('#show_admin').on('click','.btn_foto',function(){
            var id_admin = $(this).data('admin');
			$('.form_kirim').hide();
			$('.form_foto').show();
            $('[name="id_admin_foto"]').val(id_admin);
        });
		
		$('#logText').html('Kirim');
		$('#btn_kirim').on('click',function(){
			var id_admin = $('#id_admin_text').val();
            var request = $('#request').val();
           
			$.ajax({
                type : "POST",
                url  : "<?php echo site_url('user/insert_request')?>",
                dataType : "JSON",
                data : {id_admin:id_admin, request:request},
                success: function(response){
						$('#message').html(response.message);
						$('[name="request"]').val();
						$('.form_kirim').hide();
						if(response.error){
							$('.toast').toast('show');
						}
						else{
							$('.toast').toast('show');
							
							$('#id_kirim')[0].reset();
						}
					
                }
            });
            return false;
		
		});
		
		$('#form_foto').submit(function(e){
            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url();?>index.php/user/insert_request_foto',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                     success: function(data){
						 alert("Upload Image Berhasil.")
						$('[name="request"]').val();
						$('[name="file"]').val();
						 $('.form_foto').hide();
					}
                 });
        });
		
		$('#form_user').submit(function(e){
            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url();?>index.php/user/edit_user',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                     success: function(data){
						 alert("Edit User Berhasil.")
						 data_user();
					}
                 });
        });
		
	});
  </script>
  
</body>

</html>
