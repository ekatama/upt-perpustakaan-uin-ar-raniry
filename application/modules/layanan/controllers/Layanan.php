<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function index()
	{

		$data['title'] = 'Layanan';

		$this->load->view('templates/header', $data);
		$this->load->view('view_layanan');
		$this->load->view('templates/footer');
	}
}