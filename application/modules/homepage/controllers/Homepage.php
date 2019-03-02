<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function index()
	{

		$data['title'] = 'Homepage';

		$this->load->view('templates/header', $data);
		$this->load->view('view_homepage');
		$this->load->view('templates/footer');
	}
}