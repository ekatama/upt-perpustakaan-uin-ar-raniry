<?php

	class Homepage extends MY_Controller 
	{
 
		public function __construct()
		{
			parent::__construct();

			$this->load->helper('text', 'url');

			$this->load->library('pagination');

			$this->load->model('Tentang_model');
			$this->load->model('Layanan_model');
			$this->load->model('Kegiatan_model');
			$this->load->model('Galeri_model');
			$this->load->model('Situs_model');
			$this->load->model('Unduh_model');
		}

		public function index()
		{
			$data['title'] = 'homepage';
			$data['unduh'] = $this->Unduh_model->ambil_data('unduh');  // navbar unduh

			$data['tentang']			= $this->Tentang_model->ambil_data('tentang');
			$data['jadwal']				= $this->Layanan_model->ambil_data('jadwal');
			$data['artikel_homepage'] 	= $this->Kegiatan_model->artikel_homepage('artikel_homepage');
			$data['artikel_utama']		= $this->Kegiatan_model->artikel_utama('artikel_utama');
			$data['weblinks'] 			= $this->Situs_model->ambil_data('situs');


			$this->load->view('templates/header', $data);
			$this->load->view('view_homepage', $data);
			$this->load->view('templates/footer');
		}

		public function tentang()
		{
			$data['title'] = 'tentang';
			$data['unduh'] = $this->Unduh_model->ambil_data('unduh');  // navbar unduh
			$data['weblinks'] 			= $this->Situs_model->ambil_data('situs'); // footer link


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
			$data['title']		= 'kegiatan';
			$data['unduh'] 		= $this->Unduh_model->ambil_data('unduh'); // navbar unduh
			$data['weblinks'] 	= $this->Situs_model->ambil_data('situs'); // footer link

			$config['base_url'] = site_url('kegiatan'); //site url
		    $config['total_rows'] = $this->Kegiatan_model->get_count(); //total row
		    $config['per_page'] = 10; 
		    $config["uri_segment"] = 2;  // uri parameter

		    $this->pagination->initialize($config);

			$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

	        $data["links"] = $this->pagination->create_links();

	        $data['kegiatan'] = $this->Kegiatan_model->artikel_homepage($config["per_page"], $page);


			$this->load->view('templates/header', $data);
			$this->load->view('view_kegiatan', $data);
			$this->load->view('templates/footer');
		}

		public function single_post()
		{
			$data['title'] 		= 'postingan';
			$data['unduh'] 		= $this->Unduh_model->ambil_data('unduh');  // navbar unduh
			$data['weblinks']	= $this->Situs_model->ambil_data('situs'); // footer link

			$data['single_post'] = $this->Kegiatan_model->single_post($this->uri->segment(3));

			$this->load->view('templates/header', $data);
			$this->load->view('view_single_post', $data);
			$this->load->view('templates/footer');

		}

		public function layanan()
		{

			$data['title'] 		= 'layanan';
			$data['unduh'] 		= $this->Unduh_model->ambil_data('unduh');  // navbar unduh
			$data['weblinks'] 	= $this->Situs_model->ambil_data('situs'); // footer link

			$data['layanan']	= $this->Layanan_model->ambil_data('layanan');

			$this->load->view('templates/header', $data);
			$this->load->view('view_layanan');
			$this->load->view('templates/footer');
		}

		public function galeri()
		{
			$data['title'] 		= 'galeri';
			$data['unduh'] 		= $this->Unduh_model->ambil_data('unduh');  // navbar unduh
			$data['weblinks'] 	= $this->Situs_model->ambil_data('situs'); // footer link

			$data['galeri'] 	= $this->Galeri_model->galeri('galeri');
			$data['album'] 		= $this->Galeri_model->album('album');



			$this->load->view('templates/header', $data);
			$this->load->view('view_galeri');
			$this->load->view('templates/footer');
		}

		public function unduh()
		{
			$data['title'] 		= 'unduh';
			$data['unduh'] 		= $this->Unduh_model->ambil_data('unduh');  // navbar unduh
			$data['weblinks'] 	= $this->Situs_model->ambil_data('situs'); // footer link

			$this->load->view('templates/header', $data);
			$this->load->view('view_unduh', $data);
			$this->load->view('templates/footer');
		}

		public function situs()
		{
			$data['title'] 		= 'situs';
			$data['unduh'] 		= $this->Unduh_model->ambil_data('unduh');  // navbar unduh

			$data['weblinks'] = $this->Situs_model->ambil_data('situs');

			$this->load->view('templates/header', $data);
			$this->load->view('view_situs', $data);
			$this->load->view('templates/footer');
		}

	}

?>