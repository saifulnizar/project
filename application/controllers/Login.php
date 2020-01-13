<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}
	
	public function index()
	{
		if($this->session->userdata('id_user')){
			redirect('user');
		}
		else{
			if($this->session->userdata('id_admin')){
				redirect('admin');
			
			}else{
				$this->load->view('login');
			}
		}
	}
	
	public function login(){
		
		$where    = array(
						'nama' => $this->input->post('username'),
						'password' => $this->input->post('password')
					);
		$cek_user = $this->m_login->cek_user('tb_user', $where);

		if($cek_user->num_rows() > 0){		//jika login sebagai user
			foreach($cek_user->result() as $row){
				$id_user	= $row->id_user;
				$username	= $row->username;
				$password	= $row->password;
				$alamat		= $row->alamat;
			}
			
			$sesi = array(
					'id_user'	=> $id_user,
					'username'	=> $username,
					'password'	=> $password,
					'alamat'	=> $alamat
					);
			$this->session->set_userdata($sesi);
			redirect('login');
		
		}else{ //jika login sebagai admin
			$cek_admin = $this->m_login->cek_admin('tb_admin', $where);
			if($cek_admin->num_rows() > 0){
				foreach($cek_admin->result() as $row){
					$id_admin		= $row->id_admin;
					$username		= $row->username;
					$password		= $row->password;
					$keterangan		= $row->keterangan;
				}
				
				$admin = array(
					'id_admin'		=> $id_admin,
					'username'		=> $username,
					'password'		=> $password,
					'keterangan'	=> $keterangan
					);
				$this->session->set_userdata($admin);
				redirect('login');
			
			}else{
				$this->session->set_flashdata(
					'gagal', '<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
								<div class="toast-header">
									<svg class=" rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
									<rect fill="#007aff" width="100%" height="100%" /></svg>
									<strong class="mr-auto">SI Keluhan Pelanggan</strong>
									<small>1 mins ago</small>
									<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="toast-body"><strong> Maaf username password tidak tersedia ...!!!</strong>
								</div>
								</div>'
				);
			redirect(base_url());
			}
		}
	}
	
	public function daftar(){
		
		$tb_user = $this->m_login->user();
		
		$array = array(
				'id_user' 	=> $tb_user + 1,
				'username' 	=> $this->input->post('nama'),
				'password' 	=> $this->input->post('password'),
				'alamat' 	=> $this->input->post('alamat')
				);
				$this->m_login->insert_user($array);
				$tb_user =  $tb_user + 1;
				$this->session->set_flashdata('sukses','<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
								<div class="toast-header">
								<svg class=" rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
									<rect fill="#007aff" width="100%" height="100%" /></svg>
									<strong class="mr-auto">SI Keluhan Pelanggan</strong>
									<small>1 mins ago</small>
									<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="toast-body">Anda sudah terdaftar <br><strong> Silakan login ...!!!</strong>
								</div>
								</div>');
				redirect('login');
		
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
