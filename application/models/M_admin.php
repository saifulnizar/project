<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	
	
	//tabel database
	public $chat		='tb_chat';
	public $admin		='td_admin';
	public $user		='tb_user';
	
	//id database
	public $idchat		='id_chat';
	public $idadmin		='id_admin';
	public $iduser		='id_user';
	
	public $order = 'ASC';
	
	function __construct(){
		parent::__construct();
	}
	
	function user_count(){
		$sql = "SELECT count(id_user) as user FROM tb_user";
		$result = $this->db->query($sql);
		return $result->row()->user;
	}
	
	function count_all(){
		$sql = "SELECT count(id_chat) as semua FROM tb_chat";
		$result = $this->db->query($sql);
		return $result->row()->semua;
	}
	
	function chat_count(){
		$sql = "SELECT count(id_chat) as chat FROM tb_chat WHERE solusi != ''";
		$result = $this->db->query($sql);
		return $result->row()->chat;
	}
	
	function solusi_count(){
		$sql = "SELECT count(id_chat) as solusi FROM tb_chat WHERE solusi = ''";
		$result = $this->db->query($sql);
		return $result->row()->solusi;
	}

	
	function get_all_user(){
		$hasil = $this->db->get($this->user);
		return $hasil->result();
	}
	
	function get_semua(){
		$this->db->select('*');
		$this->db->from($this->chat);
		$this->db->join($this->user, $this->iduser = $this->iduser);
		$query = $this->db->get();
		return $query->result();
		
	}
	
	function get_all_data(){
		
		$this->db->select('*');
		$this->db->from($this->user);
		$this->db->join($this->chat, $this->iduser = $this->iduser);
		$this->db->where('solusi', '');
		$this->db->where('image', '');
		$query = $this->db->get();
		return $query->result();
		
	}
	
	function get_all_photo(){
		
		$this->db->select('*');
		$this->db->from($this->user);
		$this->db->join($this->chat, $this->iduser = $this->iduser);
		$this->db->where('solusi', '');
		$this->db->where('image !=', '');
		$query = $this->db->get();
		return $query->result();
		
	}
	
	//function get_request(){
		//$hasil = $this->db->get($this->chat);
		//return $hasil->result();
		
		//$this->db->select('*');
		//$this->db->from($this->chat);
		//$this->db->where('solusi', '');
		//$query = $this->db->get();
		//return $query->result();
	//}
	
	function update_chat(){
		
		$id_chat =$this->input->post('id_chat');
		$solusi  =$this->input->post('solusi');

		$this->db->set('solusi', $solusi);
		$this->db->where($this->idchat, $id_chat);
		$result=$this->db->update($this->chat);
		return $result;
		
	}
	
	function update_chat_photo($id_chat, $solusi, $photo){
		
		$this->db->set('solusi', $solusi);
		$this->db->set('file', $photo);
		$this->db->where($this->idchat, $id_chat);
		$result=$this->db->update($this->chat);
		return $result;
		
	}
	
	function cek_chat(){
		
		$cek = array('id_user' => $this->input->post('id_user'));
		return $this->db->get_where('tb_chat', $cek);
		
	}
	
	
}
