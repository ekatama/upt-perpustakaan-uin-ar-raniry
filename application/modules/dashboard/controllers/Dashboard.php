<?php

class Dashboard extends MY_Controller{

    function __construct() {
        parent::__construct();

        $this->load->model('Artikel_model');
        $this->load->model('Galeri_model');
        $this->load->model('Faq_model');
        $this->load->model('Download_model');

        if($this->session->userdata('email') !== "admin@admin.com"){
            redirect('dashboard/login');
        }

    } 
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['artikel'] = $this->Artikel_model->countArtikel();
        $data['galeri'] = $this->Galeri_model->countGaleri();
        $data['file'] = $this->Download_model->countFile();
        $data['faq'] = $this->Faq_model->countFaq();

        $this->load->view('templates/header', $data);
        $this->load->view('index', $data);
        $this->load->view('templates/footer');
    }

}