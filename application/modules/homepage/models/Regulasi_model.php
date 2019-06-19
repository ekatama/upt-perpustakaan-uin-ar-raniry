<?php 

	class Regulasi_model extends CI_Model
	{

		public function data()
		{
			$data = $this->db->get('regulasi');
        	return $data->result_array();
		}

		public function module($kat)
		{
			$data = $this->db->where('kategori', $kat)->get('regulasi');
			return $data->result_array();
		}

	}



 ?>