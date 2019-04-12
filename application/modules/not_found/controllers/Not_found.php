<?php 

	class Not_found extends MY_Controller
	{	
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$data['title']		= '404 not found';

			$this->load->view('view_not_found', $data);
		}

		


	}
