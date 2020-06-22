<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kenaikan_pangkat_karyawan extends CI_Controller {

	public function index()
	{
		check_not_login();
		$this->template->load('template', 'admin/kenaikan_pangkat_karyawan');
	}

}
