<?php

class Logs extends MY_Controller{

    public function index()
    {
            $data['title'] = 'Logs';

            $this->load->view('templates/header', $data);
            $this->load->view('logs/index');
            $this->load->view('templates/footer');
    }
}