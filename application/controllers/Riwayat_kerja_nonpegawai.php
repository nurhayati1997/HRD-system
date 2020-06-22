<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_kerja_nonpegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model(['riwayat_kerja_nonpegawai_m','nonpegawai_m']);
	}

	public function index()
	{
		// $data["row"] = $this->nonpegawai_m->get();
		check_not_login();
		$this->load->model('riwayat_kerja_nonpegawai_m');
		$data["row"] = $this->riwayat_kerja_nonpegawai_m->join_dua();
		$this->template->load('template', 'admin/riwayat_kerja_nonpegawai', $data);
	}


	// public function detail($id){
	// 	$this->load->model('nonpegawai_m');
	// 	$detail = $this->nonpegawai_m->get_file($id);
	// 	$data['detail'] = $detail;
	// 	$this->template->load('template', 'admin/detail_nonpegawai', $data);
	// }

	public function create(){
		$riwayat_kerja_nonpegawai = new stdClass();
		$riwayat_kerja_nonpegawai-> riwayat_kerja_id = null;
		$riwayat_kerja_nonpegawai-> nama_ruangan = null;
		$riwayat_kerja_nonpegawai-> no_sk = null;
		$riwayat_kerja_nonpegawai-> tanggal_pindah = null;
		$riwayat_kerja_nonpegawai-> nama_pemimpin = null;
		$riwayat_kerja_nonpegawai-> tahun = null;

		$this->load->model('nonpegawai_m');
		$nik = $this->nonpegawai_m->get();
		$data = array(
			'page'=> 'create',
			'row' => $riwayat_kerja_nonpegawai,
			'nik' => $nik,
		);
		$this->template->load('template', 'admin/create_riwayat_kerja_nonpegawai', $data);
	}

	public function edit($id)
	{
		// $this->load->model('nonpegawai_m');
		// $data["row"] = $th is->nonpegawai_m->get();
		$this->load->model('riwayat_kerja_nonpegawai_m');
		$query = $this->riwayat_kerja_nonpegawai_m->get($id);
		if($query->num_rows() > 0){
			//$item = $query->row();
			$riwayat_kerja_nonpegawai =$query->row();
			
			$nik = $this->nonpegawai_m->get();

			$data = array(
				'page' => 'edit',
				'row' => $riwayat_kerja_nonpegawai,
				'nik' => $nik,
			);
			$this->template->load('template', 'admin/create_riwayat_kerja_nonpegawai', $data);
		} else {
			echo "<script>alert('failed data');";
			echo "<script>window.location='".site_url('riwayat_kerja_nonpegawai')."';</script>";
		}
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['create'])){
			$this->riwayat_kerja_nonpegawai_m->create($post);
			echo "<script>alert('Data Berhasil Ditambahkan');</script>";
		}
		else if(isset($_POST['edit'])){
			$this->riwayat_kerja_nonpegawai_m->edit($post);
			echo "<script>alert('Data Berhasil Diedit');</script>";
		}

		//$this->cuti_nonpegawai_m->create($post);
		if($this->db->affected_rows() > 0){
			echo "<script>window.location='".site_url('riwayat_kerja_karyawan')."';</script>";
		}
		
	}

 
	public function delete($id){
		$this->load->model('riwayat_kerja_nonpegawai_m');

		$item = $this->riwayat_kerja_nonpegawai_m->get($id)->row();
		// if($item->file_nonpegawai != null){
		// 	$target_file = './uploads/file_nonpegawai/'.$item->file_nonpegawai;
		// 	unlink($target_file);
		// }

		
		$this->riwayat_kerja_nonpegawai_m->delete($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('riwayat_kerja_nonpegawai')."';</script>";
	}
	
	// public function download($id){
	// 	if(!empty($id)){
	// 		$this->load->helper('download');
	// 		$fileInfo = $this->cuti_nonpegawai_m->get($id)->row();
	// 		$file = './uploads/file_nonpegawai/'.$fileInfo->file_nonpegawai;
	// 		force_download($file, NULL);
	// 	}
	// }

}
