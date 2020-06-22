<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nonpegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model('nonpegawai_m');
	}

	public function index()
	{
		// $data["row"] = $this->nonpegawai_m->get();
		check_not_login();
		$this->load->model('nonpegawai_m');
		$data["row"] = $this->nonpegawai_m->get();
		$this->template->load('template', 'admin/nonpegawai', $data);

	}

	public function detail($id){
		$this->load->model('nonpegawai_m');
		$detail = $this->nonpegawai_m->detail_data($id);
		$data['detail'] = $detail;

		$cuti = $this->nonpegawai_m->detail_cuti($id);//Memanggil fungsi riwayat_cuti di model
		$data['cuti'] = $cuti;
		// $this->template->load('template', 'admin/detail_nonpegawai', $data);

		$riwayat = $this->nonpegawai_m->detail_riwayat($id);//Memanggil fungsi riwayat_cuti di model
		$data['riwayat'] = $riwayat;

		// $riwayat = $this->nonpegawai_m->detail_pangkat($id);//Memanggil fungsi pangkat_cuti di model
		// $data['pangkat'] = $riwayat;

		$riwayat = $this->nonpegawai_m->detail_arsip($id);//Memanggil fungsi arsip_cuti di model
		$data['arsip'] = $riwayat;
		$this->template->load('template', 'admin/detail_nonpegawai', $data);
	}


	public function create(){
		$nonpegawai = new stdClass();
		$nonpegawai-> nama = null;
		$nonpegawai-> status_karyawan = null;
		$nonpegawai-> nik = null;
		$nonpegawai-> suku_bangsa = null;
		$nonpegawai-> alamat = null;
		$nonpegawai-> provinsi = null;
		$nonpegawai-> kotakab = null;
		$nonpegawai-> kecamatan = null;
		$nonpegawai-> kelurahandesa = null;
		$nonpegawai-> rtrw = null;
		$nonpegawai-> kodepos = null;
		$nonpegawai-> nohp = null;
		$nonpegawai-> email = null;
		$nonpegawai-> tempatlahir = null;
		$nonpegawai-> tgl_lahir = null;
		$nonpegawai-> jenis_kelamin = null;
		$nonpegawai-> agama = null;
		$nonpegawai-> status_pernikahan = null;
		$nonpegawai-> goldarah = null;
		$nonpegawai-> pendidikan = null;
		$nonpegawai-> sd = null;
		$nonpegawai-> no_ijasah_sd = null;
		$nonpegawai-> smp = null;
		$nonpegawai-> no_ijasah_smp = null;
		$nonpegawai-> sma = null;
		$nonpegawai-> no_ijasah_sma = null;
		$nonpegawai-> s1 = null;
		$nonpegawai-> no_ijasah_s1 = null;
		$nonpegawai-> s2 = null;
		$nonpegawai-> no_ijasah_s2 = null;
		$nonpegawai-> s3 = null;
		$nonpegawai-> no_ijasah_s3 = null;
		$nonpegawai-> foto_nonpegawai = null;
		$nonpegawai-> unit_kerja = null;
		$nonpegawai-> jabatan = null;
		$nonpegawai-> masa_kerja = null;
		$nonpegawai-> pangkat_terakhir = null;
		$nonpegawai-> jenis_tenaga = null;
		$nonpegawai-> jenis_pelayanan = null;
		$nonpegawai-> gaji = null;
		$nonpegawai-> no_sip = null;
		$nonpegawai-> no_str = null;
		$nonpegawai-> masa_berlaku_sip_str = null;
		$data = array(
			'page'=> 'create',
			'row' => $nonpegawai
		);
		$this->template->load('template', 'admin/create_nonpegawai', $data);
	}

	

	public function edit($id)
	{
		// $this->load->model('nonpegawai_m');
		// $data["row"] = $th is->nonpegawai_m->get();
		$this->load->model('nonpegawai_m');
		$query = $this->nonpegawai_m->get($id);
		if($query->num_rows() > 0){
			$nonpegawai =$query->row();
			$data = array(
				'page' => 'edit',
				'row' => $nonpegawai
			);
			$this->template->load('template', 'admin/create_nonpegawai', $data);
		} else {
			echo "<script>alert('failed data');";
			echo "<script>window.location='".site_url('nonpegawai')."';</script>";
		}
	}

	public function proses(){
		$config['upload_path'] = './uploads/foto_nonpegawai/';
        $config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 2048;
		$config['file_name'] = 'foto_nonpegawai'.date('ymd').'-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);

		$this->load->model('nonpegawai_m');
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['create'])){
			if(@$_FILES['foto_nonpegawai']['name'] != null) {
				if($this->upload->do_upload('foto_nonpegawai')) {
					$post['foto_nonpegawai'] = $this->upload->data('file_name');
					$this->nonpegawai_m->create($post);
					if ($this->db->affected_rows() > 0) {
						echo "<script>alert('Data Berhasil Ditambahkan');</script>";
					}
					echo "<script>window.location='".site_url('jenis_karyawan')."';</script>";
				} else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error',$error);
					redirect('nonpegawai/create');
					// echo "<script>alert('failed data');";
					// echo "<script>window.location='".site_url('create_nonpegawai')."';</script>";
				}
			} else {
				$post['foto_nonpegawai'] = null;
				$this->nonpegawai_m->create($post);
				if ($this->db->affected_rows() > 0) {
					echo "<script>alert('Data Berhasil Ditambahkan Tanpa Foto');</script>";
				}
				echo "<script>window.location='".site_url('jenis_karyawan')."';</script>";
			}
			// $this->nonpegawai_m->create($post);
		} else if(isset($_POST['edit'])){
			if(@$_FILES['foto_nonpegawai']['name'] != null) {
				if($this->upload->do_upload('foto_nonpegawai')) {
					$item = $this->nonpegawai_m->get($post['nik'])->row();
					if($item->foto_nonpegawai != null){
						$target_file = './uploads/foto_nonpegawai/'.$item->foto_nonpegawai;
						unlink($target_file);
					}
					$post['foto_nonpegawai'] = $this->upload->data('file_name');
					$this->nonpegawai_m->edit($post);
					if ($this->db->affected_rows() > 0) {
						echo "<script>alert('Data Berhasil Diubah');</script>";
					}
					echo "<script>window.location='".site_url('jenis_karyawan')."';</script>";
				} else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error',$error);
					redirect('nonpegawai/create');
					// echo "<script>alert('failed data');";
					// echo "<script>window.location='".site_url('create_nonpegawai')."';</script>";
				}
			} else {
				$post['foto_nonpegawai'] = null;
				$this->nonpegawai_m->edit($post);
				if ($this->db->affected_rows() > 0) {
					echo "<script>alert('Data Berhasil Diubah Tanpa Foto');</script>";
				}
				echo "<script>window.location='".site_url('jenis_karyawan')."';</script>";
			}
			
			//echo "<script>alert('Data Berhasil Diedit');</script>";
		}

		
	}
 
	public function delete($id){
		$this->load->model('nonpegawai_m');

		$item = $this->nonpegawai_m->get($id)->row();
		if($item->foto_nonpegawai != null){
			$target_file = './uploads/foto_nonpegawai/'.$item->foto_nonpegawai;
			unlink($target_file);
		}

		
		$this->nonpegawai_m->delete($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('jenis_karyawan')."';</script>";
	}
	
	public function excel(){
		$data['row'] = $this->nonpegawai_m->get_nonpegawai('smis_hrd_nonpegawai')->result();
		
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();
		$object->getProperties()->setCreator("E-DOKAR");
		$object->getProperties()->setLastModifiedBy("KEPEGAWAIAN RSUD SYARABU");
		$object->getProperties()->setTitle("Daftar NonPegawai");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1','NO');
		$object->getActiveSheet()->setCellValue('B1','NIK');
		$object->getActiveSheet()->setCellValue('C1','NAMA');
		$object->getActiveSheet()->setCellValue('D1','SUKU BANGSA');
		$object->getActiveSheet()->setCellValue('E1','ALAMAT');
		$object->getActiveSheet()->setCellValue('F1','PROVINSI');
		$object->getActiveSheet()->setCellValue('G1','KOTA');
		$object->getActiveSheet()->setCellValue('H1','KECAMATAN');
		$object->getActiveSheet()->setCellValue('I1','KELURAHAN');
		$object->getActiveSheet()->setCellValue('J1','RT/RW');
		$object->getActiveSheet()->setCellValue('K1','KODE POS');
		$object->getActiveSheet()->setCellValue('L1','NO HP');
		$object->getActiveSheet()->setCellValue('M1','EMAIL');
		$object->getActiveSheet()->setCellValue('N1','TEMPAT LAHIR');
		$object->getActiveSheet()->setCellValue('O1','TANGGAL LAHIR');
		$object->getActiveSheet()->setCellValue('P1','JENIS KELAMIN');
		$object->getActiveSheet()->setCellValue('Q1','AGAMA');
		$object->getActiveSheet()->setCellValue('R1','STATUS PERNIKAHAN');
		$object->getActiveSheet()->setCellValue('S1','GOLONGAN DARAH');
		$object->getActiveSheet()->setCellValue('T1','PENDIDIKAN');
		$object->getActiveSheet()->setCellValue('U1','SD');
		$object->getActiveSheet()->setCellValue('V1','NO IJAZAH SD');
		$object->getActiveSheet()->setCellValue('W1','SMP');
		$object->getActiveSheet()->setCellValue('X1','NO IJAZAH SMP');
		$object->getActiveSheet()->setCellValue('Y1','SMA');
		$object->getActiveSheet()->setCellValue('Z1','NO IJAZAH SMA');
		$object->getActiveSheet()->setCellValue('AA1','S1');
		$object->getActiveSheet()->setCellValue('AB1','NO IJAZAH S1');
		$object->getActiveSheet()->setCellValue('AC1','S2');
		$object->getActiveSheet()->setCellValue('AD1','NO IJAZAH S2');
		$object->getActiveSheet()->setCellValue('AE1','S3');
		$object->getActiveSheet()->setCellValue('AF1','NO IJAZAH S3');
		$object->getActiveSheet()->setCellValue('AG1','UNIT KERJA');
		$object->getActiveSheet()->setCellValue('AH1','JABATAN');
		$object->getActiveSheet()->setCellValue('AI1','MASA KERJA');
		$object->getActiveSheet()->setCellValue('AJ1','PANGKAT TERAKHIR');
		$object->getActiveSheet()->setCellValue('AK1','JENIS TENAGA');
		$object->getActiveSheet()->setCellValue('AL1','JENIS PELAYANAN');
		$object->getActiveSheet()->setCellValue('AM1','GAJI');
		$object->getActiveSheet()->setCellValue('AN1','NO SIP');
		$object->getActiveSheet()->setCellValue('AO1','NO STR');
		$object->getActiveSheet()->setCellValue('AP1','MASA BERLAKU');
		$object->getActiveSheet()->setCellValue('AQ1','NOTIFIKASI MASA BERLAKU');

		$baris= 2;
		$no = 1;

		foreach($data['row'] as $du){
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $du->nik);
			$object->getActiveSheet()->setCellValue('C'.$baris, $du->nama);
			$object->getActiveSheet()->setCellValue('D'.$baris, $du->suku_bangsa);
			$object->getActiveSheet()->setCellValue('E'.$baris, $du->alamat);
			$object->getActiveSheet()->setCellValue('F'.$baris, $du->provinsi);
			$object->getActiveSheet()->setCellValue('G'.$baris, $du->kotakab);
			$object->getActiveSheet()->setCellValue('H'.$baris, $du->kecamatan);
			$object->getActiveSheet()->setCellValue('I'.$baris, $du->kelurahandesa);
			$object->getActiveSheet()->setCellValue('J'.$baris, $du->rtrw);
			$object->getActiveSheet()->setCellValue('K'.$baris, $du->kodepos);
			$object->getActiveSheet()->setCellValue('L'.$baris, $du->nohp);
			$object->getActiveSheet()->setCellValue('M'.$baris, $du->email);
			$object->getActiveSheet()->setCellValue('N'.$baris, $du->tempatlahir);
			$object->getActiveSheet()->setCellValue('O'.$baris, $du->tgl_lahir);
			$object->getActiveSheet()->setCellValue('P'.$baris, $du->jenis_kelamin);
			$object->getActiveSheet()->setCellValue('Q'.$baris, $du->agama);
			$object->getActiveSheet()->setCellValue('R'.$baris, $du->status_pernikahan);
			$object->getActiveSheet()->setCellValue('S'.$baris, $du->goldarah);
			$object->getActiveSheet()->setCellValue('T'.$baris, $du->pendidikan);
			$object->getActiveSheet()->setCellValue('U'.$baris, $du->sd);
			$object->getActiveSheet()->setCellValue('V'.$baris, $du->no_ijasah_sd);
			$object->getActiveSheet()->setCellValue('W'.$baris, $du->smp);
			$object->getActiveSheet()->setCellValue('X'.$baris, $du->no_ijasah_smp);
			$object->getActiveSheet()->setCellValue('Y'.$baris, $du->sma);
			$object->getActiveSheet()->setCellValue('Z'.$baris, $du->no_ijasah_sma);
			$object->getActiveSheet()->setCellValue('AA'.$baris, $du->s1);
			$object->getActiveSheet()->setCellValue('AB'.$baris, $du->no_ijasah_s1);
			$object->getActiveSheet()->setCellValue('AC'.$baris, $du->s2);
			$object->getActiveSheet()->setCellValue('AD'.$baris, $du->no_ijasah_s2);
			$object->getActiveSheet()->setCellValue('AE'.$baris, $du->s3);
			$object->getActiveSheet()->setCellValue('AF'.$baris, $du->no_ijasah_s3);
			$object->getActiveSheet()->setCellValue('AG'.$baris, $du->unit_kerja);
			$object->getActiveSheet()->setCellValue('AH'.$baris, $du->jabatan);
			$object->getActiveSheet()->setCellValue('AI'.$baris, $du->masa_kerja);
			$object->getActiveSheet()->setCellValue('AJ'.$baris, $du->pangkat_terakhir);
			$object->getActiveSheet()->setCellValue('AK'.$baris, $du->jenis_tenaga);
			$object->getActiveSheet()->setCellValue('AL'.$baris, $du->jenis_pelayanan);
			$object->getActiveSheet()->setCellValue('AM'.$baris, $du->gaji);
			$object->getActiveSheet()->setCellValue('AN'.$baris, $du->no_sip);
			$object->getActiveSheet()->setCellValue('AO'.$baris, $du->no_str);
			$object->getActiveSheet()->setCellValue('AP'.$baris, $du->masa_berlaku_sip_str);
			$object->getActiveSheet()->setCellValue('AQ'.$baris, $du->notifikasi_masa_berlaku);

			$baris++;
		}

		$filename="Data_Non_Pegawai".'.xlsx';
		$object->getActiveSheet()->setTitle("Daftar Non Pegawai Dokter Umum");
		
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createWriter($object,'Excel2007');
		$writer->save('php://output');

		exit;
	}

}
