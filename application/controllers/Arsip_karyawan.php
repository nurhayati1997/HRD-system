<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip_karyawan extends CI_Controller {

	public function index()
	{
		check_not_login();
		$this->template->load('template', 'admin/arsip_karyawan');
	}

}
