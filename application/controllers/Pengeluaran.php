<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Pengeluaran extends CI_Controller{
    function __construct(){
        parent::__construct();
        $level = $this->session->userdata('level');
        if ($level == NULL){
            redirect("login");
        }
        $this->load->model("M_pengeluaran");
    }

    function pengeluaran_kas(){
        $bulan = $this->input->get('bulan');
        $data['bulan'] = $this->M_pengeluaran->find($bulan);
        $data['username'] = $this->session->userdata('username');
        $data['level'] = $this->session->userdata('level');
        $this->load->view('template/v_header', $data);
        $this->load->view('v_pengeluaran', $data);
        $this->load->view('template/v_footer');
    }

}