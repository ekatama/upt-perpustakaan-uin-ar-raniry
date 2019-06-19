<?php

class Regulasi extends MY_Controller{

		function __construct() {
			
			parent::__construct();

			$this->load->model('Regulasi_model');
			$this->load->library('form_validation');
			$this->load->helper('text');
		}

		public function index()
		{
			$data['title'] 		= 'Regulasi';
			$data['regulasi'] 	= $this->Regulasi_model->getAll();

			$this->load->view('templates/header', $data);
			$this->load->view('regulasi/index', $data);
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
				$this->Regulasi_model->tambahFile($this->upload->data("file_name"));
				$this->session->set_flashdata('flash','ditambahkan');
				redirect('dashboard/regulasi');
			}
		}

		public function tambah_file()
		{
			$data['title'] = 'regulasi';

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('file', 'File', 'required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			
			if($this->form_validation->run() == FALSE){
				$this->load->view('templates/header', $data);
				$this->load->view('regulasi/tambah_file');
				$this->load->view('templates/footer');
			}
		}
		
		public function detail($id)
		{
			$data['title'] = 'regulasi';
			//$data['regulasilogs'] = $this->regulasi_model->detailregulasi($id);

			$this->load->view('templates/header', $data);
			$this->load->view('regulasi/detail', $data);
			$this->load->view('templates/footer');
		}
		
		public function hapus($id)
		{
			$this->Regulasi_model->hapusFile($id);
			$this->session->set_flashdata('flash','dihapus');
			redirect('dashboard/regulasi');
		}
}