<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mTransaksiSupplier extends CI_Model
{
    public function transaski()
    {
        $this->db->select('*');
        $this->db->from('invoice_bb');
        $this->db->join('user', 'user.id_user = invoice_bb.id_user', 'left');
        $this->db->join('supplier', 'supplier.id_supplier = invoice_bb.id_supplier', 'left');
        $this->db->order_by('invoice_bb.id_transaksi', 'desc');
        
    
        return $this->db->get()->result();
    }
}

/* End of file mTransaksiSupplier.php */
