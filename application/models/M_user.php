<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class M_user extends CI_Model{
    function add($data) {
        $this->db->insert("login",$data); 
       }

    function read($where="", $order=""){
        if (!empty($where)) $this->db->where($where);
        if (!empty($order)) $this->db->where($order);
        
        $query = $this->db->get("login");
        if ($query->num_rows()!=0){
            return $query->result();
        } else {
            return array();
        }
    }

    function find($user){
        $hasil = $this->db->where('username', $user)
                          ->limit(1)
                          ->get('login');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        }else{
            return array();
        }
    }

    function edit($where, $data){
        $this->db->where($where);
        $this->db->update("login",$data);
    }

    function delete($where){
        $this->db->where($where);
        $this->db->delete("login");
    }
}