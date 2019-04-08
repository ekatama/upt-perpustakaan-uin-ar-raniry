<?php

class Faq extends MY_Controller{

    function __construct() {
				
        parent::__construct();
        $this->load->model('Faq_model');
        $this->load->library('form_validation');
        $this->load->helper('text');
        
    }

    public function index()
    {
        $data['title'] = 'FAQ';
        $data['faq'] = $this->Faq_model->getFaq();

        $this->load->view('templates/header', $data);
        $this->load->view('faq/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'FAQ';
        $data['faq'] = $this->Faq_model->getById($id);

        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');
        $this->form_validation->set_rules('jawaban', 'Jawaban', 'required');
        $this->form_validation->set_rules('question', 'Question', 'required');
        $this->form_validation->set_rules('answer', 'Answer', 'required');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('faq/detail', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Faq_model->ubahFaq();
            $this->session->set_flashdata('flash','diubah');
            redirect('dashboard/faq');
        }
    }

    public function tambah_faq()
    {
        $data['title'] = 'FAQ';

        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');
        $this->form_validation->set_rules('jawaban', 'Jawaban', 'required');
        $this->form_validation->set_rules('question', 'Question', 'required');
        $this->form_validation->set_rules('answer', 'Answer', 'required');
        
        if($this->form_validation->run() == FALSE){

          $this->load->view('templates/header', $data);
          $this->load->view('faq/tambah_faq');
          $this->load->view('templates/footer');
        } else {

            $this->Faq_model->tambahFaq();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('dashboard/faq');
        }
    }

    public function hapus($id)
    {
    $this->Faq_model->hapusData($id);
    $this->session->set_flashdata('flash','dihapus');
    redirect('dashboard/faq');
    }
  }