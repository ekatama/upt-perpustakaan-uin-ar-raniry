<?php

class Download extends MY_Controller{

        function __construct() {
                
                parent::__construct();

                $this->load->model('Download_model');
                $this->load->library('form_validation');
                
        }

        public function index()
        {

                $data ['download'] = $this->Download_model->getAll();
                $this->load->view('templates/header');
                $this->load->view('download/index', $data);
                $this->load->view('templates/footer');
        }

        public function tambah_file()
        {
                $this->form_validation->set_rules('judul', 'Judul', 'required');
                $this->form_validation->set_rules('file', 'File', 'required');
                $this->form_validation->set_rules('kategori', 'Kategori', 'required');

                if($this->form_validation->run() == FALSE){

                        $this->load->view('templates/header');
                        $this->load->view('download/tambah_file');
                        $this->load->view('templates/footer');
                } else{
                        echo "berhasil";
                }
        }

        public function detail()
        {
                $this->load->view('templates/header');
                $this->load->view('download/detail');
                $this->load->view('templates/footer');
        }
}