<?php
	/**
	* 
	*/

	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Controller
	{

		// function __construct(argument)
		// {
		// 	# code...
		// }
		public function index(){
			$this->load->model('user_model'); //load data dari MODEL user
			$data['user_data'] = $this->user_model->get_entries();
			$this->load->view('user_view',$data);
		}
	}
