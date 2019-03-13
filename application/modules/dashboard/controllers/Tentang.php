<?php

class Tentang extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tentang_model');
        $this->load->library('form_validation');

    }

    public function tentang_perpustakaan()
    {
        $this->form_validation->set_rules('konten', 'Konten', 'required|trim');

        if($this->form_validation->run() == FALSE){
        
        $data['tentang'] = $this->Tentang_model->getType('tentang');

        $this->load->view('templates/header');
        $this->load->view('tentang/tentang_perpustakaan', $data);
        $this->load->view('templates/footer');
    } else {
        $this->Tentang_model->ubahData();
        $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
        redirect('dashboard/tentang/tentang_perpustakaan');
    }
}

    public function visi()
    {
        $this->form_validation->set_rules('konten', 'Konten', 'required|trim');

        if($this->form_validation->run() == FALSE){
        
            $data['tentang'] = $this->Tentang_model->getType('visi');

            $this->load->view('templates/header');
            $this->load->view('tentang/visi', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tentang_model->ubahData();
            $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('dashboard/tentang/visi');
        }
    }

    public function misi()
    {
        $this->form_validation->set_rules('konten', 'Konten', 'required|trim');

        if($this->form_validation->run() == FALSE){
        
            $data['tentang'] = $this->Tentang_model->getType('misi');

            $this->load->view('templates/header');
            $this->load->view('tentang/misi', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tentang_model->ubahData();
            $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('dashboard/tentang/misi');
        }
    }

    public function tujuan()
    {
        $this->form_validation->set_rules('konten', 'Konten', 'required|trim');

        if($this->form_validation->run() == FALSE){
        
            $data['tentang'] = $this->Tentang_model->getType('tujuan');

            $this->load->view('templates/header');
            $this->load->view('tentang/tujuan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tentang_model->ubahData();
            $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('dashboard/tentang/tujuan');
        }
    }

    public function struktur_organisasi()
    {
        $this->load->view('templates/header');
        $this->load->view('tentang/struktur_organisasi');
        $this->load->view('templates/footer');
    }

    public function tugas_pokok()
    {
        $this->form_validation->set_rules('konten', 'Konten', 'required|trim');

        if($this->form_validation->run() == FALSE){
        
            $data['tentang'] = $this->Tentang_model->getType('tugas');

            $this->load->view('templates/header');
            $this->load->view('tentang/tugas_pokok', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tentang_model->ubahData();
            $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('dashboard/tentang/tugas_pokok');
        }
    }
    
    public function fungsi()
    {
        $this->form_validation->set_rules('konten', 'Konten', 'required|trim');

        if($this->form_validation->run() == FALSE){
        
            $data['tentang'] = $this->Tentang_model->getType('fungsi');

            $this->load->view('templates/header');
            $this->load->view('tentang/fungsi', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tentang_model->ubahData();
            $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('dashboard/tentang/fungsi');
        }
    }

    public function program_sasaran()
    {
        $this->form_validation->set_rules('konten', 'Konten', 'required|trim');

        if($this->form_validation->run() == FALSE){
        
            $data['tentang'] = $this->Tentang_model->getType('program');

            $this->load->view('templates/header');
            $this->load->view('tentang/program_sasaran', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tentang_model->ubahData();
            $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('dashboard/tentang/program_sasaran');
        }
    }

    public function kegiatan()
    {
        $this->form_validation->set_rules('konten', 'Konten', 'required|trim');

        if($this->form_validation->run() == FALSE){
        
            $data['tentang'] = $this->Tentang_model->getType('kegiatan');

            $this->load->view('templates/header');
            $this->load->view('tentang/kegiatan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tentang_model->ubahData();
            $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('dashboard/tentang/kegiatan');
        }
    }

    
}