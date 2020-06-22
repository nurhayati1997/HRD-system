<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip_nonpegawai_manajemen_thl extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model('Arsip_nonpegawai_m');
	}

	public function index()
	{
		// $data["row"] = $this->nonpegawai_m->get();
		check_not_login();
		//$this->load->model('arsip_nonpegawai_m');
		$data["row"] = $this->Arsip_nonpegawai_m->manajemen_thl();
		$this->template->load('template', 'admin/arsip_nonpegawai', $data);
	}



}
