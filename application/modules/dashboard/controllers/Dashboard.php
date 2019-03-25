<?php

class Dashboard extends MY_Controller{

    function __construct() {
        parent::__construct();

        if($this->session->userdata('email') !== "admin@admin.com"){
            redirect('index.php/dashboard/login');
        }

    } 
    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

}