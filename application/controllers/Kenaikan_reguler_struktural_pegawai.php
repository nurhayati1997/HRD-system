<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kenaikan_reguler_struktural_pegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model(['kenaikan_pegawai_m','pegawai_m']);
	}

	public function index()
	{
		// $data["row"] = $this->dokter_pegawai_m->get();
		check_not_login();
		$this->load->model('kenaikan_pegawai_m');
		$data["row"] = $this->kenaikan_pegawai_m->reguler_struktural();
		$this->template->load('template', 'admin/kenaikan_pegawai', $data);
	}

}
