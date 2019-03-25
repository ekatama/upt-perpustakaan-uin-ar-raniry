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

		public function get_count()
		{
       		return $this->db->count_all('articles');
    	}

		public function ambil_data()
		{
			$content = $this->db->order_by('id','desc')->get('articles');
        	return $content->result_array();
		}


		public function single_post($id)
		{
			$content = $this->db->where('id',$id)->get('articles');
			return $content->first_row();
		}

	}



 ?>