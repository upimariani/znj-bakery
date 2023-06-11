<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboardAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mDashboard');
    }


    public function index()
    {
        $this->protect->proteksi_halaman();
        $data = array(
            'stok_bb' => $this->mDashboard->stok_bb(),
            'info_bb' => $this->mDashboard->info_bb(),
            'transaksi_belum_bayar' => $this->mDashboard->transaksi_belum_bayar()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/vDashboardAdmin', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function tolak($id_penawaran)
    {
        $this->db->where('id_penawaran', $id_penawaran);
        $this->db->delete('penawaran');
        $this->session->set_flashdata('success', 'Penawaran Ditolak!!!');
        redirect('Admin/cDashboardAdmin');
    }
}

/* End of file cDashboardAdmin.php */
