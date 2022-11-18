<?php

defined('BASEPATH') or exit('No direct script access allowed');

class protection
{
	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('m_auth');
	}

	public function login($username_supplier, $password_supplier)
	{
		$cek = $this->ci->m_auth->protection($username_supplier, $password_supplier);

		if ($cek) {
			$username_supplier = $cek->username_supplier;
			$password_supplier = $cek->password_supplier;
			$nama_toko = $cek->nama_toko;
			$id_supplier = $cek->id_supplier;
			$nama_supplier = $cek->nama_supplier;
			$alamat_supplier = $cek->alamat_supplier;
			$no_hp_supplier = $cek->no_hp_supplier;

			$this->ci->session->set_userdata('nama_supplier', $nama_supplier);
			$this->ci->session->set_userdata('alamat_supplier', $alamat_supplier);
			$this->ci->session->set_userdata('no_hp_supplier', $no_hp_supplier);
			$this->ci->session->set_userdata('username_supplier', $username_supplier);
			$this->ci->session->set_userdata('password_supplier', $password_supplier);
			$this->ci->session->set_userdata('nama_toko', $nama_toko);
			$this->ci->session->set_userdata('id_supplier', $id_supplier);


			redirect('Supplier/cDashboard');
		} else {
			$this->ci->session->set_flashdata('error', 'username_supplier atau password_supplier Salah');
			redirect('auth/supplier');
		}
	}

	public function proteksi_halaman()
	{
		if ($this->ci->session->userdata('username_supplier') == '') {
			$this->ci->session->set_flashdata('error', 'Maaf Anda Belum Login!!!');
			redirect('auth/supplier');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('nama_supplier');
		$this->ci->session->unset_userdata('alamat_supplier');
		$this->ci->session->unset_userdata('no_hp_supplier');
		$this->ci->session->unset_userdata('username_supplier');
		$this->ci->session->unset_userdata('password_supplier');
		$this->ci->session->unset_userdata('nama_toko');
		$this->ci->session->set_flashdata('pesan', 'Berhasil LogOut!!!');
		redirect('auth/supplier');
	}
}
