<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mread extends CI_Model {


	//USER
	public function getAllUser()
	{
		return $this->db->query("SELECT * from tb_user")->result();
	}
	public function getAllUserById($id)
	{
		$sql = "SELECT * from tb_user WHERE id_user =?";
		return $query=$this->db->query($sql,$id)->row_array(); 
	}

	//Studio
	public function getAllStudio()
	{
		$query = $this->db->query("SELECT * from tb_studio");
		return $query->result();
	}


	public function getAllStudioById($id)
	{
		$sql = "SELECT * from tb_studio WHERE id_studio =?";
		return $query=$this->db->query($sql,$id)->row_array(); 
	}


	//ALAT

	public function getAllAlat()
	{
		$query = $this->db->query("SELECT * from tb_alat");
		return $query->result();
	}


	public function getAllPeralatanStudioById($id)
	{
		$sql = "SELECT * from tb_alat WHERE alat_idstudio =?";
		return $query=$this->db->query($sql,$id)->result(); 
	}


	


	// RUANGAN
	public function getTotalRuanganByStudio($id)
	{
		$sql = "SELECT * from tb_ruangan WHERE ruangan_idstudio =?";
		return $query=$this->db->query($sql,$id)->num_rows(); 
	}


	// BOKING

	public function getAllBokingStudioById($id)
	{
		$sql = "SELECT * from tb_jadwal_boking LEFT JOIN tb_ruangan ON tb_jadwal_boking.boking_idruangan = tb_ruangan.id_ruangan WHERE tb_jadwal_boking.boking_idstudio =?";

		return $query=$this->db->query($sql,$id)->result(); 
	}


}
