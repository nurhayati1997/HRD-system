<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti_nonpegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model(['Cuti_nonpegawai_m','Nonpegawai_m']);
	}

	public function index()
	{
		// $data["row"] = $this->nonpegawai_m->get();
		check_not_login();
		//$this->load->model('Cuti_nonpegawai_m');
		$data["row"] = $this->Cuti_nonpegawai_m->join_dua();
		$this->template->load('template', 'admin/cuti_nonpegawai', $data);
	}


	// public function detail($id){
	// 	$this->load->model('nonpegawai_m');
	// 	$detail = $this->nonpegawai_m->get_file($id);
	// 	$data['detail'] = $detail;
	// 	$this->template->load('template', 'admin/detail_nonpegawai', $data);
	// }

	public function create(){
		$cuti_nonpegawai = new stdClass();
		$cuti_nonpegawai-> cuti_id = null;
		$cuti_nonpegawai-> jenis_cuti = null;
		$cuti_nonpegawai-> alasan_cuti = null;
		$cuti_nonpegawai-> lama_cuti = null;
		$cuti_nonpegawai-> mulai_tanggal = null;
		$cuti_nonpegawai-> sampai_tanggal = null;
		$cuti_nonpegawai-> catatan_cuti = null;
		$cuti_nonpegawai-> alamat_cuti = null;
		$cuti_nonpegawai-> pertimbangan_atasan = null;
		$cuti_nonpegawai-> keputusan_berwenang = null;

		//$this->load->model('nonpegawai_m');
		$nik = $this->Nonpegawai_m->get();
		$data = array(
			'page'=> 'create',
			'row' => $cuti_nonpegawai,
			'nik' => $nik,
		);
		$this->template->load('template', 'admin/create_cuti_nonpegawai', $data);
	}

	public function edit($id)
	{
		// $this->load->model('nonpegawai_m');
		// $data["row"] = $th is->nonpegawai_m->get();
		//$this->load->model('Cuti_nonpegawai_m');
		$query = $this->Cuti_nonpegawai_m->get($id);
		if($query->num_rows() > 0){
			//$item = $query->row();
			$cuti_nonpegawai =$query->row();
			
			$nik = $this->Nonpegawai_m->get();

			$data = array(
				'page' => 'edit',
				'row' => $cuti_nonpegawai,
				'nik' => $nik,
			);
			$this->template->load('template', 'admin/create_cuti_nonpegawai', $data);
		} else {
			echo "<script>alert('failed data');";
			echo "<script>window.location='".site_url('cuti_karyawan')."';</script>";
		}
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['create'])){
			$this->Cuti_nonpegawai_m->create($post);
			echo "<script>alert('Data Berhasil Ditambahkan');</script>";
		}
		else if(isset($_POST['edit'])){
			$this->Cuti_nonpegawai_m->edit($post);
			echo "<script>alert('Data Berhasil Diedit');</script>";
		}

		//$this->cuti_nonpegawai_m->create($post);
		if($this->db->affected_rows() > 0){
			echo "<script>window.location='".site_url('cuti_karyawan')."';</script>";
		}
		
	}

 
	public function delete($id){
		//$this->load->model('cuti_nonpegawai_m');

		$item = $this->Cuti_nonpegawai_m->get($id)->row();
		// if($item->file_nonpegawai != null){
		// 	$target_file = './uploads/file_nonpegawai/'.$item->file_nonpegawai;
		// 	unlink($target_file);
		// }

		
		$this->Cuti_nonpegawai_m->delete($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('cuti_karyawan')."';</script>";
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
