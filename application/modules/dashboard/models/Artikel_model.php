<?php

class Artikel_model extends CI_Model{

    public function getAll()
    {
        return $this->db->get('articles')->result_array();
    }
}