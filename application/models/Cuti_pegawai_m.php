<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti_pegawai_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('smis_hrd_cuti_pegawai');
		if($id !=null) {
            $this->db->where('cuti_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

	public function dokter_umum() {
		$this->db->select('*');
        $this->db->from('smis_hrd_cuti_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_cuti_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter umum');
        $query = $this->db->get();
        return $query;
    }

	public function dokter_gigi() {
		$this->db->select('*');
        $this->db->from('smis_hrd_cuti_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_cuti_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter gigi.');
        $query = $this->db->get();
        return $query;
    }
    
	public function dokter_spesialis() {
		$this->db->select('*');
        $this->db->from('smis_hrd_cuti_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_cuti_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter spesialis');
        $query = $this->db->get();
        return $query;
    }

	public function dokter_gigi_spesialis() {
		$this->db->select('*');
        $this->db->from('smis_hrd_cuti_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_cuti_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter gigi spesialis');
        $query = $this->db->get();
        return $query;
    }

	public function dokter_sub_spesialis() {
		$this->db->select('*');
        $this->db->from('smis_hrd_cuti_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_cuti_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter sub.spesialis');
        $query = $this->db->get();
        return $query;
    }

    public function perawat() {
		$this->db->select('*');
        $this->db->from('smis_hrd_cuti_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_cuti_pegawai.nip');
        $this->db->like('jenis_tenaga','keperawatan');
        $query = $this->db->get();
        return $query;
    }

    public function nakes() {
		$this->db->select('*');
        $this->db->from('smis_hrd_cuti_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_cuti_pegawai.nip');
        $this->db->like('jenis_tenaga','nakes lainnya');
        $query = $this->db->get();
        return $query;
    }

    public function manajemen() {
		$this->db->select('*');
        $this->db->from('smis_hrd_cuti_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_cuti_pegawai.nip');
        $this->db->like('jenis_tenaga','manajemen');
        $query = $this->db->get();
        return $query;
    }
    
    public function create($post)
    {
        $params = [
            'nip'=>$post['nip'],
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
        $this->db->insert('smis_hrd_cuti_pegawai', $params);
    }

    public function edit($post)
    {
        $params = [
            'nip'=>$post['nip'],
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
        // if ($post['file_pegawai'] != null){
        //     $params['file_pegawai'] = $post['file_pegawai'];
        // }
        
        $this->db->where('cuti_id', $post['id']);
        $this->db->update('smis_hrd_cuti_pegawai', $params);
    }

    public function delete($id)
    {
        $this->db->where('kenaikan_fungsionalitas_id', $id);
        $this->db->delete('smis_hrd_kenaikan_fungsionalitas_pegawai');
    }

}
