<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporanbbMasuk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLaporan');
    }

    public function index()
    {
        $data = array(
            'bb_masuk' => $this->mLaporan->bahan_baku_masuk()
        );
        $this->load->view('Pimpinan/Layout/head');
        $this->load->view('Pimpinan/Layout/sidebar');
        $this->load->view('Pimpinan/vLaporanbbMasuk', $data);
        $this->load->view('Pimpinan/Layout/footer');
    }
}

/* End of file cLaporanbbMasuk.php */
