<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nonpegawai_nakes_kontrak extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model('nonpegawai_m');
	}

	public function index()
	{
		// $data["row"] = $this->dokter_pegawai_m->get();
		check_not_login();
		$this->load->model('nonpegawai_m');
		$data["row"] = $this->nonpegawai_m->get_nakes_kontrak();
		$this->template->load('template', 'admin/nonpegawai', $data);

	}

}
