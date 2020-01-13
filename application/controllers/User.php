<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		
	}
	
	public function index(){
		
		if($this->session->userdata('id_user')){
			$this->load->view('user/index');
		}
		else{
			redirect('login');
		}
	}
	public function data_request(){
		$data=$this->m_user->data_request();
		echo json_encode($data);
	}
	
	public function data_request_photo(){
		$data=$this->m_user->data_foto();
		echo json_encode($data);
	}
	
	public function data_admin(){
		$data=$this->m_user->data_admin();
		echo json_encode($data);
	}
	
	public function data_user(){
		$data=$this->m_user->data_user();
		echo json_encode($data);
	}

	public function insert_request(){
		
		$cek = array('request' => $this->input->post('request'));
		$cek_data = $this->m_user->cek_request('tb_chat',$cek);
		
		if($cek_data->num_rows() > 0) {
			foreach($cek_data->result() as $row){
				$solusi = $row->solusi;
				
			}
			$output['message'] = 'Solusi telah di temukan <br><p class="text-center"><strong>'.$solusi.'</strong></p>';
			
		}else{
		$request	= array(
					'id_user' => $this->session->userdata('id_user'),
					'request' => $this->input->post('request'),
					'id_admin' => $this->input->post('id_admin')
					
				);
			$this->m_user->insert_request($request);
			
			$output['error'] = true;
			$output['message'] = 'Solusi tidak ditemukan... data sudah di kirim ke admin';
		
		}
		echo json_encode($output);
	
	}
	
	public function insert_request_foto(){
		
		$config['upload_path']	="./asset/img"; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['encrypt_name']	= TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 
        if($this->upload->do_upload("file")){ //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
			
					$id_user = $this->session->userdata('id_user');
					$request = $this->input->post('request');
					$id_admin = $this->input->post('id_admin_foto');
					$photo	= $data['upload_data']['file_name'];
					
				
			$result = $this->m_user->insert_photo($id_user, $request, $id_admin, $photo);
            echo json_decode($result);
        }
	
	}
	
	public function edit_user(){
		
		$config['upload_path']="./asset/img"; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 
        if($this->upload->do_upload("file")){ //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
			
					$nama = $this->input->post('nama');
					$alamat = $this->input->post('alamat');
					$sandi = $this->input->post('sandi');
					$photo	= $data['upload_data']['file_name'];
					
				
			$result = $this->m_user->edit_user($nama, $alamat, $sandi, $photo);
            echo json_decode($result);
        }
	
	}

	public function hapus(){
		$data=$this->m_user->hapus();
		echo json_encode($data);
	}
}
