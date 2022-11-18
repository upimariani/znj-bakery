<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Mohon Untuk Diisi!!'));


		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->protect->login($username, $password);
		} else {
			$data = array('title' => 'Login User',);
			$this->load->view('login', $data, FALSE);
		}
	}

	public function logout_user()
	{
		$this->protect->logout();
	}
	public function supplier()
	{
		$this->form_validation->set_rules('username_supplier', 'Username_supplier', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('password_supplier', 'Password_supplier', 'required', array('required' => '%s Mohon Untuk Diisi!!'));


		if ($this->form_validation->run() == TRUE) {
			$username_supplier = $this->input->post('username_supplier');
			$password_supplier = $this->input->post('password_supplier');
			$this->protection->login($username_supplier, $password_supplier);
		} else {
			$data = array('title' => 'Login Supplier',);
			$this->load->view('supplier/login', $data, FALSE);
		}
	}

	public function logout_supplier()
	{
		$this->protection->logout();
	}
}
