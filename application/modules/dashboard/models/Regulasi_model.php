<?php

class Regulasi_model extends CI_Model{

    public function getAll()
    {
        return $this->db->get('regulasi')->result_array();
    }

    public function detailRegulasi($id) {
        return $this->db->get('id', $id)->result_array();
    }

    public function tambahFile($filename)
    {
        $data = [

            "title" => $this->input->post('title', true), 
            "judul" => $this->input->post('judul', true),
            "categories" => $this->input->post('categories', true), 
            "kategori" => $this->input->post('kategori', true), 
            "file" => $filename,

        ];

        $this->db->insert('regulasi', $data);
    }

    public function hapusFile($id)
    {
        $query = $this->db->where('id', $id)->get('regulasi');
        $row = $query->row();

        unlink('./assets/uploads/unduh/'.$row->file);
        $this->db->where('id', $id)->delete('regulasi');
    }

}