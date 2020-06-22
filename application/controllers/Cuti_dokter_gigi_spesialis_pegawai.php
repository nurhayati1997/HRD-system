<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti_dokter_gigi_spesialis_pegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model('Cuti_pegawai_m');
	}

	public function index()
	{
		// $data["row"] = $this->dokter_pegawai_m->get();
		check_not_login();
		//$this->load->model('cuti_pegawai_m');
		$data["row"] = $this->Cuti_pegawai_m->dokter_gigi_spesialis();
		$this->template->load('template', 'admin/cuti_pegawai', $data);
	}
}
