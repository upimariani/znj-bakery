<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboardAdmin extends CI_Controller
{

    public function index()
    {
        $this->load->view('Admin/Layout/head');

        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/vDashboardAdmin');
        $this->load->view('Admin/Layout/footer');
    }
}

/* End of file cDashboardAdmin.php */
