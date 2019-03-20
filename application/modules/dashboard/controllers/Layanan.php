<?php

class Layanan extends MY_Controller{

    public function jadwal_layanan()
    {
        $this->load->view('templates/header');
        $this->load->view('layanan/jadwal_layanan');
        $this->load->view('templates/footer');
    }
}