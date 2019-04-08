<?php

class Video_tour extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Video_model');
        $this->load->library('form_validation');


    }

    public function index()
    {
        $data['title'] = 'Video Tour';
        $data['video'] = $this->Video_model->getAll();

        $this->form_validation->set_rules('url', 'URL', 'required|trim');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('video_tour/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Video_model->ubahUrl();
            $this->session->set_flashdata('flash','diubah');
            redirect('dashboard/video_tour');
        }

        
    }
}