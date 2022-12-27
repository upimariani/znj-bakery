<?php
defined('BASEPATH') or exit('No direct script access allowed');

class claporanbbKeluar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLaporan');
    }


    public function index()
    {
        $data = array(
            'bahan_keluar' => $this->mLaporan->bahan_baku_keluar()
        );
        $this->load->view('Pimpinan/Layout/head');
        $this->load->view('Pimpinan/Layout/sidebar');
        $this->load->view('Pimpinan/vLaporanbbKeluar', $data);
        $this->load->view('Pimpinan/Layout/footer');
    }
}

/* End of file claporanbbKeluar.php */
