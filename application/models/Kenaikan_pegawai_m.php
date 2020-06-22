<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kenaikan_pegawai_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('smis_hrd_kenaikan_pegawai');
		if($id !=null) {
            $this->db->where('kenaikan_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function reguler_fungsional() {
		$this->db->select('*');
        $this->db->from('smis_hrd_kenaikan_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_kenaikan_pegawai.nip');
        $this->db->like('jenis_kenaikan','Kenaikan Pangkat Fungsional');
        $query = $this->db->get();
        return $query;
    }

    public function reguler_struktural() {
		$this->db->select('*');
        $this->db->from('smis_hrd_kenaikan_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_kenaikan_pegawai.nip');
        $this->db->like('jenis_kenaikan','Kenaikan Pangkat Reguler Struktural');
        $query = $this->db->get();
        return $query;
    }
    
    public function reguler_non_struktural() {
		$this->db->select('*');
        $this->db->from('smis_hrd_kenaikan_pegawai');
        $this->db->join('smis_hrd_pegawai','smis_hrd_pegawai.nip=smis_hrd_kenaikan_pegawai.nip');
        $this->db->like('jenis_kenaikan','Kenaikan Pangkat Reguler Non-Struktural');
        $query = $this->db->get();
        return $query;
    }

    public function create($post)
    {
        $params = [
            'nip'=>$post['nip'],
            'ruangan'=>$post['ruangan'],
            'tanggal_kenaikan'=>$post['tanggal_kenaikan'],
            'jenis_kenaikan'=>$post['jenis_kenaikan'],
            'no_karpeg'=>$post['no_karpeg'],
            'no_sk_pns'=>$post['no_sk_pns'],
            'no_sk_terakhir'=>$post['no_sk_terakhir'],
        ];
        $this->db->insert('smis_hrd_kenaikan_pegawai', $params);
    }

    public function edit($post)
    {
        $params = [
            'nip'=>$post['nip'],
            'ruangan'=>$post['ruangan'],
            'tanggal_kenaikan'=>$post['tanggal_kenaikan'],
            'jenis_kenaikan'=>$post['jenis_kenaikan'],
            'no_karpeg'=>$post['no_karpeg'],
            'no_sk_pns'=>$post['no_sk_pns'],
            'no_sk_terakhir'=>$post['no_sk_terakhir'],
        ];
        
        
        $this->db->where('kenaikan_id', $post['id']);
        $this->db->update('smis_hrd_kenaikan_pegawai', $params);
    }

    public function delete($id)
    {
        $this->db->where('kenaikan_id', $id);
        $this->db->delete('smis_hrd_kenaikan_pegawai');
    }

}
