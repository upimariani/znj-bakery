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
}

/* End of file cDashboard.php */
