<?php

class Galeri extends MY_Controller{

    public function index()
    {
            $this->load->view('templates/header');
            $this->load->view('galeri/index');
            $this->load->view('templates/footer');
    }

    public function tambah_album()
    {
            $this->load->view('templates/header');
            $this->load->view('galeri/tambah_album');
            $this->load->view('templates/footer');
    }

    public function tambah_foto()
    {
            $this->load->view('templates/header');
            $this->load->view('galeri/tambah_foto');
            $this->load->view('templates/footer');
    }
}