<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip_pegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model(['arsip_pegawai_m','pegawai_m']);
	}

	public function index()
	{
		// $data["row"] = $this->pegawai_m->get();
		check_not_login();
		$this->load->model('arsip_pegawai_m');
		$data["row"] = $this->arsip_pegawai_m->get();
		$this->template->load('template', 'admin/arsip_pegawai', $data);
	}


	// public function detail($id){
	// 	$this->load->model('pegawai_m');
	// 	$detail = $this->pegawai_m->get_file($id);
	// 	$data['detail'] = $detail;
	// 	$this->template->load('template', 'admin/detail_pegawai', $data);
	// }

	public function create(){
		$arsip_pegawai = new stdClass();
		$arsip_pegawai-> file_id = null;
		$arsip_pegawai-> nama_file = null;
		$arsip_pegawai-> file_pegawai = null;

		$nip = $this->pegawai_m->get();
		$data = array(
			'page'=> 'create',
			'row' => $arsip_pegawai,
			'nip' => $nip,
		);
		$this->template->load('template', 'admin/create_arsip_pegawai', $data);
	}

	public function edit($id)
	{
		// $this->load->model('pegawai_m');
		// $data["row"] = $th is->pegawai_m->get();
		$this->load->model('arsip_pegawai_m');
		$query = $this->arsip_pegawai_m->get($id);
		if($query->num_rows() > 0){
			//$item = $query->row();
			$arsip_pegawai =$query->row();
			
			$nip = $this->pegawai_m->get();

			$data = array(
				'page' => 'edit',
				'row' => $arsip_pegawai,
				'nip' => $nip,
			);
			$this->template->load('template', 'admin/create_arsip_pegawai', $data);
		} else {
			echo "<script>alert('failed data');";
			echo "<script>window.location='".site_url('arsip_pegawai')."';</script>";
		}
	}

	public function proses(){
		//$this->nama_file = $post['nama_file'];
		$config['upload_path'] = './uploads/file_pegawai/';
        $config['allowed_types'] = 'pdf';
		$config['max_size'] = 2048;
		// $config['file_name'] = 'pegawai-'.date('ymd');
		$config['file_name'] = 'pegawai_'.date('ymd').'_'.$_FILES['file_pegawai']['name'].'-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);

		$this->load->model('arsip_pegawai_m');
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['create'])){
			if(@$_FILES['file_pegawai']['name'] != null) {
				if($this->upload->do_upload('file_pegawai')) {
					$post['file_pegawai'] = $this->upload->data('file_name');
					$this->arsip_pegawai_m->create($post);
					if ($this->db->affected_rows() > 0) {
						echo "<script>alert('Data Berhasil Ditambahkan');</script>";
					}
					echo "<script>window.location='".site_url('arsip_karyawan')."';</script>";
				} else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error',$error);
					redirect('arsip_pegawai/create');
					// echo "<script>alert('failed data');";
					// echo "<script>window.location='".site_url('create_pegawai')."';</script>";
				}
			} else {
				$post['file_pegawai'] = null;
				$this->arsip_pegawai_m->create($post);
				if ($this->db->affected_rows() > 0) {
					echo "<script>alert('Data Berhasil Ditambahkan Tanpa file');</script>";
				}
				echo "<script>window.location='".site_url('arsip_karyawan')."';</script>";
			}
			// $this->pegawai_m->create($post);
		} else if(isset($_POST['edit'])){
			if(@$_FILES['file_pegawai']['name'] != null) {
				if($this->upload->do_upload('file_pegawai')) {
					$item = $this->arsip_pegawai_m->get($post['id'])->row();
					if($item->file_pegawai != null){
						$target_file = './uploads/file_pegawai/'.$item->file_pegawai;
						unlink($target_file);
					}
					$post['file_pegawai'] = $this->upload->data('file_name');
					$this->arsip_pegawai_m->edit($post);
					if ($this->db->affected_rows() > 0) {
						echo "<script>alert('Data Berhasil Diubah');</script>";
					}
					echo "<script>window.location='".site_url('arsip_karyawan')."';</script>";
				} else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error',$error);
					//redirect('arsip_pegawai/create');
					// echo "<script>alert('failed data');";
					// echo "<script>window.location='".site_url('create_pegawai')."';</script>";
				}
			} else {
				$post['file_pegawai'] = null;
				$this->arsip_pegawai_m->edit($post);
				if ($this->db->affected_rows() > 0) {
					echo "<script>alert('Data Berhasil Diubah Tanpa file');</script>";
				}
				echo "<script>window.location='".site_url('arsip_karyawan')."';</script>";
			}
			
			//echo "<script>alert('Data Berhasil Diedit');</script>";
		}

		
	}

 
	public function delete($id){
		$this->load->model('arsip_pegawai_m');

		$item = $this->arsip_pegawai_m->get($id)->row();
		if($item->file_pegawai != null){
			$target_file = './uploads/file_pegawai/'.$item->file_pegawai;
			unlink($target_file);
		}

		
		$this->arsip_pegawai_m->delete($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('arsip_pegawai')."';</script>";
	}
	
	public function download($id){
		if(!empty($id)){
			$this->load->helper('download');
			$fileInfo = $this->arsip_pegawai_m->get($id)->row();
			$file = './uploads/file_pegawai/'.$fileInfo->file_pegawai;
			force_download($file, NULL);
		}
	}

}
