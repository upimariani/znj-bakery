<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mSupplier extends CI_Model
{
    public function insert_supplier($data)
    {
        $this->db->insert('supplier', $data);
    }
    public function select_supplier()
    {
        $this->db->select('*');
        $this->db->from('supplier');
        return $this->db->get()->result();
    }
    public function edit_supplier($id)
    {
        $this->db->select('*');
        $this->db->from('supplier');
        $this->db->where('id_supplier', $id);
        return $this->db->get()->row();
    }
    public function update_supplier($id, $data)
    {
        $this->db->where('id_supplier', $id);
        $this->db->update('supplier', $data);
    }
    public function delete_supplier($id)
    {
        $this->db->where('id_supplier', $id);
        $this->db->delete('supplier');
    }
}

/* End of file mSupplier.php */
