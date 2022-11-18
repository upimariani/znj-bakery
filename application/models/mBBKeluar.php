<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mBBKeluar extends CI_Model
{
    public function bb()
    {
        $this->db->select('*');
        $this->db->from('bb_masuk');
        $this->db->join('invoice_bb', 'bb_masuk.id_transaksi = invoice_bb.id_transaksi', 'left');
        $this->db->join('bahanbaku', 'bb_masuk.id_bb = bahanbaku.id_bb', 'left');
        return $this->db->get()->result();
    }
    public function insert_bb_keluar($data)
    {
        $this->db->insert('bb_keluar', $data);
    }
    public function update_stok($id, $data)
    {
        $this->db->where('id_bb_masuk', $id);
        $this->db->update('bb_masuk', $data);
    }
    public function bb_keluar()
    {
        $this->db->select('*');
        $this->db->from('bb_keluar');
        $this->db->join('bb_masuk', 'bb_keluar.id_bb_masuk = bb_masuk.id_bb_masuk', 'left');
        $this->db->join('invoice_bb', 'invoice_bb.id_transaksi = bb_masuk.id_transaksi', 'left');
        $this->db->join('bahanbaku', 'bahanbaku.id_bb = bb_masuk.id_bb', 'left');
        return $this->db->get()->result();
    }
}

/* End of file mBBKeluar.php */
