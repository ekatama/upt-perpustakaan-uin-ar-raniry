<?php

class Faq_model extends CI_Model{

    public function getFaq()
    {
        return $this->db->get('faq')->result_array();
    }

    public function getById($id)
    {
        return $this->db->where('id', $id)->get('faq')->row_array();
    }

    public function tambahFaq()
    {
      $data = [
        'pertanyaan' => $this->input->post('pertanyaan', true),
        'jawaban' => $this->input->post('jawaban', true),
        'question' => $this->input->post('question', true),
        'answer' => $this->input->post('answer', true)
      ];

      $this->db->insert('faq', $data);
    }

    public function ubahFaq()
    {
      $data = [
        'pertanyaan' => $this->input->post('pertanyaan', true),
        'jawaban' => $this->input->post('jawaban', true),
        'question' => $this->input->post('question', true),
        'answer' => $this->input->post('answer', true)
      ];

      $this->db->where('id', $this->input->post('id'));
      $this->db->update('faq', $data);

    }

    public function hapusData($id)
    {
        $this->db->where('id', $id)->delete('faq');
    }

  }