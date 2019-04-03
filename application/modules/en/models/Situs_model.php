<?php 

	class Situs_model extends CI_Model
	{

		public function ambil_data()
		{
			$content = $this->db->get('weblinks');
        	return $content->result_array();
		}

	}



 ?>