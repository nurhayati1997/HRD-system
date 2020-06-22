<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nonpegawai_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($id !=null) {
            $this->db->where('nik', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_nonpegawai(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');

        $query =$this->db->get();
        return $query;
    }


    // public function jenis_karyawan_thl()
    // {
        
    //     $query = $this->db->query("SELECT COUNT(*) FROM `smis_hrd_nonpegawai` WHERE status_karyawan = 'thl' AND jenis_tenaga = 'keperawatan' ");
    //     return $query->result_array();

    // }
    // public function get_pegawai_dokter_umum( $dokter= 'dokter umum')
	// {
	// 	$this->db->from('smis_hrd_pegawai');
	// 	if($dokter !=null) {
    //         $this->db->where('jenis_tenaga', $dokter);
    //     }
    //     $query = $this->db->get();
    //     return $query;
    // }

    public function get_thl_perawat($thl= 'thl', $perawat= 'keperawatan')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($thl !=null) {
            $this->db->where('status_karyawan', $thl);
            $this->db->where('jenis_tenaga', $perawat);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_thl_manajemen($thl= 'thl', $manajemen= 'manajemen')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($thl !=null) {
            $this->db->where('status_karyawan', $thl);
            $this->db->where('jenis_tenaga', $manajemen);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_thl_nakes($thl= 'thl', $nakes= 'nakes lainnya')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($thl !=null) {
            $this->db->where('status_karyawan', $thl);
            $this->db->where('jenis_tenaga', $nakes);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_kontrak_dokter_umum($kontrak= 'kontrak', $dokter= 'dokter umum')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($kontrak !=null) {
            $this->db->where('status_karyawan', $kontrak);
            $this->db->where('jenis_tenaga', $dokter);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_kontrak_dokter_gigi($kontrak= 'kontrak', $dokter= 'dokter gigi.')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($kontrak !=null) {
            $this->db->where('status_karyawan', $kontrak);
            $this->db->where('jenis_tenaga', $dokter);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_kontrak_dokter_spesialis($kontrak= 'kontrak', $dokter= 'dokter spesialis')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($kontrak !=null) {
            $this->db->where('status_karyawan', $kontrak);
            $this->db->where('jenis_tenaga', $dokter);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_kontrak_dokter_gigi_spesialis($kontrak= 'kontrak', $dokter= 'dokter gigi spesialis')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($kontrak !=null) {
            $this->db->where('status_karyawan', $kontrak);
            $this->db->where('jenis_tenaga', $dokter);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_kontrak_dokter_sub_spesialis($kontrak= 'kontrak', $dokter= 'dokter sub.spesialis')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($kontrak !=null) {
            $this->db->where('status_karyawan', $kontrak);
            $this->db->where('jenis_tenaga', $dokter);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_kontrak_perawat($kontrak= 'kontrak', $perawat= 'keperawatan')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($kontrak !=null) {
            $this->db->where('status_karyawan', $kontrak);
            $this->db->where('jenis_tenaga', $perawat);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_kontrak_manajemen($kontrak= 'kontrak', $manajemen= 'manajemen')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($kontrak !=null) {
            $this->db->where('status_karyawan', $kontrak);
            $this->db->where('jenis_tenaga', $manajemen);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_kontrak_nakes($kontrak= 'kontrak', $nakes= 'nakes lainnya')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($kontrak !=null) {
            $this->db->where('status_karyawan', $kontrak);
            $this->db->where('jenis_tenaga', $nakes);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_p3k_perawat($p3k= 'p3k', $perawat= 'keperawatan')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($p3k !=null) {
            $this->db->where('status_karyawan', $p3k);
            $this->db->where('jenis_tenaga', $perawat);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_p3k_manajemen($p3k= 'p3k', $manajemen= 'manajemen')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($p3k !=null) {
            $this->db->where('status_karyawan', $p3k);
            $this->db->where('jenis_tenaga', $manajemen);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_p3k_nakes($p3k= 'p3k', $nakes= 'nakes lainnya')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($p3k !=null) {
            $this->db->where('status_karyawan', $p3k);
            $this->db->where('jenis_tenaga', $nakes);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_thl($thl= 'thl')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($thl !=null) {
            $this->db->where('status_karyawan', $thl);
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function get_kontrak($kontrak= 'kontrak')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($kontrak !=null) {
            $this->db->where('status_karyawan', $kontrak);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_p3k($p3k= 'p3k')
	{
		$this->db->from('smis_hrd_nonpegawai');
		if($p3k !=null) {
            $this->db->where('status_karyawan', $p3k);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_dokter_umum_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter umum');

        $query =$this->db->get();
        return $query;
    }

    public function get_dokter_gigi_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter gigi.');

        $query =$this->db->get();
        return $query;
    }

    public function get_dokter_spesialis_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter spesialis');

        $query =$this->db->get();
        return $query;
    }

    public function get_dokter_gigi_spesialis_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter gigi spesialis');

        $query =$this->db->get();
        return $query;
    }

    public function get_dokter_sub_spesialis_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','dokter sub.spesialis');

        $query =$this->db->get();
        return $query;
    }

    public function get_perawat(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->like('status_karyawan','thl');
        $this->db->like('jenis_tenaga','keperawatan');

        $query =$this->db->get();
        return $query;
    }

    public function get_perawat_p3k(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->like('status_karyawan','p3k');
        $this->db->like('jenis_tenaga','keperawatan');

        $query =$this->db->get();
        return $query;
    }

    public function get_perawat_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','keperawatan');

        $query =$this->db->get();
        return $query;
    }
    
    public function get_nakes(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->like('status_karyawan','thl');
        $this->db->like('jenis_tenaga','nakes lainnya');

        $query =$this->db->get();
        return $query;
    }

    public function get_nakes_p3k(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->like('status_karyawan','p3k');
        $this->db->like('jenis_tenaga','nakes lainnya');

        $query =$this->db->get();
        return $query;
    }

    public function get_nakes_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','nakes lainnya');

        $query =$this->db->get();
        return $query;
    }

    public function get_manajemen(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->like('status_karyawan','thl');
        $this->db->like('jenis_tenaga','manajemen');

        $query =$this->db->get();
        return $query;
    }

    public function get_manajemen_p3k(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->like('status_karyawan','p3k');
        $this->db->like('jenis_tenaga','manajemen');

        $query =$this->db->get();
        return $query;
    }

    public function get_manajemen_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->like('status_karyawan','kontrak');
        $this->db->like('jenis_tenaga','manajemen');

        $query =$this->db->get();
        return $query;
    }


    //detail dari tabel smis_hrd_nonpegawai
    public function detail_data ($id = null)
    {
        $query = $this->db->get_where('smis_hrd_nonpegawai', array('nik' => $id))->row();
        return $query;
    }

    //detail dari tabel smis_hrd_cuti_nonpegawai
    public function detail_cuti ($id = null)
    {
        $query = $this->db->get_where('smis_hrd_cuti_nonpegawai', array('nik' => $id))->result_array();
        return $query;
    }

    //detail dari tabel smis_hrd_riwayat_cuti_nonpegawai
    public function detail_riwayat ($id = null)
    {
        $query = $this->db->get_where('smis_hrd_riwayat_kerja_nonpegawai', array('nik' => $id))->result_array();
        return $query;
    }

    //detail dari tabel smis_hrd_pangkat_cuti_nonpegawai
    // public function detail_pangkat ($id = null)
    // {
    //     $query = $this->db->get_where('smis_hrd_kenaikan_nonpegawai', array('nik' => $id))->result_array();
    //     return $query;
    // }

    //detail dari tabel smis_hrd_arsip_cuti_nonpegawai
    public function detail_arsip ($id = null)
    {
        $query = $this->db->get_where('smis_hrd_file_nonpegawai', array('nik' => $id))->result_array();
        return $query;
    }

    
    //detail notifikasi semua non pegawai
    // public function get_notif_nonpegawai(){
    //     $this->db->select('*');
    //     $this->db->from('smis_hrd_nonpegawai');
    //     $this->db->order_by('notifikasi_masa_berlaku', 'ASC');
    //     $this->db->where('YEAR(notifikasi_masa_berlaku)', date('Y'));

    //     $query =$this->db->get();
    //     return $query;

    // }

    //detail notif non pegawai thl
    public function get_notif_nonpegawai_thl(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->order_by('notifikasi_masa_berlaku', 'ASC');
        $this->db->like('status_karyawan','thl');
        $this->db->where('YEAR(notifikasi_masa_berlaku)', date('Y'));

        $query =$this->db->get();
        return $query;

    }

    //detail notif non pegawai kontrak
    public function get_notif_nonpegawai_kontrak(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->order_by('notifikasi_masa_berlaku', 'ASC');
        $this->db->like('status_karyawan','kontrak');
        $this->db->where('YEAR(notifikasi_masa_berlaku)', date('Y'));

        $query =$this->db->get();
        return $query;

    }

    //detail notif non pegawai kontrak
    public function get_notif_nonpegawai_p3k(){
        $this->db->select('*');
        $this->db->from('smis_hrd_nonpegawai');
        $this->db->order_by('notifikasi_masa_berlaku', 'ASC');
        $this->db->like('status_karyawan','p3k');
        $this->db->where('YEAR(notifikasi_masa_berlaku)', date('Y'));

        $query =$this->db->get();
        return $query;

    }

    

    public function create($post)
    {
        $fixNotifi = date("Y-m-d", strtotime($post['masa_berlaku_sip_str']." -8 month"));
        $params = [
            'nik'=>$post['nik'],
            'nama'=>$post['nama'],
            'status_karyawan'=>$post['status_karyawan'],
            'pendidikan'=>$post['pendidikan'],
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
            'foto_nonpegawai'=>empty($post['foto_nonpegawai']) ? null : $post ['foto_nonpegawai'],
            'unit_kerja'=>$post['unit_kerja'],
            'jabatan'=>$post['jabatan'],
            'masa_kerja'=>$post['masa_kerja'],
            'pangkat_terakhir'=>$post['pangkat_terakhir'],
            'jenis_tenaga'=>$post['jenis_tenaga'],
            'jenis_pelayanan'=>$post['jenis_pelayanan'],
            'no_sip'=>$post['no_sip'],
            'no_str'=>$post['no_str'],
            'masa_berlaku_sip_str'=>$post['masa_berlaku_sip_str'],
            'notifikasi_masa_berlaku'=>$fixNotifi

        ];
        $this->db->insert('smis_hrd_nonpegawai', $params);
    }

    public function edit($post)
    {
        $fixNotification = date("Y-m-d", strtotime($post['masa_berlaku_sip_str']." -8 month"));
        $params = [
            'nik'=>$post['nik'],
            'nama'=>$post['nama'],
            'status_karyawan'=>$post['status_karyawan'],
            'pendidikan'=>$post['pendidikan'],
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
            //'foto_nonpegawai'=>empty($post['foto_nonpegawai']) ? null : $post ['foto_nonpegawai'],
            'unit_kerja'=>$post['unit_kerja'],
            'jabatan'=>$post['jabatan'],
            'masa_kerja'=>$post['masa_kerja'],
            'pangkat_terakhir'=>$post['pangkat_terakhir'],
            'jenis_tenaga'=>$post['jenis_tenaga'],
            'jenis_pelayanan'=>$post['jenis_pelayanan'],
            'no_sip'=>$post['no_sip'],
            'no_str'=>$post['no_str'],
            'masa_berlaku_sip_str'=>$post['masa_berlaku_sip_str'],
            'notifikasi_masa_berlaku'=>$fixNotification
        ];
        if ($post['foto_nonpegawai'] != null){
            $params['foto_nonpegawai'] = $post['foto_nonpegawai'];
        }
        
        $this->db->where('nik', $post['nik']);
        $this->db->update('smis_hrd_nonpegawai', $params);
    }

    public function delete($id)
    {
        $this->db->where('nik', $id);
        $this->db->delete('smis_hrd_nonpegawai');
    }

}
