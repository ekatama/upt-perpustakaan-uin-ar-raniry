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
			$data ['album'] = $this->Galeri_model->getAlbum();
			$this->load->view('templates/header');
			$this->load->view('galeri/index', $data);
			$this->load->view('templates/footer');
	}

	public function detail()
	{
			$data['galeri'] = $this->Galeri_model->detailAlbum($this->uri->segment(4));
			
			$this->load->view('templates/header');
			$this->load->view('galeri/detail', $data);
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

	public function prosesTambahFoto()
    {
        $config['upload_path']       = '.\assets\dashboard\uploads\galeri';
        $config['file_name']         = time();
        $config['allowed_types']     = 'jpg|png';
        $config['overwrite']         = true;
        $config['max_size']          = 4096; //4MB

        $this->load->library('upload', $config);

        if($this->upload->do_upload('file')) {
    
            $this->Galeri_model->tambahFoto($this->upload->data("file_name"));
            $this->session->set_flashdata('flash','ditambahkan');
            return "OK";
		}
		return print($this->upload->display_errors());

    }

	public function hapusAlbum($id)
	{
		$this->Galeri_model->hapusAlbum($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('dashboard/galeri/index');
	}
	
	public function hapusGalleries($id)
	{
		$id_album = $this->Galeri_model->hapusGalleries($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('dashboard/galeri/detail/'.$id_album);
	}

	public function tambah_foto()
	{

			$this->load->view('templates/header');
			$this->load->view('galeri/tambah_foto');
			$this->load->view('templates/footer');
		
	}
}