<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
	class Homepage extends CI_Controller
	{

		public function index()
		{


			$this->load->modules('templates/header', );
			$this->load->view('homepage/view_homepage');
=======
class Homepage extends CI_Controller {

	public function index()
	{
>>>>>>> 9094579c78712be07a66dfb455a3d3cf3acfd9f2

		$data['title'] = 'Homepage';

		$this->load->view('templates/header', $data);
		$this->load->view('view_homepage');
		$this->load->view('templates/footer');
	}
}
