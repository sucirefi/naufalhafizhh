<?php
	class Dashboard extends CI_Controller{
		function index()
		{
			$data['nip'] = "nip";
			$data['content'] = "home_view";
			$this->load->view("dashboard_view", $data);
		}
	}
?>