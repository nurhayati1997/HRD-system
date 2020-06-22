<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_pegawai_m extends CI_Model {

	public function login ($post)
	{
		$this->db->select('*');
		$this->db->from('smis_hrd_pegawai');
		$this->db->where('nama', $post['username']);
		$this->db->where('nip', ($post['password']));
		$query = $this->db->get();
		return $query;
	}

	// public function detail_data ($id = null)
    // {
    //     $query = $this->db->get_where('smis_hrd_pegawai', array('nip' => $id))->row();
    //     return $query;
    // }

}
