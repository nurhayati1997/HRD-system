<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['pegawai_m','nonpegawai_m']);
	}

	public function index()
	{
		check_not_login();
		$this->template->load('template', 'admin/dashboard');
		// $data['chart'] = $this->pegawai_m->jenis_karyawan_thl();
		// $this->template->load('template', 'admin/dashboard', $data);
	}

	//public function chart_thl(){
		// $chart['total_pegawai'] = $this->pegawai_m->jenis_karyawan_thl();
		// $data['chart'] = $chart;
		// $data['chart'] = $this->pegawai_m->jenis_karyawan_thl();
		// $this->template->load('template', 'admin/dashboard', $data);
	//}

	// public function total_pegawai(){
	// 	$this->load->model('pegawai_m');
	// 	$data['total_pegawai'] = $this->pegawai_m->hitung_jumlah_pegawai();
	// 	$this->template->load('template', 'admin/dashboard', $data);
	// }

}
