<?php
Class Fungsi{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function count_pegawai() {
        $this->ci->load->model('pegawai_m');
        return $this->ci->pegawai_m->get()->num_rows();
    }
    
    public function count_pegawai_dokter_umum() {
        $this->ci->load->model('pegawai_m');
        return $this->ci->pegawai_m->get_pegawai_dokter_umum()->num_rows();
    }

    public function count_pegawai_dokter_gigi() {
        $this->ci->load->model('pegawai_m');
        return $this->ci->pegawai_m->get_pegawai_dokter_gigi()->num_rows();
    }

    public function count_pegawai_dokter_spesialis() {
        $this->ci->load->model('pegawai_m');
        return $this->ci->pegawai_m->get_pegawai_dokter_spesialis()->num_rows();
    }

    public function count_pegawai_dokter_gigi_spesialis() {
        $this->ci->load->model('pegawai_m');
        return $this->ci->pegawai_m->get_pegawai_dokter_gigi_spesialis()->num_rows();
    }

    public function count_pegawai_dokter_sub_spesialis() {
        $this->ci->load->model('pegawai_m');
        return $this->ci->pegawai_m->get_pegawai_dokter_sub_spesialis()->num_rows();
    }

    public function count_pegawai_perawat() {
        $this->ci->load->model('pegawai_m');
        return $this->ci->pegawai_m->get_pegawai_perawat()->num_rows();
    }

    public function count_pegawai_nakes() {
        $this->ci->load->model('pegawai_m');
        return $this->ci->pegawai_m->get_pegawai_nakes()->num_rows();
    }

    public function count_pegawai_manajemen() {
        $this->ci->load->model('pegawai_m');
        return $this->ci->pegawai_m->get_pegawai_manajemen()->num_rows();
    }
    

    public function count_thl() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_thl()->num_rows();
    }

    public function count_thl_perawat() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_thl_perawat()->num_rows();
    }

    public function count_thl_nakes() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_thl_nakes()->num_rows();
    }

    public function count_thl_manajemen() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_thl_manajemen()->num_rows();
    }


    public function count_kontrak() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_kontrak()->num_rows();
    }

    public function count_kontrak_dokter_umum() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_kontrak_dokter_umum()->num_rows();
    }

    public function count_kontrak_dokter_gigi() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_kontrak_dokter_gigi()->num_rows();
    }

    public function count_kontrak_dokter_spesialis() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_kontrak_dokter_spesialis()->num_rows();
    }

    public function count_kontrak_dokter_gigi_spesialis() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_kontrak_dokter_gigi_spesialis()->num_rows();
    }

    public function count_kontrak_dokter_sub_spesialis() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_kontrak_dokter_sub_spesialis()->num_rows();
    }

    public function count_kontrak_perawat() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_kontrak_perawat()->num_rows();
    }

    public function count_kontrak_nakes() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_kontrak_nakes()->num_rows();
    }

    public function count_kontrak_manajemen() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_kontrak_manajemen()->num_rows();
    }

    public function count_p3k() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_p3k()->num_rows();
    }
    public function count_p3k_perawat() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_p3k_perawat()->num_rows();
    }

    public function count_p3k_nakes() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_p3k_nakes()->num_rows();
    }

    public function count_p3k_manajemen() {
        $this->ci->load->model('nonpegawai_m');
        return $this->ci->nonpegawai_m->get_p3k_manajemen()->num_rows();
    }

    
}
?>