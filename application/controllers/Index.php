<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Index extends CI_Controller{
    function __construct(){
        
        parent::__construct();
        $level = $this->session->userdata('level');
        if ($level == NULL){
            redirect("login");
        }
    }

    function index(){
        $data['username'] = $this->session->userdata('username');
        $data['level'] = $this->session->userdata('level');
        $this->load->view('template/v_header', $data);
        $this->load->view('v_index');
        $this->load->view('template/v_footer');
    }
}