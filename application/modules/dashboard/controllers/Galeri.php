<?php

class Galeri extends MY_Controller{

	function __construct() {
				
				parent::__construct();
				$this->load->model('Galeri_model');
				$this->load->library('form_validation');
				$this->load->helper('text');
				
	}

	public function index()
	{
			$data ['galeri'] = $this->Galeri_model->getAlbum();
			$this->load->view('templates/header');
			$this->load->view('galeri/index', $data);
			$this->load->view('templates/footer');
	}

	public function detail()
	{
			$this->load->view('templates/header');
			$this->load->view('galeri/detail');
			$this->load->view('templates/footer');
	}

	public function tambah_album()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
	
		if($this->form_validation->run() == FALSE){

			$this->load->view('templates/header');
			$this->load->view('galeri/tambah_album');
			$this->load->view('templates/footer');
		} else {
			$this->Galeri_model->tambahAlbum();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('dashboard/galeri/index');
		}
	}

	public function hapus($id)
	{
		$this->Galeri_model->hapusAlbum($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('dashboard/galeri/index');
	}

	public function tambah_foto()
	{
		$this->form_validation->set_rules('foto', 'File Foto', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
	
		if($this->form_validation->run() == FALSE){

			$this->load->view('templates/header');
			$this->load->view('galeri/tambah_foto');
			$this->load->view('templates/footer');
		} else {
					echo "berhasil";
		}
	}
}