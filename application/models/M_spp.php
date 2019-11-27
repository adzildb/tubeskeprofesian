<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class M_spp extends CI_Model{
    
 
	function find($bln){
		//Query mencari record berdasarkan ID-nya
		// $this->db->from('kas');
		// $bulan2 = date("m",strtotime($bulan));
		
		$this->db->where('MONTH(tanggal)',$bln);
		$query = $this->db->get('kas');
		
		return $query->result();
	}
	
	function create($data) {
	 $this->db->insert("kas",$data);	
	}

}