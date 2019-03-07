<?php

class Weblink extends MY_Controller{

    public function index()
    {
            $this->load->view('templates/header');
            $this->load->view('weblink/index');
            $this->load->view('templates/footer');
    }
}