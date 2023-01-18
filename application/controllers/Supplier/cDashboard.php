<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

    public function index()
    {
        $this->protection->proteksi_halaman();
        $this->load->view('Supplier/Layout/head');
        $this->load->view('Supplier/Layout/sidebar');
        $this->load->view('Supplier/vDashboardSupplier');
        $this->load->view('Supplier/Layout/footer');
    }
    public function penawaran($id)
    {
        $data = array(
            'id_bb' => $id,
            'qty_penawaran' => $this->input->post('qty'),
            'konfirmasi' => '0'
        );
        $this->db->insert('penawaran', $data);
        $this->session->set_flashdata('success', 'Penawaran Berhasil Dikirimkan!!!');
        redirect('Supplier/cDashboard');
    }
}

/* End of file cDashboard.php */
