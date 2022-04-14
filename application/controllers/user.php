<?php
   class user extends CI_Controller{
    function index(){

        $user = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $user])->row_array();

        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('admin/user', $data);
        $this->load->view('partial_admin/footer');
    }
    function update_user(){
        $user = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $user])->row_array();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('admin/update_user', $data);
        $this->load->view('partial_admin/footer');
      
       
    }
    function proses_update_user(){
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

            redirect(base_url("index.php/user"));
    }  
    function ganti_password(){
        $user = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $user])->row_array();
            $this->load->view('partial_admin/header');
            $this->load->view('partial_admin/sidebar');
            $this->load->view('partial_admin/topbar');
            $this->load->view('admin/ganti_password', $data);
            $this->load->view('partial_admin/footer');
           
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
            redirect(base_url("index.php/user"));
        }else{
            echo "password tidak sama";
            redirect(base_url("index.php/user/ganti_password"));
        }
    } 
   }
?>