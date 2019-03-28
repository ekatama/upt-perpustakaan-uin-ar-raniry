<?php

class Weblink extends MY_Controller{

    public function index()
    {
            $data['title'] = 'Weblink';

            $this->load->view('templates/header', $data);
            $this->load->view('weblink/index');
            $this->load->view('templates/footer');
    }
}