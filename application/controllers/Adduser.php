<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Adduser extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model("M_adduser");
    }

    function index(){
            $this->load->view('template/v_header');
            $this->load->view('v_adduser');
            $this->load->view('template/v_footer');
        }

    function do_add() {
            $post = $this->input->post(NULL,TRUE);
            $post['level'] = 1;
            $password = $post['password'];
            $post['password'] = md5($password);
            //$this->load->model("M_adduser/add");
            $this->M_adduser->add($post);
            
            redirect ("Adduser/index");
        }    
}
