<?php

class Galeri_model extends CI_Model{

    public function getAlbum()
    {
        return $this->db->get('albums')->result_array();
    }

    public function tambahAlbum()
    {
        $data = [ "name" => $this->input->post('judul', true) ];

        $this->db->insert('albums', $data);
    }

    public function hapusAlbum($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('albums');
    }
}