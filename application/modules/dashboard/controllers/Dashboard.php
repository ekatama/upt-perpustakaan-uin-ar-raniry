<?php

class Dashboard extends MY_Controller{

    function __construct() {
        parent::__construct();
        if($this->session->userdata('email') !== "admin@admin.com"){
            redirect(base_url('index.php/dashboard/login'));
        }
    } 
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

}