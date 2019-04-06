<?php 

	class FAQ_model extends CI_model
	{
		public function ambil_data()
		{
			$data = $this->db->get('faq');
			return $data->result_array();
		}

	}




