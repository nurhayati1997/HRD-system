<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('smis_hrd_pegawai');
		if($id !=null) {
            $this->db->where('nip', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_pegawai(){
        $this->db->select('*');
        $this->db->from('smis_hrd_pegawai');

        $query =$this->db->get();
        return $query;
    }


    public function get_pegawai_dokter_umum( $dokter= 'dokter umum')
	{
		$this->db->from('smis_hrd_pegawai');
		if($dokter !=null) {
            $this->db->where('jenis_tenaga', $dokter);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_pegawai_dokter_gigi( $dokter= 'dokter gigi.')
	{
		$this->db->from('smis_hrd_pegawai');
		if($dokter !=null) {
            $this->db->where('jenis_tenaga', $dokter);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_pegawai_dokter_spesialis( $dokter= 'dokter spesialis')
	{
		$this->db->from('smis_hrd_pegawai');
		if($dokter !=null) {
            $this->db->where('jenis_tenaga', $dokter);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_pegawai_dokter_gigi_spesialis( $dokter= 'dokter gigi spesialis')
	{
		$this->db->from('smis_hrd_pegawai');
		if($dokter !=null) {
            $this->db->where('jenis_tenaga', $dokter);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_pegawai_dokter_sub_spesialis( $dokter= 'dokter sub.spesialis')
	{
		$this->db->from('smis_hrd_pegawai');
		if($dokter !=null) {
            $this->db->where('jenis_tenaga', $dokter);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_pegawai_nakes( $nakes= 'nakes lainnya')
	{
		$this->db->from('smis_hrd_pegawai');
		if($nakes !=null) {
            $this->db->where('jenis_tenaga', $nakes);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_pegawai_perawat( $perawat= 'keperawatan')
	{
		$this->db->from('smis_hrd_pegawai');
		if($perawat !=null) {
            $this->db->where('jenis_tenaga', $perawat);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_pegawai_manajemen( $manajemen= 'manajemen')
	{
		$this->db->from('smis_hrd_pegawai');
		if($manajemen !=null) {
            $this->db->where('jenis_tenaga', $manajemen);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_dokter_umum(){
        $this->db->select('*');
        $this->db->from('smis_hrd_pegawai');
        $this->db->order_by('notifikasi_masa_berlaku', 'ASC');
        $this->db->like('jenis_tenaga','dokter umum');

        $query =$this->db->get();
        return $query;
    }

    public function get_dokter_gigi(){
        $this->db->select('*');
        $this->db->from('smis_hrd_pegawai');
        $this->db->like('jenis_tenaga','dokter gigi.');

        $query =$this->db->get();
        return $query;
    }
    
    public function get_dokter_spesialis(){
        $this->db->select('*');
        $this->db->from('smis_hrd_pegawai');
        $this->db->like('jenis_tenaga','dokter spesialis');

        $query =$this->db->get();
        return $query;
    }
    
    public function get_dokter_gigi_spesialis(){
        $this->db->select('*');
        $this->db->from('smis_hrd_pegawai');
        $this->db->like('jenis_tenaga','dokter gigi spesialis');

        $query =$this->db->get();
        return $query;
    }
    
    public function get_dokter_sub_spesialis(){
        $this->db->select('*');
        $this->db->from('smis_hrd_pegawai');
        $this->db->like('jenis_tenaga','dokter sub.spesialis');

        $query =$this->db->get();
        return $query;
    }

    public function get_perawat(){
        $this->db->select('*');
        $this->db->from('smis_hrd_pegawai');
        $this->db->like('jenis_tenaga','keperawatan');

        $query =$this->db->get();
        return $query;
    }
    
    public function get_nakes(){
        $this->db->select('*');
        $this->db->from('smis_hrd_pegawai');
        $this->db->like('jenis_tenaga','nakes lainnya');

        $query =$this->db->get();
        return $query;
    }

    public function get_manajemen(){
        $this->db->select('*');
        $this->db->from('smis_hrd_pegawai');
        $this->db->like('jenis_tenaga','manajemen');

        $query =$this->db->get();
        return $query;
    }

    //detail dari tabel smis_hrd_pegawai
    public function detail_data ($id = null)
    {
        $query = $this->db->get_where('smis_hrd_pegawai', array('nip' => $id))->row();
        return $query;
    }

    //detail dari tabel smis_hrd_cuti_pegawai
    public function detail_cuti ($id = null)
    {
        $query = $this->db->get_where('smis_hrd_cuti_pegawai', array('nip' => $id))->result_array();
        return $query;
    }

    //detail dari tabel smis_hrd_riwayat_cuti_pegawai
    public function detail_riwayat ($id = null)
    {
        $query = $this->db->get_where('smis_hrd_riwayat_kerja_pegawai', array('nip' => $id))->result_array();
        return $query;
    }

    //detail dari tabel smis_hrd_pangkat_cuti_pegawai
    public function detail_pangkat ($id = null)
    {
        $query = $this->db->get_where('smis_hrd_kenaikan_pegawai', array('nip' => $id))->result_array();
        return $query;
    }

    //detail dari tabel smis_hrd_arsip_cuti_pegawai
    public function detail_arsip ($id = null)
    {
        $query = $this->db->get_where('smis_hrd_file_pegawai', array('nip' => $id))->result_array();
        return $query;
    }

    
    //detail notifikasi
    public function get_notif_pegawai(){
        $this->db->select('*');
        $this->db->from('smis_hrd_pegawai');
        $this->db->order_by('notifikasi_masa_berlaku', 'ASC');
        $this->db->where('YEAR(notifikasi_masa_berlaku)', date('Y'));

        $query =$this->db->get();
        return $query;

    }


    public function create($post)
    {
        $fixNotification = date("Y-m-d", strtotime($post['masa_berlaku_sip_str']." -8 month"));
        $params = [
            'nip'=>$post['nip'],
            'nama'=>$post['nama'],
            'pendidikan'=>$post['pendidikan'],
            'nik'=>$post['nik'],
            'suku_bangsa'=>$post['suku_bangsa'],
            'alamat'=>$post['alamat'],
            'provinsi'=>$post['provinsi'],
            'kotakab'=>$post['kotakab'],
            'kecamatan'=>$post['kecamatan'],
            'kelurahandesa'=>$post['kelurahandesa'],
            'rtrw'=>$post['rtrw'],
            'kodepos'=>$post['kodepos'],
            'nohp'=>$post['nohp'],
            'email'=>$post['email'],
            'tempatlahir'=>$post['tempatlahir'],
            'tgl_lahir'=>$post['tgl_lahir'],
            'jenis_kelamin'=>$post['jenis_kelamin'],
            'agama'=>$post['agama'],
            'status_pernikahan'=>$post['status_pernikahan'],
            'goldarah'=>$post['goldarah'],
            'pendidikan'=>$post['pendidikan'],
            'sd'=>$post['sd'],
            'no_ijasah_sd'=>$post['no_ijasah_sd'],
            'smp'=>$post['smp'],
            'no_ijasah_smp'=>$post['no_ijasah_smp'],
            'sma'=>$post['sma'],
            'no_ijasah_sma'=>$post['no_ijasah_sma'],
            's1'=>$post['s1'],
            'no_ijasah_s1'=>$post['no_ijasah_s1'],
            's2'=>$post['s2'],
            'no_ijasah_s2'=>$post['no_ijasah_s2'],
            's3'=>$post['s3'],
            'no_ijasah_s3'=>$post['no_ijasah_s3'],
            'foto_pegawai'=>empty($post['foto_pegawai']) ? null : $post ['foto_pegawai'],
            'unit_kerja'=>$post['unit_kerja'],
            'jabatan'=>$post['jabatan'],
            'status_pegawai'=>$post['status_pegawai'],
            'masa_kerja'=>$post['masa_kerja'],
            'pangkat_terakhir'=>$post['pangkat_terakhir'],
            'eselon'=>$post['eselon'],
            'jenis_tenaga'=>$post['jenis_tenaga'],
            'jenis_pelayanan'=>$post['jenis_pelayanan'],
            'no_sip'=>$post['no_sip'],
            'no_str'=>$post['no_str'],
            'masa_berlaku_sip_str'=>$post['masa_berlaku_sip_str'],
            'notifikasi_masa_berlaku'=>$fixNotification

        ];
        $this->db->insert('smis_hrd_pegawai', $params);
    }

    public function edit($post)
    {
        $fixNotification = date("Y-m-d", strtotime($post['masa_berlaku_sip_str']." -8 month"));
        $params = [
            'nip'=>$post['nip'],
            'nama'=>$post['nama'],
            'pendidikan'=>$post['pendidikan'],
            'nik'=>$post['nik'],
            'suku_bangsa'=>$post['suku_bangsa'],
            'alamat'=>$post['alamat'],
            'provinsi'=>$post['provinsi'],
            'kotakab'=>$post['kotakab'],
            'kecamatan'=>$post['kecamatan'],
            'kelurahandesa'=>$post['kelurahandesa'],
            'rtrw'=>$post['rtrw'],
            'kodepos'=>$post['kodepos'],
            'nohp'=>$post['nohp'],
            'email'=>$post['email'],
            'tempatlahir'=>$post['tempatlahir'],
            'tgl_lahir'=>$post['tgl_lahir'],
            'jenis_kelamin'=>$post['jenis_kelamin'],
            'agama'=>$post['agama'],
            'status_pernikahan'=>$post['status_pernikahan'],
            'goldarah'=>$post['goldarah'],
            'pendidikan'=>$post['pendidikan'],
            'sd'=>$post['sd'],
            'no_ijasah_sd'=>$post['no_ijasah_sd'],
            'smp'=>$post['smp'],
            'no_ijasah_smp'=>$post['no_ijasah_smp'],
            'sma'=>$post['sma'],
            'no_ijasah_sma'=>$post['no_ijasah_sma'],
            's1'=>$post['s1'],
            'no_ijasah_s1'=>$post['no_ijasah_s1'],
            's2'=>$post['s2'],
            'no_ijasah_s2'=>$post['no_ijasah_s2'],
            's3'=>$post['s3'],
            'no_ijasah_s3'=>$post['no_ijasah_s3'],
            //'foto_pegawai'=>empty($post['foto_pegawai']) ? null : $post ['foto_pegawai'],
            'unit_kerja'=>$post['unit_kerja'],
            'jabatan'=>$post['jabatan'],
            'status_pegawai'=>$post['status_pegawai'],
            'masa_kerja'=>$post['masa_kerja'],
            'pangkat_terakhir'=>$post['pangkat_terakhir'],
            'eselon'=>$post['eselon'],
            'jenis_tenaga'=>$post['jenis_tenaga'],
            'jenis_pelayanan'=>$post['jenis_pelayanan'],
            'no_sip'=>$post['no_sip'],
            'no_str'=>$post['no_str'],
            'masa_berlaku_sip_str'=>$post['masa_berlaku_sip_str'],
            'notifikasi_masa_berlaku'=>$fixNotification
        ];
        if ($post['foto_pegawai'] != null){
            $params['foto_pegawai'] = $post['foto_pegawai'];
        }
        
        $this->db->where('nip', $post['nip']);
        $this->db->update('smis_hrd_pegawai', $params);
    }

    public function delete($id)
    {
        $this->db->where('nip', $id);
        $this->db->delete('smis_hrd_pegawai');
    }

}
