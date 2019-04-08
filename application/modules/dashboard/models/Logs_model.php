<?php

class Logs_model extends CI_Model{

    public function setData()
    {
      $this->load->library('user_agent');

      if($this->agent->is_mobile('iphone')){
        $os = "iOS";

      } else if($this->agent->is_mobile()){
        $os = "Android";

      } else {
        $os = $this->agent->platform();
      } 

      $data = [
        "ip" => $this->input->ip_address(),
        "os" => $os,
        "browser" => $this->agent->browser()
      ];

      $this->db->insert('logs', $data);
    }

    public function getData()
    {
      return $this->db->order_by('id', 'desc')->get('logs')->result_array();
    }

  }