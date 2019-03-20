<?php

class Login extends MY_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');

    }
    public function index()
    {
        if($this->session->userdata('admin') == TRUE){
            redirect(base_url('index.php/dashboard/'));
        }

        $this->load->view('templates/login_header');
        $this->load->view('login/index');
        $this->load->view('templates/login_footer');
    }
    
    public function proses_login()
    {

        $email = $this->input->post('email');
        $pass = $this->input->post('password');
 
        $login = $this->user_model->cek_user($email, $pass);

        if($login) {

            //login berhasil
            $data = [
                'email' => $login['email'],
                'fullname' => $login['fullname'],
                'admin' => TRUE
            ];
            $this->session->set_userdata($data);

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