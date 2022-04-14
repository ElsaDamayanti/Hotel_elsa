<?php
   class transaksi extends CI_Controller{
    function index(){
        $this->load->model('M_transaksi');  
        $data['tbl_pesan_kamar'] = $this->M_transaksi->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('transaksi/transaksi' , $data);
        $this->load->view('partial_admin/footer');
    }

    function hapus_transaksi($no_ktp)
    {
        $this->M_transaksi->hapus($no_ktp);
        redirect (base_url('index.php/transaksi'));
    }
    function update_transaksi($no_ktp)
    {
        $data['tbl_transaksi'] = $this->M_transaksi->update($no_ktp);
            $this->load->view('partial_admin/header');
            $this->load->view('partial_admin/sidebar');
            $this->load->view('partial_admin/topbar');
            $this->load->view('transaksi/update_transaksi', $data);
            $this->load->view('partial_admin/footer');
    }
    function proses_update_transaksi()
    {
        $data = [
            'no_ktp' => $this->input->post('no_ktp'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'jenis_kamar' => $this->input->post('jenis_kamar'),
            'no_kamar' => $this->input->post('no_kamar'),
            'tanggal_masuk' => $this->input->post('tanggal_masuk'),
            'tanggal_keluar' => $this->input->post('tanggal_keluar'),
                  ];

        $this->db->where('no_ktp', $this->input->post('no_ktp'));
        $this->db->update('tbl_transaksi',$data);
        redirect(base_url('index.php/transaksi'));
   }
}
?>