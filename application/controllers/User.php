<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class User extends CI_Controller{
    function __construct(){
        parent::__construct();
        $level = $this->session->userdata('level');
        if (!$level == 0){
            redirect("login");
        }
        $this->load->model("M_user");
    }

    function adduser(){
        $data['username'] = $this->session->userdata('username');
        $data['level'] = $this->session->userdata('level');
        $this->load->view('template/v_header', $data);
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
            
            redirect ("user/adduser");
        }    
    
    function viewuser() {
        $data['result'] = $this->M_user->read();
        $data['username'] = $this->session->userdata('username');
        $data['level']    = $this->session->userdata('level');
        $this->load->view('template/v_header', $data);
        $this->load->view('v_viewuser', $data);
        $this->load->view('template/v_footer');
    }

    

    function edit($username){
        $data['username']   = $this->session->userdata('username');
        
        $result = $this->M_user->read("username = '$username'");
        $data['result'] = $result[0];
        $data['form_edit'] = TRUE;
        $this->load->view('template/v_header', $data);
        $this->load->view('v_viewedit', $data);
        $this->load->view('template/v_footer');
    }

    function do_edit($user){
        $post       = $this->input->post(NULL,TRUE);
        $password   = $post['password'];
        $post['password']   = md5($password);
        $this->M_user->edit("username = '$user'",$post);
        redirect("user/viewuser");
    }

    function delete($username){
        $this->M_user->delete("username = '$username'");
        redirect('user/viewuser');
    }
}
