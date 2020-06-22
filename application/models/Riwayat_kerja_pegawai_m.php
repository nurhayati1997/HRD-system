<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_kerja_pegawai_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('smis_hrd_riwayat_kerja_pegawai');
		if($id !=null) {
            $this->db->where('riwayat_kerja_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function dokter_gigi() {
		$this->db->select('*');
        $this->db->from('smis_hrd_riwayat_kerja_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_riwayat_kerja_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter gigi.');
        $query = $this->db->get();
        return $query;
    }

    public function dokter_spesialis() {
		$this->db->select('*');
        $this->db->from('smis_hrd_riwayat_kerja_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_riwayat_kerja_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter spesialis');
        $query = $this->db->get();
        return $query;
    }

    public function dokter_sub_spesialis() {
		$this->db->select('*');
        $this->db->from('smis_hrd_riwayat_kerja_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_riwayat_kerja_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter sub.spesialis');
        $query = $this->db->get();
        return $query;
    }

    public function perawat() {
		$this->db->select('*');
        $this->db->from('smis_hrd_riwayat_kerja_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_riwayat_kerja_pegawai.nip');
        $this->db->like('jenis_tenaga','keperawatan');
        $query = $this->db->get();
        return $query;
    }

    public function nakes() {
		$this->db->select('*');
        $this->db->from('smis_hrd_riwayat_kerja_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_riwayat_kerja_pegawai.nip');
        $this->db->like('jenis_tenaga','nakes lainnya');
        $query = $this->db->get();
        return $query;
    }

    public function manajemen() {
		$this->db->select('*');
        $this->db->from('smis_hrd_riwayat_kerja_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_riwayat_kerja_pegawai.nip');
        $this->db->like('jenis_tenaga','manajemen');
        $query = $this->db->get();
        return $query;
    }

    public function dokter_gigi_spesialis() {
		$this->db->select('*');
        $this->db->from('smis_hrd_riwayat_kerja_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_riwayat_kerja_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter gigi spesialis');
        $query = $this->db->get();
        return $query;
    }

    public function join_dua() {
		$this->db->select('*');
        $this->db->from('smis_hrd_riwayat_kerja_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_riwayat_kerja_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter umum');
        $query = $this->db->get();
        return $query;
    }
    
    public function create($post)
    {
        $params = [
            'nip'=>$post['nip'],
            'nama_ruangan'=>$post['nama_ruangan'],
            'no_sk'=>$post['no_sk'],
            'tanggal_pindah'=>$post['tanggal_pindah'],
            'nama_pemimpin'=>$post['nama_pemimpin'],
            'tahun'=>$post['tahun'],
        ];
        $this->db->insert('smis_hrd_riwayat_kerja_pegawai', $params);
    }

    public function edit($post)
    {
        $params = [
            'nip'=>$post['nip'],
            'nama_ruangan'=>$post['nama_ruangan'],
            'no_sk'=>$post['no_sk'],
            'tanggal_pindah'=>$post['tanggal_pindah'],
            'nama_pemimpin'=>$post['nama_pemimpin'],
            'tahun'=>$post['tahun'],
        ];
        
        
        $this->db->where('riwayat_kerja_id', $post['id']);
        $this->db->update('smis_hrd_riwayat_kerja_pegawai', $params);
    }

    public function delete($id)
    {
        $this->db->where('riwayat_kerja_id', $id);
        $this->db->delete('smis_hrd_riwayat_kerja_pegawai');
    }

}
