<?php

class Dashboard extends CI_Controller{

    public function index()
    {
    
        $this->load->view('templates/header');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

    public function artikel_event()
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

    public function tentang()
    {
        $halaman = $this->uri->segment(3);
        
        if($halaman == "tentang_perpustakaan"){

            $this->load->view('templates/header');
            $this->load->view('tentang/tentang_perpustakaan');
            $this->load->view('templates/footer');

        } else if($halaman == "visi"){

            $this->load->view('templates/header');
            $this->load->view('tentang/visi');
            $this->load->view('templates/footer');

        } else if($halaman == "misi"){

            $this->load->view('templates/header');
            $this->load->view('tentang/misi');
            $this->load->view('templates/footer');

        } else if($halaman == "tujuan"){

            $this->load->view('templates/header');
            $this->load->view('tentang/tujuan');
            $this->load->view('templates/footer');

        } else if($halaman == "struktur_organisasi"){

            $this->load->view('templates/header');
            $this->load->view('tentang/struktur_organisasi');
            $this->load->view('templates/footer');

        } else if($halaman == "tupoksi"){

            $this->load->view('templates/header');
            $this->load->view('tentang/tupoksi');
            $this->load->view('templates/footer');

        } else if($halaman == "program_sasaran"){

            $this->load->view('templates/header');
            $this->load->view('tentang/program_sasaran');
            $this->load->view('templates/footer');

        } else if($halaman == "kegiatan"){

            $this->load->view('templates/header');
            $this->load->view('tentang/kegiatan');
            $this->load->view('templates/footer');

        } else {

            $this->load->view('templates/header');
            $this->load->view('404_error');
            $this->load->view('templates/footer');
        }

    }

    public function video_tour()
    {
            $this->load->view('templates/header');
            $this->load->view('video_tour/index');
            $this->load->view('templates/footer');
    }

    public function logs()
    {
            $this->load->view('templates/header');
            $this->load->view('logs/index');
            $this->load->view('templates/footer');
    }

    public function galeri()
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

    public function download()
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

    public function weblink()
    {
            $this->load->view('templates/header');
            $this->load->view('weblink/index');
            $this->load->view('templates/footer');
    }

    


}