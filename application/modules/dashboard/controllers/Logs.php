<?php

class Logs extends MY_Controller{

    public function index()
    {
            $this->load->view('templates/header');
            $this->load->view('logs/index');
            $this->load->view('templates/footer');
    }
}