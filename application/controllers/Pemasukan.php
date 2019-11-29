<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Pemasukan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $level = $this->session->userdata('level');
        if ($level == NULL){
            redirect("login");
        }
        $this->load->model("M_pemasukan");
    }

    function pemasukan_kas(){
        $bulan = $this->input->get('bulan');
        $data['username'] = $this->session->userdata('username');
        $data['bulan'] = $this->M_pemasukan->find($bulan);
        $data['level'] = $this->session->userdata('level');
        $this->load->view('template/v_header', $data);
        $this->load->view('v_pemasukan', $data);
        $this->load->view('template/v_footer');
    }
	
}