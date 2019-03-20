<?php 

	class Kegiatan_model extends CI_Model
	{

		public function artikel_homepage()
		{
			$content = $this->db->order_by('id','desc')->limit('3')->get('articles');
			return $content->result_array();
		}

		public function artikel_utama() // Untuk yg di gambar besar homepage
		{
			$content = $this->db->order_by('id','desc')->get('articles');
        	return $content->first_row();	
		}

		public function ambil_data()
		{
			$content = $this->db->order_by('id','desc')->get('articles');
        	return $content->result_array();
		}


		public function single_post()
		{

			$content = $this->db->get('articles');
			return $content->row_array();
		}

	}



 ?>