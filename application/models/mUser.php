<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mUser extends CI_Model
{

    //kelola user
    public function insert_user($data)
    {
        $this->db->insert('user', $data);
    }
    public function select_user()
    {
        $this->db->select('*');
        $this->db->from('user');
        return $this->db->get()->result();
    }
    public function edit_user($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $id);
        return $this->db->get()->row();
    }
    public function update_user($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
    }
    public function delete_user($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }
}

/* End of file mUser.php */
