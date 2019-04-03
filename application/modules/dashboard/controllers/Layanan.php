<?php

class Layanan extends MY_Controller{

    function __construct() {
				
        parent::__construct();
        $this->load->model('Layanan_model');
        $this->load->library('form_validation');
        $this->load->helper('text');
        
    }

    public function index()
    {
        $data['title'] = 'Layanan';
        $data['layanan'] = $this->Layanan_model->getLayanan();

        $this->load->view('templates/header', $data);
        $this->load->view('layanan/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Layanan';
        $data['layanan'] = $this->Layanan_model->getById($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('konten', 'Konten', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('jadwal', 'Jadwal', 'required');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('layanan/detail', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Layanan_model->ubahLayanan();
            $this->session->set_flashdata('flash','diubah');
            redirect('dashboard/layanan');
        }
    }

    public function tambah_layanan()
    {
        $data['title'] = 'Layanan';

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('konten', 'Konten', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('jadwal', 'Jadwal', 'required');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('layanan/tambah_layanan');
            $this->load->view('templates/footer');
        } else {
            $this->Layanan_model->tambahLayanan();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('dashboard/layanan');
        }
    }

    public function hapus($id)
    {
    $this->Layanan_model->hapusData($id);
    $this->session->set_flashdata('flash','dihapus');
    redirect('dashboard/layanan');
    }
}