<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mReturn extends CI_Model
{
    public function select()
    {
        $this->db->select('*');
        $this->db->from('retur_bb');
        $this->db->join('bb_masuk', 'bb_masuk.id_bb_masuk = retur_bb.id_bb_masuk', 'left');
        $this->db->join('bahanbaku', 'bahanbaku.id_bb = bb_masuk.id_bb', 'left');
        $this->db->join('invoice_bb', 'invoice_bb.id_transaksi = bb_masuk.id_transaksi', 'left');
        return $this->db->get()->result();
    }
    public function bb_masuk()
    {
        $this->db->select('*');
        $this->db->from('bb_masuk');
        $this->db->join('bahanbaku', 'bahanbaku.id_bb = bb_masuk.id_bb', 'left');

        $this->db->join('invoice_bb', 'invoice_bb.id_transaksi = bb_masuk.id_transaksi', 'left');
        $this->db->where('sisa_stok !=0');
        return $this->db->get()->result();
    }
    public function insert($data)
    {
        $this->db->insert('retur_bb', $data);
    }
    public function update_stok($id, $data)
    {
        $this->db->where('id_bb_masuk', $id);
        $this->db->update('bb_masuk', $data);
    }
}

/* End of file mReturn.php */
