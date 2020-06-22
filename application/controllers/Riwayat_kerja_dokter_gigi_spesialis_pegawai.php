<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_kerja_dokter_gigi_spesialis_pegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model(['riwayat_kerja_pegawai_m','pegawai_m']);
	}

	public function index()
	{
		// $data["row"] = $this->pegawai_m->get();
		check_not_login();
		$this->load->model('riwayat_kerja_pegawai_m');
		$data["row"] = $this->riwayat_kerja_pegawai_m->dokter_gigi_spesialis();
		$this->template->load('template', 'admin/riwayat_kerja_pegawai', $data);
	}
}
