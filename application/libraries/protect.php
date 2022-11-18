<?php

defined('BASEPATH') or exit('No direct script access allowed');

class protect
{
	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('m_auth');
	}

	public function login($username, $password)
	{
		$cek = $this->ci->m_auth->protect($username, $password);

		if ($cek) {
			$username = $cek->username;
			$password = $cek->password;
			$level_user = $cek->level_user;
			$id_user = $cek->id_user;
			$nama_user = $cek->nama_user;
			$alamat_user = $cek->alamat_user;
			$no_hp = $cek->no_hp;

			$this->ci->session->set_userdata('nama_user', $nama_user);
			$this->ci->session->set_userdata('alamat_user', $alamat_user);
			$this->ci->session->set_userdata('no_hp', $no_hp);
			$this->ci->session->set_userdata('username', $username);
			$this->ci->session->set_userdata('password', $password);
			$this->ci->session->set_userdata('level_user', $level_user);
			$this->ci->session->set_userdata('id_user', $id_user);

			if ($level_user == 1) {
				redirect('Admin/cDashboardAdmin');
			} elseif ($level_user == 2) {
				redirect('Pimpinan/cDashboardPimpinan');
			}
		} else {
			$this->ci->session->set_flashdata('error', 'Username atau Password Salah');
			redirect('auth');
		}
	}

	public function proteksi_halaman()
	{
		if ($this->ci->session->userdata('username') == '') {
			$this->ci->session->set_flashdata('error', 'Maaf Anda Belum Login!!!');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('nama_user');
		$this->ci->session->unset_userdata('alamat_user');
		$this->ci->session->unset_userdata('no_hp');
		$this->ci->session->unset_userdata('username');
		$this->ci->session->unset_userdata('password');
		$this->ci->session->unset_userdata('level_user');
		$this->ci->session->set_flashdata('pesan', 'Berhasil LogOut!!!');
		redirect('auth');
	}
}
