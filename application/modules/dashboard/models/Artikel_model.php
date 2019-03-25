<?php

class Artikel_model extends CI_Model{

    public function getAll()
    {
        return $this->db->get('articles')->result_array();
    }


    public function tambahArtikel($filename)
    {
        $data = [
        
        "title" => $this->input->post('judul', true), 
        "cover" => $filename, 
        "content" => $this->input->post('konten', true), 
        "tag" => $this->input->post('tag', true), 
    
        ];

        $this->db->insert('articles', $data);
    }

    public function hapusArtikelEvent($id)
    {
        $query = $this->db->where('id', $id)->get('articles');
        $row = $query->row();

        unlink('./assets/dashboard/uploads/artikel_event/'.$row->cover);
        $this->db->where('id', $id)->delete('articles');
    }

    public function cariArtikel()
    {
        $keyword = $this->input->get('keyword', true);
        $this->db->like('title', $keyword);
        $this->db->or_like('judul', $keyword);
        $this->db->or_like('tag', $keyword);
        $this->db->or_like('tanda', $keyword);
        return $this->db->get('articles')->result_array();
    }

}