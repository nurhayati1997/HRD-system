<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_kerja_pegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model(['riwayat_kerja_pegawai_m','pegawai_m']);
	}

	public function index()
	{
		// $data["row"] = $this->pegawai_m->get();
		check_not_login();
		$this->load->model('riwayat_kerja_pegawai_m');
		$data["row"] = $this->riwayat_kerja_pegawai_m->join_dua();
		$this->template->load('template', 'admin/riwayat_kerja_pegawai', $data);
	}


	// public function detail($id){
	// 	$this->load->model('pegawai_m');
	// 	$detail = $this->pegawai_m->get_file($id);
	// 	$data['detail'] = $detail;
	// 	$this->template->load('template', 'admin/detail_pegawai', $data);
	// }

	public function create(){
		$riwayat_kerja_pegawai = new stdClass();
		$riwayat_kerja_pegawai-> riwayat_kerja_id = null;
		$riwayat_kerja_pegawai-> nama_ruangan = null;
		$riwayat_kerja_pegawai-> no_sk = null;
		$riwayat_kerja_pegawai-> tanggal_pindah = null;
		$riwayat_kerja_pegawai-> nama_pemimpin = null;
		$riwayat_kerja_pegawai-> tahun = null;

		$this->load->model('pegawai_m');
		$nip = $this->pegawai_m->get();
		$data = array(
			'page'=> 'create',
			'row' => $riwayat_kerja_pegawai,
			'nip' => $nip,
		);
		$this->template->load('template', 'admin/create_riwayat_kerja_pegawai', $data);
	}

	public function edit($id)
	{
		// $this->load->model('pegawai_m');
		// $data["row"] = $th is->pegawai_m->get();
		$this->load->model('riwayat_kerja_pegawai_m');
		$query = $this->riwayat_kerja_pegawai_m->get($id);
		if($query->num_rows() > 0){
			//$item = $query->row();
			$riwayat_kerja_pegawai =$query->row();
			
			$nip = $this->pegawai_m->get();

			$data = array(
				'page' => 'edit',
				'row' => $riwayat_kerja_pegawai,
				'nip' => $nip,
			);
			$this->template->load('template', 'admin/create_riwayat_kerja_pegawai', $data);
		} else {
			echo "<script>alert('failed data');";
			echo "<script>window.location='".site_url('riwayat_kerja_pegawai')."';</script>";
		}
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['create'])){
			$this->riwayat_kerja_pegawai_m->create($post);
			echo "<script>alert('Data Berhasil Ditambahkan');</script>";
		}
		else if(isset($_POST['edit'])){
			$this->riwayat_kerja_pegawai_m->edit($post);
			echo "<script>alert('Data Berhasil Diedit');</script>";
		}

		//$this->cuti_pegawai_m->create($post);
		if($this->db->affected_rows() > 0){
			echo "<script>window.location='".site_url('riwayat_kerja_karyawan')."';</script>";
		}
		
	}

 
	public function delete($id){
		$this->load->model('riwayat_kerja_pegawai_m');

		$item = $this->riwayat_kerja_pegawai_m->get($id)->row();
		// if($item->file_pegawai != null){
		// 	$target_file = './uploads/file_pegawai/'.$item->file_pegawai;
		// 	unlink($target_file);
		// }

		
		$this->riwayat_kerja_pegawai_m->delete($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('riwayat_kerja_pegawai')."';</script>";
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
