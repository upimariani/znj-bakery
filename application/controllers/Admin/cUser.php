<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cUser extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mUser');
    }

    public function index()
    {
        $this->protect->proteksi_halaman();
        $data = array(
            'user' => $this->mUser->select_user()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/User/vUser', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function createUser()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No Telepon', 'required|min_length[11]|max_length[13]');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level_user', 'Level User', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'user' => $this->mUser->select_user()
            );
            $this->load->view('Admin/Layout/head');
            $this->load->view('Admin/Layout/sidebar');
            $this->load->view('Admin/User/vCreateUser', $data);
            $this->load->view('Admin/Layout/footer');
        } else {
            $data = array(
                'nama_user' => $this->input->post('nama'),
                'alamat_user' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'level_user' => $this->input->post('level_user'),
            );
            $this->mUser->insert_user($data);
            $this->session->set_flashdata('success', 'Data User Berhasil Ditambahkan!!!');
            redirect('Admin/cUser');
        }
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No Telepon', 'required|min_length[11]|max_length[13]');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level_user', 'Level User', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'user' => $this->mUser->edit_user($id)
            );
            $this->load->view('Admin/Layout/head');
            $this->load->view('Admin/Layout/sidebar');
            $this->load->view('Admin/User/vUpdateUser', $data);
            $this->load->view('Admin/Layout/footer');
        } else {
            $data = array(
                'nama_user' => $this->input->post('nama'),
                'alamat_user' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'level_user' => $this->input->post('level_user'),
            );
            $this->mUser->update_user($id, $data);
            $this->session->set_flashdata('success', 'Data User Berhasil Diperbaharui!!!');
            redirect('Admin/cUser');
        }
    }
    public function delete($id)
    {
        $this->mUser->delete_user($id);
        $this->session->set_flashdata('success', 'Data User Berhasil Dihapus!!!');
        redirect('Admin/cUser');
    }
}

/* End of file cUser.php */
