<?php

class Download_model extends CI_Model{

    public function getAll()
    {
        return $this->db->get('download')->result_array();
    }
}