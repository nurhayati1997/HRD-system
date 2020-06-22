<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model('User_pegawai_m');
	}
	
	public function index()
	{
		check_already_login();
		$this->load->view('user/login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			//$this->load->model('user_pegawai_m');
			$query = $this->User_pegawai_m->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
					'nip' => $row->nip
					// 'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script> 
					alert('selamat,login berhasil');
					window.location= ' ".site_url('Pegawai/detail/'.$row->nip)." ';
				</script>";
						
			}else{
				echo "<script> 
					alert('Login Gagal');
					window.location= ' ".site_url('Login_pegawai')." ';
				</script>";
			}
		} 
	}

	public function logout()
	{
		$params = array(
			'nip'
		);
		$this->session->unset_userdata($params);
		echo "<script> 
					alert('Logout Berhasil');
					window.location= ' ".site_url('/')." ';
				</script>";

	}

}
