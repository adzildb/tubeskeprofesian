<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Pengeluaran extends CI_Controller{
    function __construct(){
        parent::__construct();

    }

    function pengeluaran_kas(){
        $this->load->view('template/v_header');
        $this->load->view('v_pengeluaran');
        $this->load->view('template/v_footer');
    }
	
}