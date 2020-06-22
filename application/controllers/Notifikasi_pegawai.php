<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi_pegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model('pegawai_m');
	}

	public function index()
	{
		// $data["row"] = $this->pegawai_m->get();
		check_not_login();
		$this->load->model('pegawai_m');
		// $data["row"] = $this->pegawai_m->get_dokter_umum();
		$data["row"] = $this->pegawai_m->get_notif_pegawai();

		$this->template->load('template', 'admin/notifikasi_pegawai', $data);
	}
}
