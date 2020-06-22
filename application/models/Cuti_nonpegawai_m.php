<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti_nonpegawai_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('smis_hrd_cuti_nonpegawai');
		if($id !=null) {
            $this->db->where('cuti_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

	public function dokter_umum_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_cuti_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_cuti_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter umum');

        $query =$this->db->get();
        return $query;
    }

	public function dokter_gigi_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_cuti_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_cuti_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter gigi.');

        $query =$this->db->get();
        return $query;
    }
    public function dokter_spesialis_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_cuti_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_cuti_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter spesialis');

        $query =$this->db->get();
        return $query;
    }
    public function dokter_gigi_spesialis_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_cuti_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_cuti_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter gigi spesialis');

        $query =$this->db->get();
        return $query;
    }
    public function dokter_sub_spesialis_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_cuti_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_cuti_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter sub.spesialis');

        $query =$this->db->get();
        return $query;
    }

   

    public function perawat_thl(){
        $this->db->select('*');
        $this->db->from('smis_hrd_cuti_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_cuti_nonpegawai.nik');
        $this->db->like('status_karyawan','thl');
        $this->db->like('jenis_tenaga','keperawatan');

        $query =$this->db->get();
        return $query;
    }
    public function perawat_p3k(){
        $this->db->select('*');
        $this->db->from('smis_hrd_cuti_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_cuti_nonpegawai.nik');
        $this->db->like('status_karyawan','p3k');
        $this->db->like('jenis_tenaga','keperawatan');

        $query =$this->db->get();
        return $query;
    }
    public function perawat_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_cuti_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_cuti_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','keperawatan');

        $query =$this->db->get();
        return $query;
    }
    public function nakes_thl(){
        $this->db->select('*');
        $this->db->from('smis_hrd_cuti_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_cuti_nonpegawai.nik');
        $this->db->like('status_karyawan','thl');
        $this->db->like('jenis_tenaga','nakes lainnya');

        $query =$this->db->get();
        return $query;
    }
    public function nakes_p3k(){
        $this->db->select('*');
        $this->db->from('smis_hrd_cuti_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_cuti_nonpegawai.nik');
        $this->db->like('status_karyawan','p3k');
        $this->db->like('jenis_tenaga','nakes lainnya');

        $query =$this->db->get();
        return $query;
    }
    public function nakes_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_cuti_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_cuti_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','nakes lainnya');

        $query =$this->db->get();
        return $query;
    }

    
    public function manajemen_thl(){
        $this->db->select('*');
        $this->db->from('smis_hrd_cuti_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_cuti_nonpegawai.nik');
        $this->db->like('status_karyawan','thl');
        $this->db->like('jenis_tenaga','manajemen');

        $query =$this->db->get();
        return $query;
    }

    public function manajemen_p3k(){
        $this->db->select('*');
        $this->db->from('smis_hrd_cuti_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_cuti_nonpegawai.nik');
        $this->db->like('status_karyawan','p3k');
        $this->db->like('jenis_tenaga','manajemen');

        $query =$this->db->get();
        return $query;
    }
    public function manajemen_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_cuti_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_cuti_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','manajemen');

        $query =$this->db->get();
        return $query;
    }
    
    public function create($post)
    {
        $params = [
            'nik'=>$post['nik'],
            'jenis_cuti'=>$post['jenis_cuti'],
            'alasan_cuti'=>$post['alasan_cuti'],
            'lama_cuti'=>$post['lama_cuti'],
            'mulai_tanggal'=>$post['mulai_tanggal'],
            'sampai_tanggal'=>$post['sampai_tanggal'],
            'catatan_cuti'=>$post['catatan_cuti'],
            'alamat_cuti'=>$post['alamat_cuti'],
            'pertimbangan_atasan'=>$post['pertimbangan_atasan'],
            'keputusan_berwenang'=>$post['keputusan_berwenang'],
           
        ];
        $this->db->insert('smis_hrd_cuti_nonpegawai', $params);
    }

    public function edit($post)
    {
        $params = [
            'nik'=>$post['nik'],
            'jenis_cuti'=>$post['jenis_cuti'],
            'alasan_cuti'=>$post['alasan_cuti'],
            'lama_cuti'=>$post['lama_cuti'],
            'mulai_tanggal'=>$post['mulai_tanggal'],
            'sampai_tanggal'=>$post['sampai_tanggal'],
            'catatan_cuti'=>$post['catatan_cuti'],
            'alamat_cuti'=>$post['alamat_cuti'],
            'pertimbangan_atasan'=>$post['pertimbangan_atasan'],
            'keputusan_berwenang'=>$post['keputusan_berwenang'],
           
        ];
        
        $this->db->where('cuti_id', $post['id']);
        $this->db->update('smis_hrd_cuti_nonpegawai', $params);
    }

    public function delete($id)
    {
        $this->db->where('kenaikan_fungsionalitas_id', $id);
        $this->db->delete('smis_hrd_kenaikan_fungsionalitas_nonpegawai');
    }

}
