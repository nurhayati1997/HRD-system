<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip_nonpegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model(['Arsip_nonpegawai_m','Nonpegawai_m']);
	}

	public function index()
	{
		// $data["row"] = $this->nonpegawai_m->get();
		check_not_login();
		//$this->load->model('arsip_nonpegawai_m');
		$data["row"] = $this->Arsip_nonpegawai_m->get();
		$this->template->load('template', 'admin/arsip_nonpegawai', $data);
	}


	// public function detail($id){
	// 	$this->load->model('nonpegawai_m');
	// 	$detail = $this->nonpegawai_m->get_file($id);
	// 	$data['detail'] = $detail;
	// 	$this->template->load('template', 'admin/detail_nonpegawai', $data);
	// }

	public function create(){
		$arsip_nonpegawai = new stdClass();
		$arsip_nonpegawai-> file_id = null;
		$arsip_nonpegawai-> nama_file = null;
		$arsip_nonpegawai-> file_nonpegawai = null;

		$nik = $this->Nonpegawai_m->get();
		$data = array(
			'page'=> 'create',
			'row' => $arsip_nonpegawai,
			'nik' => $nik,
		);
		$this->template->load('template', 'admin/create_arsip_nonpegawai', $data);
	}

	public function edit($id)
	{
		// $this->load->model('nonpegawai_m');
		// $data["row"] = $th is->nonpegawai_m->get();
		$this->load->model('arsip_nonpegawai_m');
		$query = $this->arsip_nonpegawai_m->get($id);
		if($query->num_rows() > 0){
			//$item = $query->row();
			$arsip_nonpegawai =$query->row();
			
			$nik = $this->nonpegawai_m->get();

			$data = array(
				'page' => 'edit',
				'row' => $arsip_nonpegawai,
				'nik' => $nik,
			);
			$this->template->load('template', 'admin/create_arsip_nonpegawai', $data);
		} else {
			echo "<script>alert('failed data');";
			echo "<script>window.location='".site_url('Arsip_nonpegawai')."';</script>";
		}
	}

	public function proses(){
		//$this->nama_file = $post['nama_file'];
		$config['upload_path'] = './uploads/file_nonpegawai/';
        $config['allowed_types'] = 'pdf';
		$config['max_size'] = 2048;
		// $config['file_name'] = 'nonpegawai-'.date('ymd');
		$config['file_name'] = 'nonpegawai_'.date('ymd').'_'.$_FILES['file_nonpegawai']['name'].'-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);

		//$this->load->model('arsip_nonpegawai_m');
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['create'])){
			if(@$_FILES['file_nonpegawai']['name'] != null) {
				if($this->upload->do_upload('file_nonpegawai')) {
					$post['file_nonpegawai'] = $this->upload->data('file_name');
					$this->arsip_nonpegawai_m->create($post);
					if ($this->db->affected_rows() > 0) {
						echo "<script>alert('Data Berhasil Ditambahkan');</script>";
					}
					echo "<script>window.location='".site_url('Arsip_karyawan')."';</script>";
				} else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error',$error);
					redirect('Arsip_nonpegawai/create');
					// echo "<script>alert('failed data');";
					// echo "<script>window.location='".site_url('create_nonpegawai')."';</script>";
				}
			} else {
				$post['file_nonpegawai'] = null;
				$this->arsip_nonpegawai_m->create($post);
				if ($this->db->affected_rows() > 0) {
					echo "<script>alert('Data Berhasil Ditambahkan Tanpa file');</script>";
				}
				echo "<script>window.location='".site_url('Arsip_karyawan')."';</script>";
			}
			// $this->nonpegawai_m->create($post);
		} else if(isset($_POST['edit'])){
			if(@$_FILES['file_nonpegawai']['name'] != null) {
				if($this->upload->do_upload('file_nonpegawai')) {
					$item = $this->Arsip_nonpegawai_m->get($post['id'])->row();
					if($item->file_nonpegawai != null){
						$target_file = './uploads/file_nonpegawai/'.$item->file_nonpegawai;
						unlink($target_file);
					}
					$post['file_nonpegawai'] = $this->upload->data('file_name');
					$this->Arsip_nonpegawai_m->edit($post);
					if ($this->db->affected_rows() > 0) {
						echo "<script>alert('Data Berhasil Diubah');</script>";
					}
					echo "<script>window.location='".site_url('Arsip_karyawan')."';</script>";
				} else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error',$error);
					//redirect('arsip_nonpegawai/create');
					// echo "<script>alert('failed data');";
					// echo "<script>window.location='".site_url('create_nonpegawai')."';</script>";
				}
			} else {
				$post['file_nonpegawai'] = null;
				$this->arsip_nonpegawai_m->edit($post);
				if ($this->db->affected_rows() > 0) {
					echo "<script>alert('Data Berhasil Diubah Tanpa file');</script>";
				}
				echo "<script>window.location='".site_url('Arsip_karyawan')."';</script>";
			}
			
			//echo "<script>alert('Data Berhasil Diedit');</script>";
		}

		
	}

 
	public function delete($id){
		//$this->load->model('arsip_nonpegawai_m');

		$item = $this->Arsip_nonpegawai_m->get($id)->row();
		if($item->file_nonpegawai != null){
			$target_file = './uploads/file_nonpegawai/'.$item->file_nonpegawai;
			unlink($target_file);
		}

		
		$this->Arsip_nonpegawai_m->delete($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('Arsip_nonpegawai')."';</script>";
	}
	
	public function download($id){
		if(!empty($id)){
			$this->load->helper('download');
			$fileInfo = $this->Arsip_nonpegawai_m->get($id)->row();
			$file = './uploads/file_nonpegawai/'.$fileInfo->file_nonpegawai;
			force_download($file, NULL);
		}
	}

}
