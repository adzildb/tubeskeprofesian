<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Adduser extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('template/v_header');
        $this->load->view('v_adduser');
    }

    function adduser() {
    }

