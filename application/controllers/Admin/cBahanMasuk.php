<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cBahanMasuk extends CI_Controller
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
            'supplier' => $this->mSupplier->select_supplier(),
            'barang_masuk' => $this->mBahanMasuk->bahan_masuk(),
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/BahanMasuk/vBahanMasuk', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function createtransaksi()
    {
        $supplier = $this->input->post('supplier');

        $data = array(
            'supplier' => $this->input->post('supplier'),
            'bahanbaku' => $this->mBahanMasuk->bahanbaku($supplier)
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/BahanMasuk/vCreateTransaksi', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function addtocart()
    {
        // var_dump($supplier);
        $data = array(
            'id' => $this->input->post('bb'),
            'name' => $this->input->post('nama'),
            'qty' => $this->input->post('qty'),
            'price' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
        );
        // var_dump($data);
        $this->cart->insert($data);
        // redirect('Admin/cBahanMasuk/createtransaksi');
        $id = $this->input->post('supplier');
        $supplier = array(
            'supplier' => $this->input->post('supplier'),
            'bahanbaku' => $this->mBahanMasuk->bahanbaku($id)
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/BahanMasuk/vCreateTransaksi', $supplier);
        $this->load->view('Admin/Layout/footer');
    }
    public function delete($id, $id_supplier)
    {
        $this->cart->remove($id);
        $supplier = array(
            'supplier' => $id_supplier,
            'bahanbaku' => $this->mBahanMasuk->bahanbaku($id_supplier)
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/BahanMasuk/vCreateTransaksi', $supplier);
        $this->load->view('Admin/Layout/footer');
    }
    public function selesai_cart($id_supplier)
    {
        $data = array(
            'id_supplier' => $id_supplier,
            'id_user' => 1,
            'tgl_order' => date('Y-m-d'),
            'total_order' => $this->cart->total(),
            'status_order' => '0'
        );
        $this->mBahanMasuk->insert_invoice($data);

        $max_id = $this->mBahanMasuk->max_id_transaski();

        foreach ($this->cart->contents() as $key => $value) {
            $data_detail = array(
                'id_transaksi' => $max_id->max,
                'id_bb' => $value['id'],
                'qty_masuk' => $value['qty'],
                'sisa_stok' => $value['qty'],
                'tgl_masuk' => date('Y-m-d'),
            );
            $this->mBahanMasuk->insert_detail($data_detail);
        }

        redirect('Admin/cBahanMasuk');
    }
    public function bayar($id)
    {
        $config['upload_path'] = './asset/bukti-pembayaran';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
        $config['max_size']     = '5000';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('bukti_pembayaran')) {
            $data = array(
                'pembayaran' => $this->mBahanMasuk->detail_pesanan($id),
                'error_upload' => $this->upload->display_errors()
            );
            $this->load->view('Admin/Layout/head');
            $this->load->view('Admin/Layout/sidebar');
            $this->load->view('Admin/BahanMasuk/vCreatePembayaran.php', $data);
            $this->load->view('Admin/Layout/footer');
        } else {
            $upload_data = $this->upload->data();
            $data = array(
                'status_order' => '1',
                'bukti_pembayaran' => $upload_data['file_name'],
            );
            $this->mBahanMasuk->bayar($id, $data);
            $this->session->set_flashdata('pesan', 'Data Berhasil DiUpload !!!');
            redirect('Admin/cBahanMasuk');
        }
    }

    public function bahanmasuk()
    {
        $data = array(
            'bahan_masuk_selesai' => $this->mBahanMasuk->bahan_masuk_selesai(),
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/BahanMasuk/vBahanBakuMasuk', $data);
        $this->load->view('Admin/Layout/footer');
    }
}

/* End of file cBahanMasuk.php */
