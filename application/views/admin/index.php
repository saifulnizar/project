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
   <link href="<?php echo base_url().'asset/css/addons/datatables.min.css'?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url().'asset/css/mdb.min.css'?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url().'asset/css/style.css'?>" rel="stylesheet">

</head>


<body>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg fixed-top navbar-dark orange lighten-1">
  <a class="navbar-brand" href="#">SELAMAT DATANG DI SI UPK</a>
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

<div class="container">
<br><br><br>

<p class="ml-5 ml-lg-0"><h5><strong>Keluhan Pelanggan Yang Belum Terjawab</strong></h5></p>
  <div class="row">
  
    <div class="col-12 col-sm-6 col-lg-8">
	
		<ul class="nav nav-tabs md-tabs" id="myTabEx" role="tablist">
		  <li class="nav-item">
			<a class="nav-link active show" id="home-tab-ex" data-toggle="tab" href="#home-ex" role="tab" aria-controls="home-ex"
			  aria-selected="true">Request Tanpa Gambar </a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" id="profile-tab-ex" data-toggle="tab" href="#profile-ex" role="tab" aria-controls="profile-ex"
			  aria-selected="false">Daftar Request dengan gambar</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" id="contact-tab-ex" data-toggle="tab" href="#contact-ex" role="tab" aria-controls="contact-ex"
			  aria-selected="false">History Data Keluhan</a>
		  </li>
		</ul>

		<div class="tab-content pt-5" id="myTabContentEx">
		
		<div class="tab-pane fade active show" id="home-ex" role="tabpanel" aria-labelledby="home-tab-ex">
			<div class="card ">
			 <div class="card-header form_reg">
				<form method="post">
					<div class="input-group mb-3">
						<input type="hidden" name="id_chat" id="id_chat" class="form-control" >
						<input type="text" name="solusi" id="solusi" class="form-control" placeholder="Tuliskan solusi..." aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-dark m-0 px-3 py-2 z-depth-0 waves-effect" type="submit" id="button-addon2">Kirim</button>
						</div>
					</div>
				</form>
			 </div>
			 <div id="show_chat" class="card-body example-1 scrollbar-ripe-malinka">
				
			 </div>
			
			</div>
		</div>
		  
		<div class="tab-pane fade" id="profile-ex" role="tabpanel" aria-labelledby="profile-tab-ex">
		 
		 <div class="card-header form_photo">
				<form method="post" id="form_sol_photo">
					<div class="input-group mb-3">
						<input type="hidden" name="id_chat_photo" id="id_chat_photo" class="form-control" >
						<div class="custom-file">
							<input type="file" name="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
								<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
							</div> 
						<input type="text" name="solusi_photo" id="solusi_photo" class="form-control" placeholder="Tuliskan solusi..." aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-dark m-0 px-3 py-2 z-depth-0 waves-effect" type="submit" id="button_photo">Kirim</button>
						</div>
					</div>
				</form>
		 </div>
		 <div id="show_chat_photo" class="card-body example-1 scrollbar-ripe-malinka">
				
				
				
		 </div>
		 
		</div>
		<div class="tab-pane fade" id="contact-ex" role="tabpanel" aria-labelledby="contact-tab-ex">
			
			<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
			  <thead>
				<tr>
				  <th class="th-sm">Nama
				  </th>
				  <th class="th-sm">Tanggal
				  </th>
				  <th class="th-sm">Request
				  </th>
				  <th class="th-sm">Solusi
				  </th>
				  <th class="th-sm">Gambar
				  </th>
				</tr>
			  </thead>
			  <tbody id="tampil_semua">
				
			  </tbody>
			  <tfoot>
				<tr>
				  <th>Nama
				  </th>
				  <th>Tanggal
				  </th>
				  <th>Request
				  </th>
				  <th>Solusi
				  </th>
				  <th>Gambar
				  </th>
				</tr>
			  </tfoot>
			</table>
			
		</div>
		</div>
	
		
	</div>
	
    <div class="col-6 col-lg-4">
	
		<ul class="nav nav-tabs" id="myTab" role="tablist">
		  <li class="nav-item">
			<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
			  aria-selected="true">My Profile</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
			  aria-selected="false">Daftar User</a>
		  </li>
		 <!-- <li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
			  aria-selected="false">Contact</a>
		  </li>-->
		</ul>
		<div class="tab-content" id="myTabContent">
		  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		  
			<div class="card mb-0">
				<div class="card-body" id="show_admin">
					<h5 class="card-title"><?php echo $this->session->userdata('username')?></h5>
					<img style= "background-color: black;" src="<?php echo base_url().'asset/img/siupk.png'?>" class="float-right rounded z-depth-2" alt="avatar image" height="20">
					<p class="card-text"><?php echo $this->session->userdata('keterangan')?></p>	
					<br>
					<p>Request yang sudah di jawab tidak akan tampil lagi. Untuk melihat semua data request dan solusi pilih menu:<strong>History Data Keluhan</strong></p>
				</div>
			</div>
			
		  </div>
		  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
			<br><br>
			<div class="card">
				<ul id="show_user" class="list-group list-group-flush example-1 scrollbar-ripe-malinka" >
				
				</ul>
			</div>
		  </div>
		  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"></div>
		</div>
	  
	</div>
	
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
	$(document).ready (function () {
		
		$('#dtBasicExample').DataTable();
		$('.dataTables_length').addClass('bs-select');

		
		setInterval(function(){
		data_chat_photo();
		data_user();
		data_chat();
		data_all();
	}, 5000);
		
		$('.data-chat').hide();
		$('.form_reg').hide();
		$('.form_photo').hide();
		data_user();
		data_chat();
		data_chat_photo();
		data_all();
		
		function data_user(){
			$.ajax({
				type  : 'ajax',
				url   : '<?php echo site_url('admin/data_user')?>',
				async : false,
				dataType : 'json',
				success : function(data){
					var html = '';
					var a;
					for(a=0; a<data.length; a++){
						html += '<li class="list-group-item" >'+
								'<img src="<?php echo base_url('asset/img/')?>'+data[a].photo+'" class="float-right rounded-circle z-depth-2" alt="avatar image" height="35" />'+
								'id<h6 class="text-left">'+data[a].id_user+'</h6>'+  
								'<h6 class="float-left">'+data[a].alamat+'</h6>'+ 
								'<h6 class="float-right">'+data[a].username+'</h6>'+  
							'</li>';
					}
					$('#show_user').html(html);
				}
			});
		}
		
		function data_chat(){
			$.ajax({
				type  : 'ajax',
				url   : '<?php echo site_url('admin/data_all_text')?>',
				async : false,
				dataType : 'json',
				success : function(data){
					var html = '';
					var a;
					for(a=0; a<data.length; a++){
						html += '<div class="card w-auto mb-3 item_chat" data-id_chat="'+data[a].id_chat+'">'+
									'<div class="card-body"><img src="<?php echo base_url('asset/img/')?>'+data[a].photo+'" class="float-right rounded-circle z-depth-2" alt="avatar image" height="30">'+
										'<h6 class="card-title ">'+data[a].request+'</h6>'+
										'<p class="card-text "></p>'+
										'<button  type="button" class="btn btn-sm btn-dark float-right">balas</button>'+
										'<p class="card-text text-muted float-left" style="font-size: 13px">'+data[a].username+'</p>'+
									'</div>'+
								'</div>';
					}
					$('.data-chat').show()
					$('#show_chat').html(html);
				}
			});
		}
		
		function data_chat_photo(){
			$.ajax({
				type  : 'ajax',
				url   : '<?php echo site_url('admin/data_all_photo')?>',
				async : false,
				dataType : 'json',
				success : function(data){
					var html = '';
					var a;
					for(a=0; a<data.length; a++){
						html += '<div class="alert alert-success" role="alert" >'+
									'<img src="<?php echo base_url('asset/img/')?>'+data[a].image+'" alt="thumbnail" class="rounded float-left" style="width: 150px" height="100">'+
									'<p class="text-center"><strong>'+data[a].request+'</strong></p>'+
									'<button  type="submit" class="btn btn-sm btn-dark float-top item_photo" data-id_photo="'+data[a].id_chat+'">balas</button>'+
									'<p class="text-right"><strong>'+data[a].username+'</strong></p>'+
									
									'<footer class="blockquote-footer card-text text-right">'+data[a].tanggal+'</footer>'+
									
								'</div>';
					}
					
					$('#show_chat_photo').html(html);
				}
			});
		}
		
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
								  '<td>'+data[i].username+'</td>'+
								  '<td>'+data[i].tanggal+'</td>'+
								  '<td>'+data[i].request+'</td>'+
								 '<td>'+data[i].solusi+'</td>'+
								 '<td>'+'<img src="<?php echo base_url('asset/img/')?>'+data[i].image+'" alt="thumbnail" class="rounded float-left" style="width: 75px" height="50">'+
									'</td>'+
								'</tr>';
					}
				
					$('#tampil_semua').html(html);
				}
				
			});
		}
		
		$('#show_chat').on('click','.item_chat',function(){
            var id_chat = $(this).data('id_chat');
			$('.form_reg').show();
            $('[name="id_chat"]').val(id_chat);
        });
		
		$('#show_chat_photo').on('click','.item_photo',function(){
            var id_chat_photo = $(this).data('id_photo');
			$('.form_photo').show();
            $('[name="id_chat_photo"]').val(id_chat_photo);
        });
		
		
		$('#button-addon2').on('click',function(){
			var id_chat = $('#id_chat').val();
            var solusi = $('#solusi').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('admin/update')?>",
                dataType : "JSON",
                data : {id_chat:id_chat, solusi:solusi},
                success: function(data){
                    $('[name="id_chat"]').val("");
                    $('[name="solusi"]').val("");
					$('.form_reg').hide()
                    data_chat();
					
                }
            });
            return false;
		});
		
		$('#show_user').on('click','.btn_info',function(){
			
            var id_user = $(this).data('id_user');
			var nama_user = $(this).data('nama_user');
			var alamat_user = $(this).data('alamat');
			var sandi_user = $(this).data('sandi');
			$('#ModalUser').modal('show');
            $('[name="id_user"]').val(id_user);
			$('[name="nama_user"]').val(nama_user);
			$('[name="alamat_user"]').val(alamat_user);
			$('[name="sandi_user"]').val(sandi_user);
        });
		
		
		
		
		//$('#button_photo').on('click',function(){
			//var id_chat = $('#id_chat_photo').val();
           // var solusi = $('#solusi_photo').val();
          //  $.ajax({
            //    type : "POST",
            //    url  : "<?php echo site_url('admin/update')?>",
            //   dataType : "JSON",
             //   data : {id_chat:id_chat, solusi:solusi},
             //   success: function(data){
              //      $('[name="id_chat_photo"]').val("");
              //      $('[name="solusi_photo"]').val("");
				//	$('.form_photo').hide()
               //     data_chat_photo();
					
            //    }
          // });
         //   return false;
	//	});
		
		
	//	$('#btn_chat_user').on('click',function(){
			
        //    var id_user = $('#id_chat_user').val();
			
		//	$.ajax({
         //       type : "POST",
         //       url  : "<?php echo site_url('admin/user_chat')?>",
          //      dataType : "JSON",
          //      data : {id_user:id_user},
          //      success: function(response){
          //          $('#chat_user').html(response.message);
		//			$('#ModalUser').modal('hide');
        //        }
        //    });
		//	return false;
     //   });
		
		$('#form_sol_photo').submit(function(e){
            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url();?>index.php/admin/solusi_photo',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
					 cache:false,
                     async:false,
                     success: function(data){
						 alert("Solusi sudah di kirim ke user yang bersangkutan")
						$('[name="id_chat_photo"]').val("");
						$('[name="solusi_photo"]').val("");
						$('.form_photo').hide();
						data_chat_photo();
					}
                 });
        });
		
	});
  </script>
  
</body>

</html>
