<?php

class Weblink_model extends CI_Model{

  public function getAll()
  {
    return $this->db->get('weblinks')->result_array();
  }

  public function getById($id)
  {
    return $this->db->where('id', $id)->get('weblinks')->row_array();
  }

  public function tambahWeblink()
  {
    $data = [
      'name' => $this->input->post('name', true),
      'url' => $this->input->post('url', true),
    ];

    $this->db->insert('weblinks', $data);
  }

  public function ubahWeblink()
  {
    $data = [
      'name' => $this->input->post('name', true),
      'url' => $this->input->post('url', true),
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('weblinks', $data);
  }

  public function hapusData($id)
  {
    $this->db->where('id', $id)->delete('weblinks');
  }
}