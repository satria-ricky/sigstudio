<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mread extends CI_Model {

	public function getAllStudio()
	{
		$query = $this->db->query("SELECT * from tb_studio");
		return $query->result();

	}

	
}
