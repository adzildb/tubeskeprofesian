<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        $this->load->model("m_login");
    }

    function index(){
        $this->load->view('template_login/v_header');
        $this->load->view('v_login');
    }

    function do_login() {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        
        $where = array(
         "username" => $username,
         "password" => md5($password)
         );
        $result = $this->m_login->read($where);
       // print_r($this->db->last_query());


       if (count($result) !=0) {
         $level = $result[0]->level;
         
         $this->session->set_userdata("level", $level);
         $username = $result[0]->username;
         $this->session->set_userdata("username", $username);
         redirect("index");
       }else  {
         //feedback login gagal
         
         redirect("login/index");
        }
         
       }
       
       function logout() {
        $this->session->sess_destroy();
        redirect("login");
       }
      }

