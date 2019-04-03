<?php

class Tentang_model extends CI_Model{

    public function getType($tipe)
    {
        return $this->db->get_where('abouts', ['tipe'=>$tipe])->row_array();

    }

    public function ubahData()
    {
        $data = [
            "konten" => $this->input->post('konten',true),
            "content" => $this->input->post('content',true)
        ];

        $this->db->where('tipe', $this->input->post('tipe'));
        $this->db->update('abouts', $data);
    }

}

