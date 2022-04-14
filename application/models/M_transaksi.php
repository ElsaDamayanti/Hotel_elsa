<?php
    class M_transaksi extends CI_Model{
        function transaksi(){ 
            return $this->db->get('tbl_transaksi'); 
        }
        function SemuaData()
        {
            return $this->db->get('tbl_transaksi')->result_array();
        }
        function update($no_ktp)
        {
            return $this->db->get_where('tbl_transaksi',['no_ktp'=> $no_ktp])->row_array();
        }
        function hapus($no_ktp)
        {
            $this->db->where('no_ktp',$no_ktp);
            $this->db->delete('tbl_transaksi');
        }
    }
?>