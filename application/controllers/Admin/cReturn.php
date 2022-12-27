<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cReturn extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mReturn');
    }


    public function index()
    {
        $data = array(
            'return' => $this->mReturn->select(),
            'bb_masuk' => $this->mReturn->bb_masuk()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/ReturnBarang/vReturn', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function retur_bb()
    {
        $data = array(
            'id_bb_masuk' => $this->input->post('barang'),
            'tgl_retur' => date('Y-m-d'),
            'alasan_retur' => $this->input->post('alasan'),
            'qty_retur' => $this->input->post('retur'),
        );
        $this->mReturn->insert($data);

        $id = $this->input->post('barang');
        $stok_sebelumnya = $this->input->post('stok');
        $qty_retur = $this->input->post('retur');
        $total = 0;
        $total = $stok_sebelumnya - $qty_retur;

        $data_stok = array(
            'sisa_stok' => $total
        );
        $this->mReturn->update_stok($id, $data_stok);
        $this->session->set_flashdata('success', 'Data Return Berhasil Dikirim');
        redirect('Admin/cReturn');
    }
}

/* End of file cReturn.php */
