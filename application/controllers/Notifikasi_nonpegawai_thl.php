<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi_nonpegawai_thl extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model('nonpegawai_m');
	}

	public function index()
	{
		// $data["row"] = $this->nonpegawai_m->get();
		check_not_login();
		$this->load->model('nonpegawai_m');
		// $data["row"] = $this->nonpegawai_m->get_dokter_umum();
		$data["row"] = $this->nonpegawai_m->get_notif_nonpegawai_thl();

		$this->template->load('template', 'admin/notifikasi_nonpegawai', $data);
	}
}
