<?php
   class kamar extends CI_Controller{
    function index(){
          
        $data['tbl_kamar'] = $this->M_kamar->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('kamar/kamar' , $data);
        $this->load->view('partial_admin/footer');
    }
    function tambah_kamar()
    {
        $data['tbl_kamar'] = $this->M_kamar->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('kamar/tambah_kamar');
        $this->load->view('partial_admin/footer');    
    }
    function proses_tambah_kamar()
    {

        $add =[
            'nomor_kamar' => $this->input->post('nomor_kamar'),
            'id_jenis' => $this->input->post('id_jenis'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->db->insert('tbl_kamar', $add);
        redirect(base_url('index.php/kamar'));
    }
    function hapus_kamar($id_kamar)
    {
        $this->M_kamar->hapus($id_kamar);
        redirect (base_url('index.php/kamar'));
    }
    function update_kamar($id_kamar)
    {
        $data['tbl_kamar'] = $this->M_kamar->update($id_kamar);
            $this->load->view('partial_admin/header');
            $this->load->view('partial_admin/sidebar');
            $this->load->view('partial_admin/topbar');
            $this->load->view('kamar/update_kamar', $data);
            $this->load->view('partial_admin/footer');
    }
    function proses_update_kamar()
    {
        $data = [
            'nomor_kamar'    => $this->input->post('nomor_kamar'),
            'id_jenis'       => $this->input->post('id_jenis'),
            'keterangan'     => $this->input->post('keterangan'),
        ];
        $this->db->where('id_kamar', $this->input->post('id_kamar'));
        $this->db->update('tbl_kamar',$data);
        redirect(base_url('index.php/kamar'));
   }
}
?>