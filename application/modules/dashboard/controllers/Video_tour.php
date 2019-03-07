<?php

class Video_tour extends MY_Controller{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('video_tour/index');
        $this->load->view('templates/footer');
    }
}