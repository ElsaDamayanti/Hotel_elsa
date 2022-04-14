<?php
   class data_kamar extends CI_Controller{
    function index(){
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('data_kamar/data_kamar');
        $this->load->view('partial_admin/footer');
    }
        
}