<?php

class Login extends MY_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');

    }
    public function index()
    {
        if($this->session->userdata('email') == "admin@admin.com"){
            redirect(base_url('index.php/dashboard/'));
        }

        $this->load->view('templates/auth_header');
        $this->load->view('login/index');
        $this->load->view('templates/auth_footer');
    }
    
    public function proses_login()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
 
        $login = $this->user_model->cek_user($email, $pass);

        if(!empty($login)) {

            //login berhasil
            $this->session->set_userdata($login);

            // print_r($this->session->userdata('email'));
            redirect(base_url('index.php/dashboard'));
        } else {
            
            $this->session->set_flashdata('login_gagal', 'Username atau password salah');
            redirect(base_url('index.php/dashboard/login'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        
        redirect(base_url('index.php/dashboard/login'));
    }
}