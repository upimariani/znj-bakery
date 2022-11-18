<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cBahanKeluar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mBBKeluar');
    }


    public function index()
    {
        $data = array(
            'bb_keluar' => $this->mBBKeluar->bb_keluar()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/BahanKeluar/vBahanKeluar', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function createBahanKeluar()
    {
        $data = array(
            'bb' => $this->mBBKeluar->bb()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/BahanKeluar/vCreateBahanKeluar', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function create()
    {
        $data = array(
            'id_bb_masuk' => $this->input->post('bahanbaku'),
            'tgl_keluar' => $this->input->post('date'),
            'qty_keluar' => $this->input->post('qty_keluar'),
        );
        $this->mBBKeluar->insert_bb_keluar($data);

        $id = $this->input->post('bahanbaku');
        $stok = 0;
        $qty_sebelumnya = $this->input->post('qty_sebelumnya');
        $qty_keluar = $this->input->post('qty_keluar');
        $stok = $qty_sebelumnya - $qty_keluar;

        $data_stok = array(
            'sisa_stok' => $stok
        );
        $this->mBBKeluar->update_stok($id, $data_stok);
        $this->session->set_flashdata('success', 'Data Bahan Baku Keluar Berhasil Disimpan');
        redirect('Admin/cBahanKeluar');
    }
}

/* End of file cBahanKeluar.php */
