<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');
class Authentication{
	
	public $user;
		
	function __construct(){
		$this->CI=&get_instance();
		$auth=$this->CI->config->item('auth');
		$this->CI->load->library('session');		
		$this->CI->load->model('auth_model');
		$this->auth_model=&$this->CI->auth_model;
	}
	
	function login($username,$password){
		//Checkuserexistornot
		$result=$this->auth_model->get_login_info($username);
		if($result){//iffoundcont
			$password = md5($password);
			if($password===$result->password){//checkpassword
				$this->CI->session->set_userdata(array('username'=>$username,'status'=>$result->status));				
				return true;
			}
		}
		return false;
	}
	function logout(){
		$this->CI->session->unset_userdata(array('username'=>'','status'=>''));
	}
}