<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cReturn extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mBahanBaku');
    }



    public function index()
    {
        $data = array(
            'return' => $this->mBahanBaku->return()
        );
        $this->load->view('Supplier/Layout/head');
        $this->load->view('Supplier/Layout/sidebar');
        $this->load->view('Supplier/vReturnSupplier', $data);
        $this->load->view('Supplier/Layout/footer');
    }
}

/* End of file cReturn.php */
