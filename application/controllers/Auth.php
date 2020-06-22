<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model('User_m');
	}
	public function index()
	{
		check_already_login();
		$this->load->view('admin/login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			//$this->load->model('user_m');
			$query = $this->User_m->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script> 
					alert('selamat,login berhasil');
					window.location= ' ".site_url('Dashboard')." ';
				</script>";
						
			}else{
				echo "<script> 
					alert('Login Gagal');
					window.location= ' ".site_url('Auth')." ';
				</script>";
			}
		} 
	}

	public function logout()
	{
		$params = array(
			'userid', 
			'level'
		);
		$this->session->unset_userdata($params);
		echo "<script> 
					alert('Logout Berhasil');
					window.location= ' ".site_url('/')." ';
				</script>";

	}

}
