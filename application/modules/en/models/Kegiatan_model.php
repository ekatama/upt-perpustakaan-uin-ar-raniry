<?php 

	class Kegiatan_model extends CI_Model
	{

		// --------------- Search
		public function search()
	    {
	        $keyword = $this->input->get('search', true);
	        $this->db->like('title', $keyword);
	        $this->db->or_like('tag', $keyword);
	        return $this->db->get('articles')->result_array();
	    }

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

		// --------------- Single Post
		public function single_post($id)
		{
			$data = $this->db->where('id',$id)->get('articles');

			$this->db->set('view', $data->first_row()->view+1);
            $this->db->where('id', $id);
			$this->db->update('articles');

			return $data->first_row();
		}
	}

 ?>