<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cBahanBaku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mBahanBaku');
    }

    public function index()
    {
        $data = array(
            'bahanbaku' => $this->mBahanBaku->bahan_baku()
        );
        $this->load->view('Supplier/Layout/head');
        $this->load->view('Supplier/Layout/sidebar');
        $this->load->view('Supplier/BahanBaku/vBahanBaku', $data);
        $this->load->view('Supplier/Layout/footer');
    }
    public function createbahanbaku()
    {

        $this->load->view('Supplier/Layout/head');
        $this->load->view('Supplier/Layout/sidebar');
        $this->load->view('Supplier/BahanBaku/vCreateBahanBaku');
        $this->load->view('Supplier/Layout/footer');
    }
    public function createbb()
    {
        $data = array(
            'id_supplier' => '1',
            'nama_bb' => $this->input->post('nama'),
            'ket_bb' => $this->input->post('ket'),
            'harga_bb' => $this->input->post('harga'),
            'stok_supp' => $this->input->post('stok'),
            'stok_min_supp' => $this->input->post('stok_min'),
            'stok_min_gudang' => $this->input->post('stok_min_gudang'),
        );
        $this->mBahanBaku->insert($data);
        $this->session->set_flashdata('success', 'Data Bahan Baku Berhasil Disimpan!!!');
        redirect('Supplier/cBahanBaku');
    }
    public function edit($id)
    {
        $data = array(
            'bb' => $this->mBahanBaku->edit($id)
        );
        $this->load->view('Supplier/Layout/head');
        $this->load->view('Supplier/Layout/sidebar');
        $this->load->view('Supplier/BahanBaku/vUpdateBahanBaku', $data);
        $this->load->view('Supplier/Layout/footer');
    }
    public function update($id)
    {
        $data = array(
            'id_supplier' => $this->session->userdata('id_supplier'),
            'nama_bb' => $this->input->post('nama'),
            'ket_bb' => $this->input->post('ket'),
            'harga_bb' => $this->input->post('harga'),
            'stok_supp' => $this->input->post('stok'),
            'stok_min_supp' => $this->input->post('stok_min'),
            'stok_min_gudang' => $this->input->post('stok_min_gudang'),
        );
        $this->mBahanBaku->update($id, $data);
        $this->session->set_flashdata('success', 'Data Bahan Baku Berhasil Diperbaharui!!!');
        redirect('Supplier/cBahanBaku');
    }
    public function delete($id)
    {
        $this->mBahanBaku->delete($id);
        $this->session->set_flashdata('success', 'Data Bahan Baku Berhasil Dihapus!!!');
        redirect('Supplier/cBahanBaku');
    }
}

/* End of file cBahanBaku.php */
