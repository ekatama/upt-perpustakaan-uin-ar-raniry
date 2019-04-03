<?php

class Video_model extends CI_Model{

  public function getAll()
  {
    return $this->db->get('video')->row_array();

  }

  public function ubahUrl()
    {
        $data = [
            'url' => $this->input->post('url', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('video', $data);
    }

}