<?php

class Layanan_model extends CI_Model{

    public function getLayanan()
    {
        return $this->db->get('services')->result_array();
    }

    public function getById($id)
    {
        return $this->db->where('id', $id)->get('services')->row_array();
    }

    public function tambahLayanan()
    {
        $data = [
            'judul' => $this->input->post('judul', true),
            'konten' => $this->input->post('konten', true),
            'title' => $this->input->post('title', true),
            'content' => $this->input->post('content', true),
            'jadwal' => $this->input->post('jadwal', true),
        ];

        $this->db->insert('services', $data);
    }

    public function ubahLayanan()
    {
        $data = [
            'judul' => $this->input->post('judul', true),
            'konten' => $this->input->post('konten', true),
            'title' => $this->input->post('title', true),
            'content' => $this->input->post('content', true),
            'jadwal' => $this->input->post('jadwal', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('services', $data);
    }

    public function hapusData($id)
    {
        $this->db->where('id', $id)->delete('services');
    }


}