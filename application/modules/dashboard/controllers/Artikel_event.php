<?php

class Artikel_event extends MY_Controller{


    function __construct() {
                
        parent::__construct();
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('artikel_event/index');
        $this->load->view('templates/footer');
    }

    public function tambah_artikel()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('fotosampul', 'Foto Sampul', 'required');
        $this->form_validation->set_rules('konten', 'Isi Konten', 'required');
        $this->form_validation->set_rules('tag', 'Tag', 'required');

        if($this->form_validation->run() == FALSE){
            
            $this->load->view('templates/header');
            $this->load->view('artikel_event/tambah_artikel');
            $this->load->view('templates/footer');
        } else {
            echo "berhasil";
        }
    }
    
    public function tambah_event()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('fotosampul', 'Foto Sampul', 'required');
        $this->form_validation->set_rules('konten', 'Isi Konten', 'required');
        $this->form_validation->set_rules('tag', 'Tag', 'required');
    
        if($this->form_validation->run() == FALSE){

        $this->load->view('templates/header');
        $this->load->view('artikel_event/tambah_event');
        $this->load->view('templates/footer');
        } else {
            echo "berhasil";
        }
    }
}