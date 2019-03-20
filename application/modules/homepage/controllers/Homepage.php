<?php

	class Homepage extends MY_Controller 
	{

		public function __construct()
		{
			parent::__construct();

			$this->load->helper('text', 'url');

			$this->load->model('Tentang_model');
			$this->load->model('Layanan_model');
			$this->load->model('Kegiatan_model');
			$this->load->model('Situs_model');
		}

		public function index()
		{
			$data['title'] = 'homepage';

			$data['tentang']			= $this->Tentang_model->ambil_data('tentang');
			$data['jadwal']				= $this->Layanan_model->ambil_data('jadwal');
			$data['weblinks'] 			= $this->Situs_model->ambil_data('weblinks');
			$data['artikel_utama']		= $this->Kegiatan_model->artikel_utama('artikel_utama');
			$data['artikel']			= $this->Kegiatan_model->ambil_data('artikel');
			$data['artikel_homepage'] 	= $this->Kegiatan_model->artikel_homepage('artikel_homepage');

			$this->load->view('templates/header', $data);
			$this->load->view('view_homepage', $data);
			$this->load->view('templates/footer');
		}

		public function tentang()
		{
			$data['title'] = 'tentang';

			$data['tentang']	= $this->Tentang_model->ambil_data('tentang');
			$data['visi']		= $this->Tentang_model->ambil_data('visi');
			$data['misi'] 		= $this->Tentang_model->ambil_data('misi');
			$data['tujuan'] 	= $this->Tentang_model->ambil_data('tujuan');
			$data['struktur'] 	= $this->Tentang_model->ambil_data('struktur');
			$data['tugas'] 		= $this->Tentang_model->ambil_data('tugas');
			$data['program'] 	= $this->Tentang_model->ambil_data('program');
			$data['kegiatan']	= $this->Tentang_model->ambil_data('kegiatan');
			$data['fungsi'] 	= $this->Tentang_model->ambil_data('fungsi');

	        $this->load->view('templates/header', $data);
	        $this->load->view('view_tentang', $data);
	        $this->load->view('templates/footer');
		}

		public function kegiatan()
		{
			$data['title'] = 'kegiatan';

			$data['kegiatan']	= $this->Kegiatan_model->ambil_data('kegiatan');

			$this->load->view('templates/header', $data);
			$this->load->view('view_kegiatan', $data);
			$this->load->view('templates/footer');
		}

		public function single_post()
		{
			$data['title'] = 'postingan';

			$data['single_post']	= $this->Kegiatan_model->single_post('single_post');

			print_r($data['single_post']);

			$this->load->view('templates/header', $data);
			$this->load->view('view_single_post', $data);
			$this->load->view('templates/footer');

		}

		public function layanan()
		{

			$data['title'] = 'layanan';

			$data['layanan'] = $this->Layanan_model->ambil_data('layanan');

			$this->load->view('templates/header', $data);
			$this->load->view('view_layanan');
			$this->load->view('templates/footer');
		}

		public function galeri()
		{
			$data['title'] = 'galeri';

			$this->load->view('templates/header', $data);
			$this->load->view('view_galeri');
			$this->load->view('templates/footer');
		}

		public function foto()
		{
			$data['title'] = 'foto';

			$this->load->view('templates/header', $data);
			$this->load->view('view_foto');
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

?>