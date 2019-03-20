<?php 

	class Tentang_model extends CI_Model
	{

		public function ambil_data($type)
        {
        	$content = $this->db->where('type', $type)->get('abouts');
        	return $content->row_array();
        }

	}

