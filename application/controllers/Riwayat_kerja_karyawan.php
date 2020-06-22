<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_kerja_karyawan extends CI_Controller {

	public function index()
	{
		check_not_login();
		$this->template->load('template', 'admin/riwayat_kerja_karyawan');
	}

}
