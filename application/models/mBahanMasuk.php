<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mBahanMasuk extends CI_Model
{
    public function bahanbaku($id)
    {
        $this->db->select('*');
        $this->db->from('bahanbaku');
        $this->db->join('supplier', 'bahanbaku.id_supplier = supplier.id_supplier', 'left');
        $this->db->where('bahanbaku.id_supplier', $id);
        return $this->db->get()->result();
    }
    public function insert_invoice($data)
    {
        $this->db->insert('invoice_bb', $data);
    }
    public function insert_detail($data)
    {
        $this->db->insert('bb_masuk', $data);
    }
    public function max_id_transaski()
    {
        return $this->db->query("SELECT MAX(id_transaksi) as max FROM `invoice_bb`")->row();
    }

    public function bahan_masuk()
    {
        $this->db->select('*');
        $this->db->from('invoice_bb');
        $this->db->join('supplier', 'supplier.id_supplier = invoice_bb.id_supplier', 'left');

        return $this->db->get()->result();
    }
    public function bahan_masuk_selesai()
    {
        $this->db->select('*');
        $this->db->from('bb_masuk');
        $this->db->join('bahanbaku', 'bb_masuk.id_bb = bahanbaku.id_bb', 'left');
        $this->db->join('invoice_bb', 'bb_masuk.id_transaksi = invoice_bb.id_transaksi', 'left');
        $this->db->where('status_order=', 2);
        $this->db->order_by('bb_masuk.id_bb', 'desc');
        return $this->db->get()->result();
    }
    public function detail_pesanan($id_transaksi)
    {
        $this->db->select('*');
        $this->db->from('invoice_bb');
        $this->db->where('id_transaksi', $id_transaksi);
        return $this->db->get()->row();
    }
    public function bayar($id, $data)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->update('invoice_bb', $data);
    }
}

/* End of file mBahanMasuk.php */
