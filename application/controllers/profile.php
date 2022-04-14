<?php
   class profile extends CI_Controller{
       
    function index(){

        $user = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $user])->row_array();

        $this->load->view('partial_home/header');
        $this->load->view('partial_home/navigasi');
        $this->load->view('content/profile', $data);
        $this->load->view('partial_home/footer');
        $this->load->view('partial_home/modals');
        $this->load->view('partial_home/js');
    }
    function update_profile(){
        $user = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $user])->row_array();
        $this->load->view('partial_home/header');
        $this->load->view('partial_home/navigasi');
        $this->load->view('content/update_profile', $data);
        $this->load->view('partial_home/footer');
        $this->load->view('partial_home/modals');
        $this->load->view('partial_home/js');
    }
    function proses_update_profile(){
        $email = $this->input->post('email');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $no_hp = $this->input->post('no_hp');

            $data =array(
                'nama_lengkap' => $nama_lengkap,
                'no_hp' => $no_hp
            );

            $where =array(
                'email' => $email
            );

            $this->db->where($where);
            $this->db->update('tbl_user', $data);

            redirect(base_url("index.php/profile"));
    }  
    function ganti_password(){
        $user = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $user])->row_array();
        $this->load->view('partial_home/header');
        $this->load->view('partial_home/navigasi');
        $this->load->view('content/ganti_password', $data);
        $this->load->view('partial_home/footer');
        $this->load->view('partial_home/modals');
        $this->load->view('partial_home/js');
    }
    function proses_ganti_password(){
        $email = $this->input->post('email');
        $password1 = $this->input->post('password1');
        $password2 = $this->input->post('password2');

        if ($password1 ==  $password2) {
            $password1 = MD5($password1);

            $data =array(
                'password' => $password1
            );
            $where =array(
                'email' => $email
            );

            $this->db->where($where);
            $this->db->update('tbl_user', $data);
            redirect(base_url("index.php/profile"));
        }else{
            echo "password tidak sama";
            redirect(base_url("index.php/profile/ganti_password"));
        }
    } 
    function pesan_kamar(){
        $data['tbl_transaksi'] = $this->M_transaksi->SemuaData();
      
      
        $this->load->view('partial_home/header');
        $this->load->view('partial_home/navigasi');
        $this->load->view('content/kamar_ini', $data);
        $this->load->view('partial_home/footer');
        $this->load->view('partial_home/modals');
        $this->load->view('partial_home/js');
    }
    function proses_pesan_kamar(){
        $add =[
                        
            'no_ktp' => $this->input->post('no_ktp'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'jenis_kamar' => $this->input->post('jenis_kamar'),
            'no_kamar' => $this->input->post('no_kamar'),
            'tanggal_masuk' => $this->input->post('tanggal_masuk'),
            'tanggal_keluar' => $this->input->post('tanggal_keluar'),
        ];
        $this->db->insert('tbl_transaksi', $add);
        redirect(base_url('index.php/pesan_kamar'));
    }
   }
?>