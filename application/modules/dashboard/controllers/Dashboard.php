<?php

class Dashboard extends CI_Controller{

    public function index()
    {
    
        $this->load->view('templates/header');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

    public function artikel()
    {
        $this->load->view('templates/header');
        $this->load->view('artikel/index');
        $this->load->view('templates/footer');
    }

    public function tambah_artikel()
    {
        $this->load->view('templates/header');
        $this->load->view('artikel/tambah_artikel');
        $this->load->view('templates/footer');
    }
}