<?php 

	class Galeri_model extends CI_Model
	{
		public function galeri()
		{
			$data = $this->db->query("SELECT * FROM `albums` JOIN `galleries` ON galleries.album = albums.id");
			return $data->result_array();
		}	

		public function album()
		{
			$content = $this->db->get('albums');
			return $content->result_array();
		}

	}	
	
	


 ?>