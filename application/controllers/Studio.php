<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Studio extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function detailStudio($v_id)
	{
		$v_data['data_studio'] = $this->Mread->getAllStudioById($v_id);
		$v_data['data_total_ruangan'] = $this->Mread->getTotalRuanganByStudio($v_id);
		$v_data['data_peralatan_studio'] = $this->Mread->getAllPeralatanStudioById($v_id);
		$v_data['data_booking_studio'] = $this->Mread->getAllBokingStudioById($v_id);
		// var_dump($v_data['data_studio']);
		// die();
		$this->load->view('masyarakat/detailStudio', $v_data);
	}

	public function getStudioById($v_id)
	{
		$data = $this->Mread->getAllStudioById($v_id);
		echo json_encode($data);
	}

	public function getUserStudioById($v_id)
	{
		$data = $this->Mread->getUserStudioById($v_id);
		echo json_encode($data);
	}

}
