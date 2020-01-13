<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	//tabel database
	public $chat		='tb_chat';
	public $admin		='td_admin';
	public $user		='tb_user';
	
	//id database
	public $idchat		='id_chat';
	public $idadmin		='id_admin';
	public $iduser		='id_user';
	
	public $order = 'ASC';
	
	
	
	
	function data_request(){
		$this->db->select('*');
		$this->db->from($this->chat);
		$this->db->join($this->user, $this->iduser = $this->iduser);
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$this->db->where('image', '');
		$query = $this->db->get();
		return $query->result();
	}
	
	function data_foto(){
		$this->db->select('*');
		$this->db->from($this->chat);
		$this->db->join($this->user, $this->iduser = $this->iduser);
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$this->db->where('image !=', '');
		$query = $this->db->get();
		return $query->result();
	}
	
	function data_user(){
		$this->db->select('*');
		$this->db->from($this->user);
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$query = $this->db->get();
		return $query->result();
	}
	
	function data_admin(){
		$hasil = $this->db->get('tb_admin');
		return $hasil->result();
	}
	
	function cek_request(){
		$cek = array('request' => $this->input->post('request'));
		return $this->db->get_where('tb_chat', $cek);
	}
	
	function insert_request($request){
		$result=$this->db->insert($this->chat,$request);
		return $result;
	}
	
	function insert_photo($id_user, $request, $id_admin, $photo){
		$data = array(
                'id_user' => $id_user,
                'request' => $request,
				'id_admin' => $id_admin,
				'image' => $photo
            );  
        $result= $this->db->insert($this->chat,$data);
        return $result;
	}
	
	function edit_user($nama, $alamat, $sandi, $photo){
		$data = array(
                'username' => $nama,
                'alamat' => $alamat,
				'password' => $sandi,
				'photo' => $photo
            );  
        $this->db->where($this->iduser, $this->session->userdata('id_user'));
		$result = $this->db->update($this->user, $data);
        return $result;
	}
}
