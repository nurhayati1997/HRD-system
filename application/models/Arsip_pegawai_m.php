<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip_pegawai_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('smis_hrd_file_pegawai');
		if($id !=null) {
            $this->db->where('file_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function dokter_umum(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_file_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter umum');

        $query =$this->db->get();
        return $query;
    }

    public function dokter_gigi(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_file_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter gigi.');

        $query =$this->db->get();
        return $query;
    }

    public function dokter_spesialis(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_file_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter spesialis');

        $query =$this->db->get();
        return $query;
    }

    public function dokter_gigi_spesialis(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_file_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter gigi spesialis');

        $query =$this->db->get();
        return $query;
    }

    public function dokter_sub_spesialis(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_file_pegawai.nip');
        $this->db->like('jenis_tenaga','dokter sub.spesialis');

        $query =$this->db->get();
        return $query;
    }

    public function perawat(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_file_pegawai.nip');
        $this->db->like('jenis_tenaga','keperawatan');

        $query =$this->db->get();
        return $query;
    }

    public function nakes(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_file_pegawai.nip');
        $this->db->like('jenis_tenaga','nakes lainnya');

        $query =$this->db->get();
        return $query;
    }

    
    public function manajemen(){
        $this->db->select('*');
        $this->db->from('smis_hrd_file_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_file_pegawai.nip');
        $this->db->like('jenis_tenaga','manajemen');

        $query =$this->db->get();
        return $query;
    }

    public function create($post)
    {
        $params = [
            'nip'=>$post['nip'],
            'nama_file'=>$post['nama_file'],
            'file_pegawai'=>empty($post['file_pegawai']) ? null : $post ['file_pegawai'],
        ];
        $this->db->insert('smis_hrd_file_pegawai', $params);
    }

    public function edit($post)
    {
        $params = [
            //'file_id'=>$post['file_id'],
            'nip'=>$post['nip'],
            'nama_file'=>$post['nama_file'],
        ];
        if ($post['file_pegawai'] != null){
            $params['file_pegawai'] = $post['file_pegawai'];
        }
        
        $this->db->where('file_id', $post['id']);
        $this->db->update('smis_hrd_file_pegawai', $params);
    }

    public function delete($id)
    {
        $this->db->where('file_id', $id);
        $this->db->delete('smis_hrd_file_pegawai');
    }

}
