<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip_managemen_pegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model('Arsip_pegawai_m');
	}

	public function index()
	{
		// $data["row"] = $this->pegawai_m->get();
		check_not_login();
		//$this->load->model('arsip_pegawai_m');
		$data["row"] = $this->Arsip_pegawai_m->manajemen();
		$this->template->load('template', 'admin/arsip_pegawai', $data);
	}


}
