<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cStokBahanBaku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mSupplier');
        $this->load->model('mBahanMasuk');
    }

    public function index()
    {
        $this->protect->proteksi_halaman();
        $data = array(
            'bahan_masuk_selesai' => $this->mBahanMasuk->stok_bahan_baku(),
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/vStokBahanBaku', $data);
        $this->load->view('Admin/Layout/footer');
    }
}

/* End of file cStokBahanBaku.php */
