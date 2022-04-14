<?php
   class jenis_kamar extends CI_Controller{
    function index(){
          
        $data['tbl_jenis_kamar'] = $this->M_jenis_kamar->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('jenis_kamar/jenis_kamar' , $data);
        $this->load->view('partial_admin/footer');
    }
    function tambah_jenis_kamar()
    {
        $data['tbl_jenis_kamar'] = $this->M_jenis_kamar->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('jenis_kamar/tambah_jenis_kamar');
        $this->load->view('partial_admin/footer');    
    }
    function proses_tambah_jenis_kamar()
    {

        $config['upload_path']          = './foto/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1;
        $config['max_width']            = 1;
        $config['max_height']           = 1;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
       {
                $foto = $this->upload->data();
                $foto = $foto['file_name'];
                $id_jenis = $this->input->post('id_jenis', TRUE);
                $kamar = $this->input->post('kamar', TRUE);
                $harga = $this->input->post('harga', TRUE);
                $keterangan = $this->input->post('keterangan', TRUE);
                $foto = $this->input->post('foto', TRUE);
    
                $data = array(
                    'id_jenis' => $id_jenis,
                    'kamar' => $kamar,
                    'harga' => $harga,
                    'keterangan' => $keterangan,
                    'foto' => $foto,
                );
                $this->db->insert('tbl_jenis_kamar', $data);
                $this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
                       Data berhasil Ditambah!
                       </div>');
                       redirect('jenis_kamar');
        }
}
    function hapus_jenis_kamar($id_jenis_kamar)
    {
        $this->M_jenis_kamar->hapus($id_jenis_kamar);
        redirect (base_url('index.php/jenis_kamar'));
    }
    function update_jenis_kamar($id_jenis)
    {
        $this->load->model('M_jenis_kamar');
        $data['tbl_jenis_kamar'] = $this->M_jenis_kamar->update($id_jenis);
            $this->load->view('partial_admin/header');
            $this->load->view('partial_admin/sidebar');
            $this->load->view('partial_admin/topbar');
            $this->load->view('jenis_kamar/update_jenis_kamar', $data);
            $this->load->view('partial_admin/footer');
    }
    function proses_update_jenis_kamar()
    {
        $data = [
            'id_jenis' => $this->input->post('id_jenis'),
            'kamar' => $this->input->post('kamar'),
            'harga' => $this->input->post('harga'),
            'keterangan' => $this->input->post('keterangan'),
            'foto' => $this->input->post('foto'),
        ];
        $this->db->where('id_jenis', $this->input->post('id_jenis'));
        $this->db->update('tbl_jenis_kamar',$data);
        redirect(base_url('index.php/jenis_kamar'));
   }
}