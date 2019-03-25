<?php 

	class Unduh_model extends CI_Model
	{

		public function ambil_data()
		{
			$content = $this->db->get('download');
        	return $content->result_array();
		}

	}



 ?>