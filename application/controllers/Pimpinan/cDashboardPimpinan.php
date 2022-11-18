<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboardPimpinan extends CI_Controller
{

    public function index()
    {
        $this->protect->proteksi_halaman();
        $this->load->view('Pimpinan/Layout/head');
        $this->load->view('Pimpinan/Layout/sidebar');
        $this->load->view('Pimpinan/vDashboardPimpinan');
        $this->load->view('Pimpinan/Layout/footer');
    }
}

/* End of file cDashboardPimpinan.php */
