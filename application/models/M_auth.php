<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{

	public function protect($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array('username' => $username, 'password' => $password));
		return $this->db->get()->row();
	}
	public function protection($username_supplier, $password_supplier)
	{
		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->where(array('username_supplier' => $username_supplier, 'password_supplier' => $password_supplier));
		return $this->db->get()->row();
	}


	//login supplier
	public function login_supplier($username, $password)
	{
		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->where(array('username_supplier' => $username, 'password_supplier' => $password));
		return $this->db->get()->row();
	}
}
