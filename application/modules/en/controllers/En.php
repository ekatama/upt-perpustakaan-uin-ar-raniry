<?php

	class En extends MY_Controller 
	{
 
		public function __construct()
		{
			parent::__construct();

			$this->load->helper(array('text', 'url', 'download'));
			$this->load->library('user_agent'); // Tracking user

			$this->load->model('Tentang_model');
			$this->load->model('Layanan_model');
			$this->load->model('Kegiatan_model');
			$this->load->model('Galeri_model');
			$this->load->model('Situs_model');
			$this->load->model('Unduh_model');
			$this->load->model('Video_model');
			$this->load->model('FAQ_model');

		}

		public function index()
		{
			$data['title'] 				= 'homepage';
			$data['unduh']				= $this->Unduh_model->ambil_data('unduh');  // navbar unduh

			$data['tentang']			= $this->Tentang_model->ambil_data('tentang');
			$data['jadwal']				= $this->Layanan_model->ambil_data('jadwal');
			$data['artikel_homepage'] 	= $this->Kegiatan_model->artikel_homepage('artikel_homepage');
			$data['artikel_utama']		= $this->Kegiatan_model->artikel_utama('artikel_utama');
			$data['weblinks'] 			= $this->Situs_model->ambil_data('situs');
			$data['video']				= $this->Video_model->video('video');


			$this->load->view('templates/header', $data);
			$this->load->view('view_homepage', $data);
			$this->load->view('templates/footer');
		}

		public function tentang()
		{
			$data['title'] 		= 'about';
			$data['weblinks'] 	= $this->Situs_model->ambil_data('situs'); // footer link

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
			$data['title']			= 'activity';
			$data['weblinks'] 		= $this->Situs_model->ambil_data('situs'); // footer link

			// Ambil data total kolom dan tampilkan per 2 kolom untuk setiap halaman 
			$row = $this->Kegiatan_model->row();

			$config['base_url'] 		= base_url('en/kegiatan');
			$config['total_rows'] 		= $row;
			$config['per_page'] 		= 2;

			$config['next_link']		= '&gt;';
			$config['cur_tag_open'] 	= '<span class="page-numbers current">';
			$config['cur_tag_close']	= '</span>';


			$start = $this->uri->segment(3);
			$this->pagination->initialize($config);



			$data['kegiatan'] 		= $this->Kegiatan_model->ambil_data($config['per_page'], $start);


			$this->load->view('templates/header', $data);
			$this->load->view('view_kegiatan', $data);
			$this->load->view('templates/footer');
		}

		public function single_post()
		{
			$data['title'] 			= 'post';
			$data['weblinks']		= $this->Situs_model->ambil_data('situs'); // footer link

			$data['single_post'] 	= $this->Kegiatan_model->single_post($this->uri->segment(3));

			$this->load->view('templates/header', $data);
			$this->load->view('view_single_post', $data);
			$this->load->view('templates/footer');
		}

		public function layanan()
		{
			$data['title'] 		= 'service';
			$data['weblinks'] 	= $this->Situs_model->ambil_data('situs'); // footer link

			$data['layanan']	= $this->Layanan_model->ambil_data('layanan');

			$this->load->view('templates/header', $data);
			$this->load->view('view_layanan');
			$this->load->view('templates/footer');
		}

		public function galeri()
		{
			$data['title'] 		= 'gallery';
			$data['weblinks'] 	= $this->Situs_model->ambil_data('situs'); // footer link

			$data['galeri'] 	= $this->Galeri_model->galeri('galeri');
			$data['album'] 		= $this->Galeri_model->album('album');

			$this->load->view('templates/header', $data);
			$this->load->view('view_galeri');
			$this->load->view('templates/footer');
		}

		public function unduh()
		{
			$data['title'] 		= 'download';
			$data['weblinks'] 	= $this->Situs_model->ambil_data('situs'); // footer link

			$data['unduh']		= $this->Unduh_model->ambil_data('unduh');

			$this->load->view('templates/header', $data);
			$this->load->view('view_unduh', $data);
			$this->load->view('templates/footer');
		}

		public function downloading()
		{

			$id 	= $this->uri->segment(3);
			$data	= $this->Unduh_model->downloading($id);

			$file 	= base_url()."assets/uploads/unduh/".$data['file']; // download
		    $data 	= file_get_contents ( $file );
		    
		    force_download ( $file, $data );
		
			$data['track_os']		= $this->Unduh_model->track_os();
			$data['track_ip']		= $this->input->ip_address();
			$data['track_browser']	= $this->agent->browser();			

			$data = array(
				'download_id'	=> $id,
				'ip'			=> $data['track_ip'],
				'os'			=> $data['track_os'],
				'browser'		=> $data['track_browser']
			);

			$this->db->query("SET FOREIGN_KEY_CHECKS = 0");
			$this->db->insert('downloadlogs', $data);
			$this->db->query("SET FOREIGN_KEY_CHECKS = 1");
		}

		public function situs()
		{
			$data['title'] 		= 'weblinks';
			$data['weblinks'] 	= $this->Situs_model->ambil_data('situs');

			$this->load->view('templates/header', $data);
			$this->load->view('view_situs', $data);
			$this->load->view('templates/footer');
		}

		public function faq()
		{
			$data['title']		= 'fAQ';
			$data['weblinks'] 	= $this->Situs_model->ambil_data('situs');

			$data['faq']		= $this->FAQ_model->ambil_data('faq');

			$this->load->view('templates/header', $data);
			$this->load->view('view_faq', $data);
			$this->load->view('templates/footer');

		}
	}
?>