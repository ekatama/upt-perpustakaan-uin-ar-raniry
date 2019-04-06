<?php 


	class Video_model extends CI_model
	{
		public function video()
		{
			$content = $this->db->get('video');
			return $content->row_array();
		}
	}