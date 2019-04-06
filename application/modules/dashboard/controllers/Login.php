<?php

class Login extends MY_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Logs_model');

    }
    public function index()
    {
        if($this->session->userdata('admin') == TRUE){
            redirect('dashboard');
        }

        $this->load->view('templates/login_header');
        $this->load->view('login/index');
        $this->load->view('templates/login_footer');
    }
    
    public function proses_login()
    {

        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $login = $this->User_model->cek_user($email, $pass);

        if($login) {

            //login berhasil
            $data = [
                'email' => $login['email'],
                'fullname' => $login['fullname'],
                'admin' => TRUE
            ];

            $this->session->set_userdata($data);
            $this->Logs_model->setData();

            redirect('dashboard');

        } else {

            $this->session->set_flashdata('login_gagal', 'Username atau password salah');
            redirect('dashboard/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        
        redirect('dashboard/login');
    }
}