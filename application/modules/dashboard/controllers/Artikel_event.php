<?php

class Artikel_event extends MY_Controller{


    function __construct() {
                
        parent::__construct();
        $this->load->model('Artikel_model');
        $this->load->library('form_validation');
        $this->load->helper('text');
        
        
    }

    public function index()
    {
        $data['title'] = 'Artikel / Event';
        $data ['artikel'] = $this->Artikel_model->getAll();
        if($this->input->get('keyword')){
            $data ['artikel'] = $this->Artikel_model->cariArtikel();
        }
        
        $this->load->view('templates/header', $data);
        $this->load->view('artikel_event/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Artikel / Event';
        $data['artikel'] = $this->Artikel_model->getById($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('konten', 'Konten', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('jadwal', 'Jadwal', 'required');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('artikel_event/detail', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Artikel_model->ubahArtikel();
            $this->session->set_flashdata('flash','diubah');
            redirect('dashboard/artikel_event');
        }
    }
    
    public function tambah_artikel()
    {
        $data['title'] = 'Artikel / Event';

        $this->load->view('templates/header', $data);
        $this->load->view('artikel_event/tambah_artikel');
        $this->load->view('templates/footer');
    }

    public function prosesTambahArtikel()
    {
        $config['upload_path']       = '.\assets\dashboard\uploads\artikel_event';
        $config['file_name']         = time();
        $config['allowed_types']     = 'jpg|png';
        $config['overwrite']         = true;
        $config['max_size']          = 2048; //2MB

        $this->load->library('upload', $config);

        if($this->upload->do_upload('fotosampul')) {
    
            $this->Artikel_model->tambahArtikel($this->upload->data("file_name"));
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('dashboard/artikel_event');
        }
    }

    public function hapus($id)
	{
		$this->Artikel_model->hapusArtikelEvent($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('dashboard/artikel_event/index');
	}
    
}