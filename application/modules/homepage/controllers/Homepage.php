<?php 
	
	if (! defined('BASEPATH')) exit('No direct script access allowed');

	class Homepage extends CI_Controller
	{

		public function index()
		{

			$data['title'] = 'Dashboard';

			$this->load->modules('templates/header', $data);
			$this->load->view('homepage/view_homepage');

		}

	}


 ?>