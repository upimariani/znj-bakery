<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mBahanBaku extends CI_Model
{
    public function bahan_baku()
    {
        $this->db->select('*');
        $this->db->from('bahanbaku');
        $this->db->join('supplier', 'supplier.id_supplier = bahanbaku.id_supplier', 'left');
        $this->db->where('bahanbaku.id_supplier', $this->session->userdata('id_supplier'));

        return $this->db->get()->result();
    }
    public function insert($data)
    {
        $this->db->insert('bahanbaku', $data);
    }
    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('bahanbaku');
        $this->db->where('id_bb', $id);
        return $this->db->get()->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id_bb', $id);
        $this->db->update('bahanbaku', $data);
    }
    public function delete($id)
    {
        $this->db->where('id_bb', $id);
        $this->db->delete('bahanbaku');
    }
}

/* End of file mBahanBaku.php */
