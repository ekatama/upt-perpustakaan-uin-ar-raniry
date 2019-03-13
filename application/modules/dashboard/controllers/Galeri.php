<?php

class Galeri extends MY_Controller{

        function __construct() {
                
                parent::__construct();
                $this->load->model('Galeri_model');
                $this->load->library('form_validation');
                
                }

    public function index()
    {
            $data ['galeri'] = $this->Galeri_model->getAll();
            $this->load->view('templates/header');
            $this->load->view('galeri/index', $data);
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
                echo "berhasil";
        }
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