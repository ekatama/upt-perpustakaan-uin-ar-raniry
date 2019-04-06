<?php

class Logs extends MY_Controller{

    function __construct()
    {
    parent::__construct();
    $this->load->model('Logs_model');
    
    }

    public function index()
    {
      $data['title'] = 'Logs';
      $data['logs'] = $this->Logs_model->getData();
      
      $this->load->view('templates/header', $data);
      $this->load->view('logs/index', $data);
      $this->load->view('templates/footer');
    }
}