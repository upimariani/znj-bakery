<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cSupplier extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mSupplier');
    }

    public function index()
    {
        $this->protect->proteksi_halaman();
        $data = array(
            'supplier' => $this->mSupplier->select_supplier()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/supplier/vsupplier', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function createsupplier()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No Telepon', 'required|min_length[11]|max_length[13]');
        $this->form_validation->set_rules('nama_toko', 'Nama Toko', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'supplier' => $this->mSupplier->select_supplier()
            );
            $this->load->view('Admin/Layout/head');
            $this->load->view('Admin/Layout/sidebar');
            $this->load->view('Admin/supplier/vCreatesupplier', $data);
            $this->load->view('Admin/Layout/footer');
        } else {
            $data = array(
                'nama_supplier' => $this->input->post('nama'),
                'alamat_supplier' => $this->input->post('alamat'),
                'no_hp_supplier' => $this->input->post('no_hp'),
                'nama_toko' => $this->input->post('nama_toko'),
                'username_supplier' => $this->input->post('username'),
                'password_supplier' => $this->input->post('password'),
            );
            $this->mSupplier->insert_supplier($data);
            $this->session->set_flashdata('success', 'Data supplier Berhasil Ditambahkan!!!');
            redirect('Admin/cSupplier');
        }
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No Telepon', 'required|min_length[11]|max_length[13]');
        $this->form_validation->set_rules('nama_toko', 'Nama Toko', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'supplier' => $this->mSupplier->edit_supplier($id)
            );
            $this->load->view('Admin/Layout/head');
            $this->load->view('Admin/Layout/sidebar');
            $this->load->view('Admin/supplier/vUpdatesupplier', $data);
            $this->load->view('Admin/Layout/footer');
        } else {
            $data = array(
                'nama_supplier' => $this->input->post('nama'),
                'alamat_supplier' => $this->input->post('alamat'),
                'no_hp_supplier' => $this->input->post('no_hp'),
                'nama_toko' => $this->input->post('nama_toko'),
                'username_supplier' => $this->input->post('username'),
                'password_supplier' => $this->input->post('password'),
            );
            $this->mSupplier->update_supplier($id, $data);
            $this->session->set_flashdata('success', 'Data supplier Berhasil Diperbaharui!!!');
            redirect('Admin/cSupplier');
        }
    }
    public function delete($id)
    {
        $this->mSupplier->delete_supplier($id);
        $this->session->set_flashdata('success', 'Data supplier Berhasil Dihapus!!!');
        redirect('Admin/cSupplier');
    }
}

/* End of file cSupplier.php */
