<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_non_pegawai_m extends CI_Model {

	public function login ($post)
	{
		$this->db->select('*');
		$this->db->from('smis_hrd_nonpegawai');
		$this->db->where('nama', $post['username']);
		$this->db->where('nik', ($post['password']));
		$query = $this->db->get();
		return $query;
	}

	// public function detail_data ($id = null)
    // {
    //     $query = $this->db->get_where('smis_hrd_pegawai', array('nip' => $id))->row();
    //     return $query;
    // }

}
