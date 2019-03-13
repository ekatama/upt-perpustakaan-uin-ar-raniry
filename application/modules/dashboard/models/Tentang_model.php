<?php

class Tentang_model extends CI_Model{

    public function getAll()
    {
        return $this->db->get('abouts')->result_array();

    }
    
}

