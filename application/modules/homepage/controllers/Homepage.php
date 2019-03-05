<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Homepage extends CI_Controller 
	{

		public function index()
		{

			$data['title'] = 'homepage';

			$this->load->view('templates/header', $data);
			$this->load->view('view_homepage');
			$this->load->view('templates/footer');
			
		}

		public function layanan()
		{

			$data['title'] = 'layanan';

			$this->load->view('templates/header', $data);
			$this->load->view('view_layanan');
			$this->load->view('templates/footer');
				
		}

		public function galeri()
		{

			$data['title'] = 'galeri';

			if ($this->uri->segment(3)) {

				$album = $this->uri->segment(3);

				$this->load->view('templates/header', $data);
				$this->load->view('view_detail_galeri');
				$this->load->view('templates/footer');

			} else {
				$this->load->view('templates/header', $data);
				$this->load->view('view_galeri');
				$this->load->view('templates/footer');
			}

		}

		public function foto()
		{
			$data['title'] = 'foto';

			$this->load->view('templates/header', $data);
			$this->load->view('view_foto');
			$this->load->view('templates/footer');
		}

		public function tentang()
		{
			$data['title'] = 'tentang';

			$this->load->view('templates/header', $data);
			$this->load->view('view_tentang');
			$this->load->view('templates/footer');
		}

		public function helpdesk()
		{
			$data['title'] = 'helpdesk';

			$this->load->view('templates/header', $data);
			$this->load->view('view_helpdesk');
			$this->load->view('templates/footer');
		}



	}