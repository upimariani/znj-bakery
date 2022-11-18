<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksiBB extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mTransaksiSupplier');
        $this->load->model('mBahanMasuk');
    }

    public function index()
    {
        $data = array(
            'transaksi' => $this->mTransaksiSupplier->transaski()
        );

        $this->load->view('Supplier/Layout/head');
        $this->load->view('Supplier/Layout/sidebar');
        $this->load->view('Supplier/TransaksiBahanBaku/vTransaksiBahanBaku', $data);
        $this->load->view('Supplier/Layout/footer');
    }
    public function update($id)
    {
        $data = array(
            'status_order' => '2',
        );
        $this->mBahanMasuk->bayar($id, $data);
        $this->session->set_flashdata('success', 'Data Bahan Baku Berhasil Diperbaharui!!!');
        redirect('Supplier/cTransaksiBB');
    }
}

/* End of file cTransaksiBB.php */
