<?php
/**
* Author : Trexmen
*/
class User_model extends CI_Model
{
	
	public $username;
	public $password;
	public $nama_lengkap;
	public $email;
	public $no_telp;
	public $foto;
	public $level;
	public $status;
	public $id_session;

	function __construct()
	{
		parent::__construct();
		$this->load->database(); //Otomatis load library Database CI
	}

	public function get_entries(){
		$query  = $this->db->get('users'); //users -> nama table yang di load di database
		return $query->result();
	}


}