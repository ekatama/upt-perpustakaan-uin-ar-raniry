<?php

class Tentang extends MY_Controller{

    public function tentang_perpustakaan()
    {
        $this->load->view('templates/header');
        $this->load->view('tentang/tentang_perpustakaan');
        $this->load->view('templates/footer');
    }

    public function visi()
    {
        $this->load->view('templates/header');
        $this->load->view('tentang/visi');
        $this->load->view('templates/footer');
    }

    public function misi()
    {
        $this->load->view('templates/header');
        $this->load->view('tentang/misi');
        $this->load->view('templates/footer');
    }

    public function tujuan()
    {
        $this->load->view('templates/header');
        $this->load->view('tentang/tujuan');
        $this->load->view('templates/footer');
    }

    public function struktur_organisasi()
    {
        $this->load->view('templates/header');
        $this->load->view('tentang/struktur_organisasi');
        $this->load->view('templates/footer');
    }

    public function tupoksi()
    {
        $this->load->view('templates/header');
        $this->load->view('tentang/tupoksi');
        $this->load->view('templates/footer');
    }

    public function program_sasaran()
    {
        $this->load->view('templates/header');
        $this->load->view('tentang/program_sasaran');
        $this->load->view('templates/footer');
    }

    public function kegiatan()
    {
        $this->load->view('templates/header');
        $this->load->view('tentang/kegiatan');
        $this->load->view('templates/footer');
    }

    
  }