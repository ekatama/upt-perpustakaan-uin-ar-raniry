<?php

class Video_tour extends MY_Controller{

    public function index()
    {
        $data['title'] = 'Video Tour';

        $this->load->view('templates/header', $data);
        $this->load->view('video_tour/index');
        $this->load->view('templates/footer');
    }
}