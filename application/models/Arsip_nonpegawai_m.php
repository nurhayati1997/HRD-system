<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip_nonpegawai_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('smis_hrd_file_nonpegawai');
		if($id !=null) {
            $this->db->where('file_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function dokter_umum_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_file_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter umum');

        $query =$this->db->get();
        return $query;
    }
    public function dokter_gigi_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_file_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter gigi.');

        $query =$this->db->get();
        return $query;
    }
    public function dokter_spesialis_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_file_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter spesialis');

        $query =$this->db->get();
        return $query;
    }
    public function dokter_gigi_spesialis_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_file_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter gigi spesialis');

        $query =$this->db->get();
        return $query;
    }
    public function dokter_sub_spesialis_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_file_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter sub.spesialis');

        $query =$this->db->get();
        return $query;
    }

   

    public function perawat_thl(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_file_nonpegawai.nik');
        $this->db->like('status_karyawan','thl');
        $this->db->like('jenis_tenaga','keperawatan');

        $query =$this->db->get();
        return $query;
    }
    public function perawat_p3k(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_file_nonpegawai.nik');
        $this->db->like('status_karyawan','p3k');
        $this->db->like('jenis_tenaga','keperawatan');

        $query =$this->db->get();
        return $query;
    }
    public function perawat_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_file_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','keperawatan');

        $query =$this->db->get();
        return $query;
    }
    public function nakes_thl(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_file_nonpegawai.nik');
        $this->db->like('status_karyawan','thl');
        $this->db->like('jenis_tenaga','nakes lainnya');

        $query =$this->db->get();
        return $query;
    }
    public function nakes_p3k(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_file_nonpegawai.nik');
        $this->db->like('status_karyawan','p3k');
        $this->db->like('jenis_tenaga','nakes lainnya');

        $query =$this->db->get();
        return $query;
    }
    public function nakes_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_file_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','nakes lainnya');

        $query =$this->db->get();
        return $query;
    }

    
    public function manajemen_thl(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_file_nonpegawai.nik');
        $this->db->like('status_karyawan','thl');
        $this->db->like('jenis_tenaga','manajemen');

        $query =$this->db->get();
        return $query;
    }

    public function manajemen_p3k(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_file_nonpegawai.nik');
        $this->db->like('status_karyawan','p3k');
        $this->db->like('jenis_tenaga','manajemen');

        $query =$this->db->get();
        return $query;
    }
    public function manajemen_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_nonpegawai');
        $this->db->join('smis_hrd_nonpegawai','smis_hrd_nonpegawai.nik=smis_hrd_file_nonpegawai.nik');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','manajemen');

        $query =$this->db->get();
        return $query;
    }

    public function create($post)
    {
        $params = [
            'nik'=>$post['nik'],
            'nama_file'=>$post['nama_file'],
            'file_nonpegawai'=>empty($post['file_nonpegawai']) ? null : $post ['file_nonpegawai'],
        ];
        $this->db->insert('smis_hrd_file_nonpegawai', $params);
    }

    public function edit($post)
    {
        $params = [
            //'file_id'=>$post['file_id'],
            'nik'=>$post['nik'],
            'nama_file'=>$post['nama_file'],
        ];
        if ($post['file_nonpegawai'] != null){
            $params['file_nonpegawai'] = $post['file_nonpegawai'];
        }
        
        $this->db->where('file_id', $post['id']);
        $this->db->update('smis_hrd_file_nonpegawai', $params);
    }

    public function delete($id)
    {
        $this->db->where('file_id', $id);
        $this->db->delete('smis_hrd_file_nonpegawai');
    }

}
