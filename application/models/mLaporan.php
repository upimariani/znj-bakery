<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLaporan extends CI_Model
{

    //---------laporan biasa------------
    public function lap_harian($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('invoice_bb');
        $this->db->join('bb_masuk', 'invoice_bb.id_transaksi = bb_masuk.id_transaksi', 'left');
        $this->db->join('user', 'invoice_bb.id_user = user.id_user', 'left');
        $this->db->where('DAY(tgl_order)', $tanggal);
        $this->db->where('MONTH(tgl_order)', $bulan);
        $this->db->where('YEAR(tgl_order)', $tahun);
        return $this->db->get()->result();
    }

    public function lap_bulanan($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('invoice_bb');
        $this->db->join('bb_masuk', 'invoice_bb.id_transaksi = bb_masuk.id_transaksi', 'left');
        $this->db->join('user', 'invoice_bb.id_user = user.id_user', 'left');
        $this->db->where('MONTH(tgl_order)', $bulan);
        $this->db->where('YEAR(tgl_order)', $tahun);
        return $this->db->get()->result();
    }

    public function lap_tahunan($tahun)
    {
        $this->db->select('*');
        $this->db->from('invoice_bb');
        $this->db->join('bb_masuk', 'invoice_bb.id_transaksi = bb_masuk.id_transaksi', 'left');
        $this->db->join('user', 'invoice_bb.id_user = user.id_user', 'left');
        $this->db->where('YEAR(tgl_order)', $tahun);
        return $this->db->get()->result();
    }


    //laporan bahan baku masuk
    public function bahan_baku_masuk()
    {
        $this->db->select('*');
        $this->db->from('bb_masuk');
        $this->db->join('bahanbaku', 'bahanbaku.id_bb = bb_masuk.id_bb', 'left');
        $this->db->join('invoice_bb', 'invoice_bb.id_transaksi = bb_masuk.id_transaksi', 'left');

        return $this->db->get()->result();
    }

    public function bahan_baku_keluar()
    {
        $this->db->select('*');
        $this->db->from('bb_keluar');
        $this->db->join('bb_masuk', 'bb_keluar.id_bb_masuk = bb_masuk.id_bb_masuk', 'left');
        $this->db->join('bahanbaku', 'bahanbaku.id_bb = bb_masuk.id_bb', 'left');
        return $this->db->get()->result();
    }
}

/* End of file mLaporan.php */
