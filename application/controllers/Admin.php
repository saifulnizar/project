<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
	}
	
	public function index()
	{
		if($this->session->userdata('id_admin')){
			$this->load->view('admin/index');
		}
		else{
			redirect('login');
		}
	}
	
	
	public function laporan(){
		$data['user'] = $this->m_admin->user_count();
		$data['chat'] = $this->m_admin->chat_count();
		$data['solusi'] = $this->m_admin->solusi_count();
		$data['all'] = $this->m_admin->count_all();
		$this->load->view('admin/laporan', $data);
	}
	
	public function data_user(){
		$data = $this->m_admin->get_all_user();
		echo json_encode($data);
	}
	
	public function data_semua(){
		$data = $this->m_admin->get_semua();
		echo json_encode($data);
	}
	
	public function data_chat(){
		$data = $this->m_admin->get_request();
		echo json_encode($data);
	}
	
	public function data_all_text(){
		$data = $this->m_admin->get_all_data();
		echo json_encode($data);
	}
	
	public function data_all_photo(){
		$data = $this->m_admin->get_all_photo();
		echo json_encode($data);
	}
	
	public function update(){
		$data = $this->m_admin->update_chat();
		
		echo json_encode($data);
	}
	
	public function solusi_photo(){
		
		$config['upload_path']="./asset/img"; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 
        if($this->upload->do_upload("file")){ //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
			
					$id_chat = $this->input->post('id_chat_photo');
					$solusi = $this->input->post('solusi_photo');
					$photo	= $data['upload_data']['file_name'];
					
				
			$result = $this->m_admin->update_chat_photo($id_chat, $solusi, $photo);
            echo json_decode($result);
        }
		
	}
	
	
	public function data_laporan(){
		$data = $this->m_admin->get_semua();
		echo json_encode($data);
	}
	public function cetak(){
		$this->load->view('admin/cetaklaporan');
	}
	
}
