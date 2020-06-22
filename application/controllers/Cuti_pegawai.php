<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti_pegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model(['Cuti_pegawai_m','Pegawai_m']);
	}

	public function index()
	{
		// $data["row"] = $this->pegawai_m->get();
		check_not_login();
		//$this->load->model('cuti_pegawai_m');
		$data["row"] = $this->Cuti_pegawai_m->join_dua();
		$this->template->load('template', 'admin/cuti_pegawai', $data);
	}


	// public function detail($id){
	// 	$this->load->model('pegawai_m');
	// 	$detail = $this->pegawai_m->get_file($id);
	// 	$data['detail'] = $detail;
	// 	$this->template->load('template', 'admin/detail_pegawai', $data);
	// }

	public function create(){
		$cuti_pegawai = new stdClass();
		$cuti_pegawai-> cuti_id = null;
		$cuti_pegawai-> jenis_cuti = null;
		$cuti_pegawai-> alasan_cuti = null;
		$cuti_pegawai-> lama_cuti = null;
		$cuti_pegawai-> mulai_tanggal = null;
		$cuti_pegawai-> sampai_tanggal = null;
		$cuti_pegawai-> catatan_cuti = null;
		$cuti_pegawai-> alamat_cuti = null;
		$cuti_pegawai-> pertimbangan_atasan = null;
		$cuti_pegawai-> keputusan_berwenang = null;

		//$this->load->model('pegawai_m');
		$nip = $this->Pegawai_m->get();
		$data = array(
			'page'=> 'create',
			'row' => $cuti_pegawai,
			'nip' => $nip,
		);
		$this->template->load('template', 'admin/create_cuti_pegawai', $data);
	}

	public function edit($id)
	{
		// $this->load->model('pegawai_m');
		// $data["row"] = $th is->pegawai_m->get();
		$this->load->model('cuti_pegawai_m');
		$query = $this->Cuti_pegawai_m->get($id);
		if($query->num_rows() > 0){
			//$item = $query->row();
			$cuti_pegawai =$query->row();
			
			$nip = $this->Pegawai_m->get();

			$data = array(
				'page' => 'edit',
				'row' => $cuti_pegawai,
				'nip' => $nip,
			);
			$this->template->load('template', 'admin/create_cuti_pegawai', $data);
		} else {
			echo "<script>alert('failed data');";
			echo "<script>window.location='".site_url('cuti_karyawan')."';</script>";
		}
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['create'])){
			$this->Cuti_pegawai_m->create($post);
			echo "<script>alert('Data Berhasil Ditambahkan');</script>";
		}
		else if(isset($_POST['edit'])){
			$this->Cuti_pegawai_m->edit($post);
			echo "<script>alert('Data Berhasil Diedit');</script>";
		}

		//$this->cuti_pegawai_m->create($post);
		if($this->db->affected_rows() > 0){
			echo "<script>window.location='".site_url('cuti_karyawan')."';</script>";
		}
		
	}

 
	public function delete($id){
		$this->load->model('Cuti_pegawai_m');

		$item = $this->Cuti_pegawai_m->get($id)->row();
		// if($item->file_pegawai != null){
		// 	$target_file = './uploads/file_pegawai/'.$item->file_pegawai;
		// 	unlink($target_file);
		// }

		
		$this->Cuti_pegawai_m->delete($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('cuti_karyawan')."';</script>";
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
