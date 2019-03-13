<?php

class Tentang_model extends CI_Model{

    public function getType($type)
    {
        return $this->db->get_where('abouts', ['type'=>$type])->row_array();

    }

    public function ubahData()
    {
        $data = [
            "content" => $this->input->post('konten',true)
        ];

        $this->db->where('type', $this->input->post('type'));
        $this->db->update('abouts', $data);
    }
    
}

