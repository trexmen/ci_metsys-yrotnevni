<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth_model extends CI_Model
{

	public $table       = 'user';
	public $primary_key = 'username';

	function __construct()
	{
		parent::__construct();
	}
	 
	function get_login_info($username)
	{		
		$this->db->where('username', $username);		
		$query = $this->db->get($this->table);
		return ($query->num_rows() > 0) ? $query->row() : FALSE;
	}
	 
}