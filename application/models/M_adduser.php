<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class M_adduser extends CI_Model{
    function add($data) {
        $this->db->insert("login",$data); 
       }

}