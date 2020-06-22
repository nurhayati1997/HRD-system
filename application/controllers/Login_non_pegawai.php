<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_non_pegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model('User_non_pegawai_m');
	}

	public function index()
	{
		check_already_login();
		$this->load->view('user/login_non_pegawai');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			//$this->load->model('user_non_pegawai_m');
			$query = $this->User_non_pegawai_m->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
					'nik' => $row->nik
					// 'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script> 
					alert('selamat login berhasil');
					window.location= ' ".site_url('Nonpegawai/detail/'.$row->nik)." ';
				</script>";
						
			}else{
				echo "<script> 
					alert('Login Gagal');
					window.location= ' ".site_url('Login_non_pegawai')." ';
				</script>";
			}
		} 
	}

	public function logout()
	{
		$params = array(
			'nik'
		);
		$this->session->unset_userdata($params);
		echo "<script> 
					alert('Logout Berhasil');
					window.location= ' ".site_url('/')." ';
				</script>";

	}

}
