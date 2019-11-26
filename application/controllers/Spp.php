<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Spp extends CI_Controller{
    function __construct(){
        parent::__construct();

    }

    function debit(){
        $this->load->view('template/v_header');
        $this->load->view('v_spp_debit');
        $this->load->view('template/v_footer');
    }
}