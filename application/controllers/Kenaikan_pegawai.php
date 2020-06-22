<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kenaikan_pegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model(['kenaikan_pegawai_m','pegawai_m']);
	}

	public function index()
	{
		// $data["row"] = $this->pegawai_m->get();
		check_not_login();
		$this->load->model('kenaikan_pegawai_m');
		$data["row"] = $this->kenaikan_pegawai_m->get();
		$this->template->load('template', 'admin/kenaikan_pegawai', $data);
	}


	public function create(){
		$kenaikan_pegawai = new stdClass();
		$kenaikan_pegawai-> kenaikan_id = null;
		$kenaikan_pegawai-> ruangan = null;
		$kenaikan_pegawai-> tanggal_kenaikan = null;
		$kenaikan_pegawai-> no_karpeg = null;
		$kenaikan_pegawai-> no_sk_pns = null;
		$kenaikan_pegawai-> no_sk_terakhir = null;

		$this->load->model('pegawai_m');
		$nip = $this->pegawai_m->get();
		$data = array(
			'page'=> 'create',
			'row' => $kenaikan_pegawai,
			'nip' => $nip,
		);
		$this->template->load('template', 'admin/create_kenaikan_pegawai', $data);
	}

	public function edit($id)
	{
		// $this->load->model('pegawai_m');
		// $data["row"] = $th is->pegawai_m->get();
		$this->load->model('kenaikan_pegawai_m');
		$query = $this->kenaikan_pegawai_m->get($id);
		if($query->num_rows() > 0){
			//$item = $query->row();
			$kenaikan_pegawai =$query->row();
			
			$nip = $this->pegawai_m->get();

			$data = array(
				'page' => 'edit',
				'row' => $kenaikan_pegawai,
				'nip' => $nip,
			);
			$this->template->load('template', 'admin/create_kenaikan_pegawai', $data);
		} else {
			echo "<script>alert('failed data');";
			echo "<script>window.location='".site_url('kenaikan_pangkat_karyawan')."';</script>";
		}
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['create'])){
			$this->kenaikan_pegawai_m->create($post);
			echo "<script>alert('Data Berhasil Ditambahkan');</script>";
		}
		else if(isset($_POST['edit'])){
			$this->kenaikan_pegawai_m->edit($post);
			echo "<script>alert('Data Berhasil Diedit');</script>";
		}

		//$this->cuti_pegawai_m->create($post);
		if($this->db->affected_rows() > 0){
			echo "<script>window.location='".site_url('kenaikan_pangkat_karyawan')."';</script>";
		}
		
	}

 
	public function delete($id){
		$this->load->model('kenaikan_pegawai_m');

		$item = $this->kenaikan_pegawai_m->get($id)->row();
		// if($item->file_pegawai != null){
		// 	$target_file = './uploads/file_pegawai/'.$item->file_pegawai;
		// 	unlink($target_file);
		// }

		
		$this->kenaikan_pegawai_m->delete($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('kenaikan_pegawai')."';</script>";
	}
	
	// public function download($id){
	// 	if(!empty($id)){
	// 		$this->load->helper('download');
	// 		$fileInfo = $this->cuti_pegawai_m->get($id)->row();
	// 		$file = './uploads/file_pegawai/'.$fileInfo->file_pegawai;
	// 		force_download($file, NULL);
	// 	}
	// }

}
