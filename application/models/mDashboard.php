<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDashboard extends CI_Model
{
    //dashboard admin
    public function stok_bb()
    {
        $this->db->select('*');
        $this->db->from('bb_masuk');
        $this->db->join('invoice_bb', 'bb_masuk.id_transaksi = invoice_bb.id_transaksi', 'left');
        $this->db->join('bahanbaku', 'bahanbaku.id_bb = bb_masuk.id_bb', 'left');
        return $this->db->get()->result();
    }
    public function transaksi_belum_bayar()
    {
        $this->db->select('*');
        $this->db->from('invoice_bb');
        $this->db->where('status_order=0');

        return $this->db->get()->result();
    }
}

/* End of file mDashboard.php */
