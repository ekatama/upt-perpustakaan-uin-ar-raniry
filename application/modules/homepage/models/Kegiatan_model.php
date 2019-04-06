<?php 

	class Kegiatan_model extends CI_Model
	{
		// --------------- Untuk di Homepage
		public function artikel_homepage() // Untuk yg di Homepage
		{
			$content = $this->db->order_by('id','desc')->limit('3')->get('articles');
			return $content->result_array();
		}

		public function artikel_utama() // Untuk yg di gambar besar homepage
		{
			$content = $this->db->order_by('id','desc')->get('articles');
        	return $content->first_row();	
		}


		// --------------- Untuk di Kegiatan
		public function row()
		{
       		return $this->db->get('articles')->num_rows();
    	}

		public function ambil_data($perpage, $start)
		{
			$content = $this->db->order_by('id','desc')->get('articles', $perpage, $start);
        	return $content->result_array();
		}

		public function single_post($id)
		{
			$content = $this->db->where('id',$id)->get('articles');
			return $content->first_row();
		}

	}



 ?>