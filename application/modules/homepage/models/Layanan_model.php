<?php 

	class Layanan_model extends CI_Model
	{
		
		public function ambil_data()
		{
			$data = $this->db->get('services');
			return $data->result_array();
		}

	}	





?>