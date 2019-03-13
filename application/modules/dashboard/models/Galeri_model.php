<?php

class Galeri_model extends CI_Model{

    public function getAll()
    {
        return $this->db->get('galleries')->result_array();
    }
}