<?php 
	
	if (! defined('BASEPATH')) exit('No direct script access allowed');

	class Helpdesk extends CI_Controller
	{

		public function index()
		{
			$this->load->view('helpdesk/view_helpdesk');
		}

	}


 ?>