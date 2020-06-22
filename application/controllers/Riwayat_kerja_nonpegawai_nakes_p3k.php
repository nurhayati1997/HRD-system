<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_kerja_nonpegawai_nakes_p3k extends CI_Controller {

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
		$data["row"] = $this->riwayat_kerja_nonpegawai_m->nakes_p3k();
		$this->template->load('template', 'admin/riwayat_kerja_nonpegawai', $data);
	}



}
