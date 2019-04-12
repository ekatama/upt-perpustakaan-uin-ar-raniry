<?php

class Download extends MY_Controller{

		function __construct() {
			
			parent::__construct();
			$this->load->model('Download_model');
			$this->load->library('form_validation');
			$this->load->helper('text');
		}

		public function index()
		{
			$data['title'] 		= 'Download';
			$data['download'] 	= $this->Download_model->getAll();
			$data['count'] 		= $this->Download_model->countFile();

			$this->load->view('templates/header', $data);
			$this->load->view('download/index', $data);
			$this->load->view('templates/footer');
		}
		
		public function prosesTambahFile()
		{
			$config['upload_path']       = '.\assets\uploads\unduh';
			$config['file_name']         = time(); 
			$config['allowed_types']     = 'pdf';
			$config['overwrite']         = true;
			$config['max_size']          = 2048; //2MB

			$this->load->library('upload', $config);

			if($this->upload->do_upload('file')) {
				$this->Download_model->tambahFile($this->upload->data("file_name"));
				$this->session->set_flashdata('flash','ditambahkan');
				redirect('dashboard/download');
			}
		}

		public function tambah_file()
		{
			$data['title'] = 'Download';

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('file', 'File', 'required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			
			if($this->form_validation->run() == FALSE){
				$this->load->view('templates/header', $data);
				$this->load->view('download/tambah_file');
				$this->load->view('templates/footer');
			}
		}
		
		public function detail($id)
		{
			$data['title'] = 'Download';
			$data['downloadlogs'] = $this->Download_model->detailDownload($id);

			$this->load->view('templates/header', $data);
			$this->load->view('download/detail', $data);
			$this->load->view('templates/footer');
		}
		
		public function hapus($id)
		{
			$this->Download_model->hapusFile($id);
			$this->session->set_flashdata('flash','dihapus');
			redirect('dashboard/download');
		}
}