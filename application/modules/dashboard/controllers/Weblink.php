<?php

class Weblink extends MY_Controller{

    function __construct() {
				
        parent::__construct();
        $this->load->model('Weblink_model');
        $this->load->library('form_validation');
        $this->load->helper('text');
        
    }

    public function index()
    {
            $data['title'] = 'Weblink';
            $data['weblink'] = $this->Weblink_model->getAll();

            $this->load->view('templates/header', $data);
            $this->load->view('weblink/index', $data);
            $this->load->view('templates/footer');
    }

    public function tambah_weblink()
    {
        $data['title'] = 'Weblink';

        $this->form_validation->set_rules('name', 'Nama Weblink', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('weblink/tambah_weblink');
            $this->load->view('templates/footer');
        } else {
            $this->Weblink_model->tambahWeblink();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('dashboard/weblink');
        }
    }
    
    public function detail($id)
    {
        $data['title'] = 'Weblink';
        $data['weblink'] = $this->Weblink_model->getById($id);
        
        $this->form_validation->set_rules('name', 'Nama Weblink', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('weblink/detail', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Weblink_model->ubahWeblink();
            $this->session->set_flashdata('flash','diubah');
            redirect('dashboard/weblink');
        }
    }

    public function hapus($id)
    {
    $this->Weblink_model->hapusData($id);
    $this->session->set_flashdata('flash','dihapus');
    redirect('dashboard/weblink');
    }


}