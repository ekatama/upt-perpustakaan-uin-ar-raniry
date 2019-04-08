<?php 

	class Kegiatan_model extends CI_Model
	{
		// --------------- Untuk di Homepage
		public function artikel_homepage() // Untuk yg di Homepage
		{
			$data = $this->db->order_by('id','desc')->limit('3')->get('articles');
			return $data->result_array();
		}

		public function artikel_utama() // Untuk yg di gambar besar homepage
		{
			$data = $this->db->order_by('id','desc')->get('articles');
        	return $data->first_row();	
		}


		// --------------- Untuk di Kegiatan
		public function row()
		{
       		return $this->db->get('articles')->num_rows();
    	}

		public function ambil_data($perpage, $start)
		{
			$data = $this->db->order_by('id','desc')->get('articles', $perpage, $start);
			
        	return $data->result_array();
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