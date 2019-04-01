<?php

class Layanan extends MY_Controller{

    public function jadwal_layanan()
    {
        $data['title'] = 'Layanan';
        $this->load->view('templates/header', $data);
        $this->load->view('layanan/jadwal_layanan');
        $this->load->view('templates/footer');
    }
}