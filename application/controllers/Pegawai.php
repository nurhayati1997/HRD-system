<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//check_not_login();
		$this->load->model('Pegawai_m');
	}

	public function index()
	{
		// $data["row"] = $this->pegawai_m->get();
		check_not_login();
		//$this->load->model('pegawai_m');
		$data["row"] = $this->Pegawai_m->get();
		$this->template->load('template', 'admin/pegawai', $data);

	}

	public function detail($id){
		//$this->load->model('pegawai_m');
		$detail = $this->Pegawai_m->detail_data($id);
		$data['detail'] = $detail;

		$cuti = $this->Pegawai_m->detail_cuti($id);//Memanggil fungsi riwayat_cuti di model
		$data['cuti'] = $cuti;
		// $this->template->load('template', 'admin/detail_pegawai', $data);

		$riwayat = $this->Pegawai_m->detail_riwayat($id);//Memanggil fungsi riwayat_cuti di model
		$data['riwayat'] = $riwayat;

		$riwayat = $this->Pegawai_m->detail_pangkat($id);//Memanggil fungsi pangkat_cuti di model
		$data['pangkat'] = $riwayat;

		$riwayat = $this->Pegawai_m->detail_arsip($id);//Memanggil fungsi arsip_cuti di model
		$data['arsip'] = $riwayat;
		$this->template->load('template', 'admin/detail_pegawai', $data);
	}

	public function detail_pegawai($id){
		//$this->load->model('pegawai_m');
		$detail = $this->Pegawai_m->detail_data($id);
		$data['detail'] = $detail;

		$cuti = $this->Pegawai_m->detail_cuti($id);//Memanggil fungsi riwayat_cuti di model
		$data['cuti'] = $cuti;
		// $this->template->load('template', 'admin/detail_pegawai', $data);

		$riwayat = $this->Pegawai_m->detail_riwayat($id);//Memanggil fungsi riwayat_cuti di model
		$data['riwayat'] = $riwayat;

		$riwayat = $this->Pegawai_m->detail_pangkat($id);//Memanggil fungsi pangkat_cuti di model
		$data['pangkat'] = $riwayat;

		$riwayat = $this->Pegawai_m->detail_arsip($id);//Memanggil fungsi arsip_cuti di model
		$data['arsip'] = $riwayat;
		$this->load->view('admin/detail_pegawai_user', $data);
	}


	public function create(){
		$pegawai = new stdClass();
		$pegawai-> nip = null;
		$pegawai-> nama = null;
		$pegawai-> nik = null;
		$pegawai-> suku_bangsa = null;
		$pegawai-> alamat = null;
		$pegawai-> provinsi = null;
		$pegawai-> kotakab = null;
		$pegawai-> kecamatan = null;
		$pegawai-> kelurahandesa = null;
		$pegawai-> rtrw = null;
		$pegawai-> kodepos = null;
		$pegawai-> nohp = null;
		$pegawai-> email = null;
		$pegawai-> tempatlahir = null;
		$pegawai-> tgl_lahir = null;
		$pegawai-> jenis_kelamin = null;
		$pegawai-> agama = null;
		$pegawai-> status_pernikahan = null;
		$pegawai-> goldarah = null;
		$pegawai-> pendidikan = null;
		$pegawai-> sd = null;
		$pegawai-> no_ijasah_sd = null;
		$pegawai-> smp = null;
		$pegawai-> no_ijasah_smp = null;
		$pegawai-> sma = null;
		$pegawai-> no_ijasah_sma = null;
		$pegawai-> s1 = null;
		$pegawai-> no_ijasah_s1 = null;
		$pegawai-> s2 = null;
		$pegawai-> no_ijasah_s2 = null;
		$pegawai-> s3 = null;
		$pegawai-> no_ijasah_s3 = null;
		$pegawai-> foto_pegawai = null;
		$pegawai-> unit_kerja = null;
		$pegawai-> jabatan = null;
		$pegawai-> status_pegawai = null;
		$pegawai-> masa_kerja = null;
		$pegawai-> pangkat_terakhir = null;
		$pegawai-> eselon = null;
		$pegawai-> jenis_tenaga = null;
		$pegawai-> jenis_pelayanan = null;
		$pegawai-> gaji = null;
		$pegawai-> no_sip = null;
		$pegawai-> no_str = null;
		$pegawai-> masa_berlaku_sip_str = null;
		$data = array(
			'page'=> 'create',
			'row' => $pegawai
		);
		$this->template->load('template', 'admin/create_pegawai', $data);
	}

	

	public function edit($id)
	{
		// $this->load->model('pegawai_m');
		// $data["row"] = $th is->pegawai_m->get();
		//$this->load->model('pegawai_m');
		$query = $this->Pegawai_m->get($id);
		if($query->num_rows() > 0){
			$pegawai =$query->row();
			$data = array(
				'page' => 'edit',
				'row' => $pegawai
			);
			$this->template->load('template', 'admin/create_pegawai', $data);
		} else {
			echo "<script>alert('failed data');";
			echo "<script>window.location='".site_url('Jenis_karyawan')."';</script>";
		}
	}

	public function proses(){
		$config['upload_path'] = './uploads/foto_pegawai/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		//$config['file_name'] = $this->nip;
		$config['file_name'] = 'foto_pegawai'.date('ymd').'-'.substr(md5(rand()),0,10);
		$config['overwrite'] = true;
		$config['max_size'] = 2048;
		$this->load->library('upload', $config);

		//$this->load->model('pegawai_m');
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['create'])){
			if(@$_FILES['foto_pegawai']['name'] != null) {
				if($this->upload->do_upload('foto_pegawai')) {
					$post['foto_pegawai'] = $this->upload->data('file_name');
					$this->Pegawai_m->create($post);
					if ($this->db->affected_rows() > 0) {
						echo "<script>alert('Data Berhasil Ditambahkan');</script>";
					}
					echo "<script>window.location='".site_url('Jenis_karyawan')."';</script>";
				} else{
					$error = $this->upload->display_errors();
					$this->load->view('create_pegawai', $error);
					//$this->session->set_flashdata('error',$error);
					//redirect('Pegawai/create');
					// echo "<script>alert('failed data');";
					// echo "<script>window.location='".site_url('create_pegawai')."';</script>";
				}
			} else {
				$post['foto_pegawai'] = null;
				$this->Pegawai_m->create($post);
				if ($this->db->affected_rows() > 0) {
					echo "<script>alert('Data Berhasil Ditambahkan Tanpa Foto');</script>";
				}
				echo "<script>window.location='".site_url('Jenis_karyawan')."';</script>";
			}
			// $this->pegawai_m->create($post);
		} else if(isset($_POST['edit'])){
			if(@$_FILES['foto_pegawai']['name'] != null) {
				if($this->upload->do_upload('foto_pegawai')) {
					$item = $this->Pegawai_m->get($post['nip'])->row();
					if($item->foto_pegawai != null){
						$target_file = './uploads/foto_pegawai/'.$item->foto_pegawai;
						unlink($target_file);
					}
					$post['foto_pegawai'] = $this->upload->data('file_name');
					$this->Pegawai_m->edit($post);
					if ($this->db->affected_rows() > 0) {
						echo "<script>alert('Data Berhasil Diubah');</script>";
					}
					echo "<script>window.location='".site_url('Jenis_karyawan')."';</script>";
				} else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error',$error);
					redirect('Pegawai/create');
					// echo "<script>alert('failed data');";
					// echo "<script>window.location='".site_url('create_pegawai')."';</script>";
				}
			} else {
				$post['foto_pegawai'] = null;
				$this->Pegawai_m->edit($post);
				if ($this->db->affected_rows() > 0) {
					echo "<script>alert('Data Berhasil Diubah Tanpa Foto');</script>";
				}
				echo "<script>window.location='".site_url('Jenis_karyawan')."';</script>";
			}
			
			//echo "<script>alert('Data Berhasil Diedit');</script>";
		}
		// return "images,png";
		
	}
 
	public function delete($id){
		//$this->load->model('pegawai_m');

		$item = $this->Pegawai_m->get($id)->row();
		if($item->foto_pegawai != null){
			$target_file = './uploads/foto_pegawai/'.$item->foto_pegawai;
			unlink($target_file);
		}

		
		$this->Pegawai_m->delete($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".base_url('Jenis_karyawan')."';</script>";
	}
	
	public function excel_dokter_umum(){
		$data['row'] = $this->Pegawai_m->get_pegawai('smis_hrd_pegawai')->result();
		
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();
		$object->getProperties()->setCreator("E-DOKAR");
		$object->getProperties()->setLastModifiedBy("KEPEGAWAIAN RSUD SYARABU");
		$object->getProperties()->setTitle("Daftar Pegawai");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1','NO');
		$object->getActiveSheet()->setCellValue('B1','NIP');
		$object->getActiveSheet()->setCellValue('C1','NAMA');
		$object->getActiveSheet()->setCellValue('D1','NIK');
		$object->getActiveSheet()->setCellValue('E1','SUKU BANGSA');
		$object->getActiveSheet()->setCellValue('F1','ALAMAT');
		$object->getActiveSheet()->setCellValue('G1','PROVINSI');
		$object->getActiveSheet()->setCellValue('H1','KOTA');
		$object->getActiveSheet()->setCellValue('I1','KECAMATAN');
		$object->getActiveSheet()->setCellValue('J1','KELURAHAN');
		$object->getActiveSheet()->setCellValue('K1','RT/RW');
		$object->getActiveSheet()->setCellValue('L1','KODE POS');
		$object->getActiveSheet()->setCellValue('M1','NO HP');
		$object->getActiveSheet()->setCellValue('N1','EMAIL');
		$object->getActiveSheet()->setCellValue('O1','TEMPAT LAHIR');
		$object->getActiveSheet()->setCellValue('P1','TANGGAL LAHIR');
		$object->getActiveSheet()->setCellValue('Q1','JENIS KELAMIN');
		$object->getActiveSheet()->setCellValue('R1','AGAMA');
		$object->getActiveSheet()->setCellValue('S1','STATUS PERNIKAHAN');
		$object->getActiveSheet()->setCellValue('T1','GOLONGAN DARAH');
		$object->getActiveSheet()->setCellValue('U1','PENDIDIKAN');
		$object->getActiveSheet()->setCellValue('V1','SD');
		$object->getActiveSheet()->setCellValue('W1','NO IJAZAH SD');
		$object->getActiveSheet()->setCellValue('X1','SMP');
		$object->getActiveSheet()->setCellValue('Y1','NO IJAZAH SMP');
		$object->getActiveSheet()->setCellValue('Z1','SMA');
		$object->getActiveSheet()->setCellValue('AA1','NO IJAZAH SMA');
		$object->getActiveSheet()->setCellValue('AB1','S1');
		$object->getActiveSheet()->setCellValue('AC1','NO IJAZAH S1');
		$object->getActiveSheet()->setCellValue('AD1','S2');
		$object->getActiveSheet()->setCellValue('AE1','NO IJAZAH S2');
		$object->getActiveSheet()->setCellValue('AF1','S3');
		$object->getActiveSheet()->setCellValue('AG1','NO IJAZAH S3');
		$object->getActiveSheet()->setCellValue('AH1','UNIT KERJA');
		$object->getActiveSheet()->setCellValue('AI1','JABATAN');
		$object->getActiveSheet()->setCellValue('AJ1','STATUS PEGAWAI');
		$object->getActiveSheet()->setCellValue('AK1','MASA KERJA');
		$object->getActiveSheet()->setCellValue('AL1','PANGKAT TERAKHIR');
		$object->getActiveSheet()->setCellValue('AM1','ESELON');
		$object->getActiveSheet()->setCellValue('AN1','JENIS TENAGA');
		$object->getActiveSheet()->setCellValue('AO1','JENIS PELAYANAN');
		$object->getActiveSheet()->setCellValue('AP1','GAJI');
		$object->getActiveSheet()->setCellValue('AQ1','NO SIP');
		$object->getActiveSheet()->setCellValue('AR1','NO STR');
		$object->getActiveSheet()->setCellValue('AS1','MASA BERLAKU');
		$object->getActiveSheet()->setCellValue('AT1','NOTIFIKASI MASA BERLAKU');

		$baris= 2;
		$no = 1;

		foreach($data['row'] as $du){
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $du->nip);
			$object->getActiveSheet()->setCellValue('C'.$baris, $du->nama);
			$object->getActiveSheet()->setCellValue('D'.$baris, $du->nik);
			$object->getActiveSheet()->setCellValue('E'.$baris, $du->suku_bangsa);
			$object->getActiveSheet()->setCellValue('F'.$baris, $du->alamat);
			$object->getActiveSheet()->setCellValue('G'.$baris, $du->provinsi);
			$object->getActiveSheet()->setCellValue('H'.$baris, $du->kotakab);
			$object->getActiveSheet()->setCellValue('I'.$baris, $du->kecamatan);
			$object->getActiveSheet()->setCellValue('J'.$baris, $du->kelurahandesa);
			$object->getActiveSheet()->setCellValue('K'.$baris, $du->rtrw);
			$object->getActiveSheet()->setCellValue('L'.$baris, $du->kodepos);
			$object->getActiveSheet()->setCellValue('M'.$baris, $du->nohp);
			$object->getActiveSheet()->setCellValue('N'.$baris, $du->email);
			$object->getActiveSheet()->setCellValue('O'.$baris, $du->tempatlahir);
			$object->getActiveSheet()->setCellValue('P'.$baris, $du->tgl_lahir);
			$object->getActiveSheet()->setCellValue('Q'.$baris, $du->jenis_kelamin);
			$object->getActiveSheet()->setCellValue('R'.$baris, $du->agama);
			$object->getActiveSheet()->setCellValue('S'.$baris, $du->status_pernikahan);
			$object->getActiveSheet()->setCellValue('T'.$baris, $du->goldarah);
			$object->getActiveSheet()->setCellValue('U'.$baris, $du->pendidikan);
			$object->getActiveSheet()->setCellValue('V'.$baris, $du->sd);
			$object->getActiveSheet()->setCellValue('W'.$baris, $du->no_ijasah_sd);
			$object->getActiveSheet()->setCellValue('X'.$baris, $du->smp);
			$object->getActiveSheet()->setCellValue('Y'.$baris, $du->no_ijasah_smp);
			$object->getActiveSheet()->setCellValue('Z'.$baris, $du->sma);
			$object->getActiveSheet()->setCellValue('AA'.$baris, $du->no_ijasah_sma);
			$object->getActiveSheet()->setCellValue('AB'.$baris, $du->s1);
			$object->getActiveSheet()->setCellValue('AC'.$baris, $du->no_ijasah_s1);
			$object->getActiveSheet()->setCellValue('AD'.$baris, $du->s2);
			$object->getActiveSheet()->setCellValue('AE'.$baris, $du->no_ijasah_s2);
			$object->getActiveSheet()->setCellValue('AF'.$baris, $du->s3);
			$object->getActiveSheet()->setCellValue('AG'.$baris, $du->no_ijasah_s3);
			$object->getActiveSheet()->setCellValue('AH'.$baris, $du->unit_kerja);
			$object->getActiveSheet()->setCellValue('AI'.$baris, $du->jabatan);
			$object->getActiveSheet()->setCellValue('AJ'.$baris, $du->status_pegawai);
			$object->getActiveSheet()->setCellValue('AK'.$baris, $du->masa_kerja);
			$object->getActiveSheet()->setCellValue('AL'.$baris, $du->pangkat_terakhir);
			$object->getActiveSheet()->setCellValue('AM'.$baris, $du->eselon);
			$object->getActiveSheet()->setCellValue('AN'.$baris, $du->jenis_tenaga);
			$object->getActiveSheet()->setCellValue('AO'.$baris, $du->jenis_pelayanan);
			$object->getActiveSheet()->setCellValue('AP'.$baris, $du->gaji);
			$object->getActiveSheet()->setCellValue('AQ'.$baris, $du->no_sip);
			$object->getActiveSheet()->setCellValue('AR'.$baris, $du->no_str);
			$object->getActiveSheet()->setCellValue('AS'.$baris, $du->masa_berlaku_sip_str);
			$object->getActiveSheet()->setCellValue('AT'.$baris, $du->notifikasi_masa_berlaku);

			$baris++;
		}

		$filename="Data_Pegawai".'.xlsx';
		$object->getActiveSheet()->setTitle("Daftar Pegawai Dokter Umum");
		
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createWriter($object,'Excel2007');
		$writer->save('php://output');

		exit;
	}

	// public function pdf_dokter_umum(){
	// 	$this->load->library('dompdf_gen');

	// 	$data['row'] = $this->pegawai_m->get_dokter_umum('smis_hrd_pegawai')->result();

	// 	$this->load->view('data_pegawai',$data);

	// 	$paper_size = 'A4';
	// 	$orientation = 'landscape';
	// 	$html = $this->output->get_output();
	// 	$this->dompdf->set_paper($paper_size, $orientation);

	// 	$this->dompdf->load_html($html);
	// 	$this->dompdf->render();
	// 	$this->dompdf->stream("data_dokter_umum.pdf", array('Attachment' =>0));
	// }

}
