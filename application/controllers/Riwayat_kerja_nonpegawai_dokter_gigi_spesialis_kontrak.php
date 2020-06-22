<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_kerja_nonpegawai_dokter_gigi_spesialis_kontrak extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model(['riwayat_kerja_nonpegawai_m','nonpegawai_m']);
	}

	public function index()
	{
		// $data["row"] = $this->nonpegawai_m->get();
		check_not_login();
		$this->load->model('riwayat_kerja_nonpegawai_m');
		$data["row"] = $this->riwayat_kerja_nonpegawai_m->dokter_gigi_spesialis_kontrak();
		$this->template->load('template', 'admin/riwayat_kerja_nonpegawai', $data);
	}



}
