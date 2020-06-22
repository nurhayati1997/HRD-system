<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_dokter_gigi_spesialis extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model('pegawai_m');
	}

	public function index()
	{
		// $data["row"] = $this->dokter_pegawai_m->get();
		check_not_login();
		$this->load->model('pegawai_m');
		$data["row"] = $this->pegawai_m->get_dokter_gigi_spesialis();
		$this->template->load('template', 'admin/pegawai', $data);

	}

}
