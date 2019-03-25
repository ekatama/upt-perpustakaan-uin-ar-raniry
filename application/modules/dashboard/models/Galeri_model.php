<?php

class Galeri_model extends CI_Model{

    public function getAlbum()
    {
        return $this->db->get('albums')->result_array();
    }
    
    public function getGalleries()
    {
        return $this->db->get('galleries')->result_array();
    }

    public function tambahAlbum()
    {
        $data = [ "name" => $this->input->post('judul', true) ];

        $this->db->insert('albums', $data);
    }

    public function tambahFoto($filename)
    {
        $data = [
        "album" => $this->input->post('album', true),
        "img"   => $filename, 
        ];

        $this->db->insert('galleries', $data);
    }

    public function hapusAlbum($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('albums');
    }
    
    public function hapusGalleries($id)
    {
        $query = $this->db->where('id', $id)->get('galleries');
        $row = $query->row();

        unlink('./assets/dashboard/uploads/galeri/'.$row->img);
        $id_album = $row->album;
        $this->db->where('id', $id)->delete('galleries');
        return $id_album;
    }

    public function detailAlbum($id) {
        $query = $this->db->where('album', $id)->get('galleries');
        return $query->result_array();
    }
}