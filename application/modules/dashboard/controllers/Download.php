<?php

class Download extends MY_Controller{

    public function index()
    {
            $this->load->view('templates/header');
            $this->load->view('download/index');
            $this->load->view('templates/footer');
    }

    public function tambah_file()
    {
            $this->load->view('templates/header');
            $this->load->view('download/tambah_file');
            $this->load->view('templates/footer');
    }
    
    public function detail()
    {
            $this->load->view('templates/header');
            $this->load->view('download/detail');
            $this->load->view('templates/footer');
    }
}