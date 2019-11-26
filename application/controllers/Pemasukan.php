<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Pemasukan extends CI_Controller{
    function __construct(){
        parent::__construct();

    }

    function pemasukan_kas(){
        $this->load->view('template/v_header');
        $this->load->view('v_pemasukan');
        $this->load->view('template/v_footer');
    }
	
}