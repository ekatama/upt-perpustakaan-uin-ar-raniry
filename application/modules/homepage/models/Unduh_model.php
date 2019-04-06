 <?php 

	class Unduh_model extends CI_Model
	{
		public function ambil_data()
		{
			$data = $this->db->order_by('id', 'ASC')->get('download');
        	return $data->result_array();
		}

		public function track_os()
		{
			if ($this->agent->is_mobile('iphone')) {
				$agent = "iOS";
			}
			elseif ($this->agent->is_mobile()) {
				$agent = "Android";
			}
			else {
				$agent = $this->agent->platform();
			}
			return $agent;
		}

		public function downloading($id)
		{
        	$data = $this->db->where('id', $id)->get('download');
        	return $data->row_array();
		}
	}

 ?>