<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti_nonpegawai_perawat_thl extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model('Cuti_nonpegawai_m');
	}

	public function index()
	{
		// $data["row"] = $this->nonpegawai_m->get();
		check_not_login();
		//$this->load->model('cuti_nonpegawai_m');
		$data["row"] = $this->Cuti_nonpegawai_m->perawat_thl();
		$this->template->load('template', 'admin/cuti_nonpegawai', $data);
	}



}
