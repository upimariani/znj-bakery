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

    //return barang
    public function return()
    {
        $this->db->select('*');
        $this->db->from('retur_bb');
        $this->db->join('bb_masuk', 'bb_masuk.id_bb_masuk = retur_bb.id_bb_masuk', 'left');
        $this->db->join('bahanbaku', 'bahanbaku.id_bb = bb_masuk.id_bb', 'left');
        $this->db->join('invoice_bb', 'invoice_bb.id_transaksi = bb_masuk.id_transaksi', 'left');
        $this->db->join('supplier', 'supplier.id_supplier = bahanbaku.id_supplier', 'left');

        $this->db->where('supplier.id_supplier', $this->session->userdata('id_supplier'));
        return $this->db->get()->result();
    }
}

/* End of file mBahanBaku.php */
