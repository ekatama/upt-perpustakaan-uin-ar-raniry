<?php

class Download_model extends CI_Model{

    public function getAll()
    {
        return $this->db->get('download')->result_array();
    }

    public function detailDownload($id) {
        return $this->db->where('download_id', $id)->get('downloadlogs')->result_array();
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

        $this->db->insert('download', $data);
    }

    public function hapusFile($id)
    {
        $query = $this->db->where('id', $id)->get('download');
        $row = $query->row();

        unlink('./assets/dashboard/uploads/file_download/'.$row->file);
        $this->db->where('id', $id)->delete('download');
    }
}