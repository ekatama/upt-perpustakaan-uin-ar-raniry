<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Galeri extends CI_Controller
	{

		public function index()
		{

			$data['title'] = "Galeri";

			$this->load->view('templates/header', $data);
			$this->load->view('view_galeri');
			$this->load->view('templates/footer');

		}
	}

