<?php

class Logs extends MY_Controller{

    public function index()
    {
      $data['title'] = 'Logs';
      
      $this->load->library('user_agent');
      $data['ip_address'] = $this->input->ip_address();
      $data['browser'] = $this->agent->browser();
      $data['os'] = $this->agent->platform();

      $this->load->view('templates/header', $data);
      $this->load->view('logs/index', $data);
      $this->load->view('templates/footer');
    }
}