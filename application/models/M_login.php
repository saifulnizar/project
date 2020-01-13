<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	
	public function cek_user(){
		$where    = array(
						'username' => $this->input->post('nama'),
						'password' => $this->input->post('password')
					);
		return $this->db->get_where('tb_user',$where);
	}
	
	public function cek_admin(){
		$where    = array(
						'username' => $this->input->post('nama'),
						'password' => $this->input->post('password')
					);
		return $this->db->get_where('tb_admin',$where);
	}
	
	public function user_cek(){
		$cek_data = array('id_user' => $this->input->post('id_user'));
		return $this->db->get_where('tb_user', $cek_data);
	}
	
	public function insert_user($array){
		$result= $this->db->insert('tb_user',$array);
		return $result;
	}
	
	public function user(){
		$count= $this->db->get('tb_user');
		return $count->num_rows();
	
	}
}