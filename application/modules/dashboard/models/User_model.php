<?php

class User_model extends CI_Model{

    public function cek_user($email, $password)
    {
        $this->db->where("email", $email);
        $this->db->where('password', md5($password));
        $query = $this->db->select('email, password, fullname')->get('users');
        return $query->row_array();
    }
}