<?php
	class Siswa_model extends CI_Model{
		function getAllData(){
			$this->db->order_by("siswa_id","DESC");
			$query = $this->db->get("siswa");
			return $query;
		}
	}
?>