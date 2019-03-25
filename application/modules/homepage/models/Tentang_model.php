<?php 

	class Tentang_model extends CI_Model
	{

		public function ambil_data($tipe)
        {
        	$content = $this->db->where('tipe', $tipe)->get('abouts');
        	return $content->row_array();
        }

	}

