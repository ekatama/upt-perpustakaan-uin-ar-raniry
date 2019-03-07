<?php

class Artikel_event extends MY_Controller{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('artikel_event/index');
        $this->load->view('templates/footer');
    }

    public function tambah_artikel()
    {
        $this->load->view('templates/header');
        $this->load->view('artikel_event/tambah_artikel');
        $this->load->view('templates/footer');
    }

    public function tambah_event()
    {
        $this->load->view('templates/header');
        $this->load->view('artikel_event/tambah_event');
        $this->load->view('templates/footer');
    }
}