<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Spp extends CI_Controller{
    function __construct(){
        parent::__construct();
		$this->load->model("M_spp");
    }

    function debit(){
        $this->load->view('template/v_header');
        $this->load->view('v_spp_debit');
        $this->load->view('template/v_footer');
    }
	
	function credit(){
        $this->load->view('template/v_header');
        $this->load->view('v_spp_credit');
        $this->load->view('template/v_footer');
    }
	
	public function rekap(){
		// $bulan = $this->input->get('bulan');
		// $data = $this->M_spp->find($bulan);
		
		$bulan = $this->input->get('bulan');
		$data['bulan'] = $this->M_spp->find($bulan);
        $this->load->view('template/v_header');
        $this->load->view('v_spp_rekap', $data);
        $this->load->view('template/v_footer');
    }
	
	function do_add_debit() {
		$post	= $this->input->post(NULL,TRUE);
		$post['status'] = 'Kas Debit';
		$tanggal = $post['tanggal'];
		$tanggal = date('Y-m-d', strtotime($tanggal));
		$this->M_spp->create($post);
		
		redirect ("Spp/debit");
	}
	
	function do_add_credit() {
		$post	= $this->input->post(NULL,TRUE);
		$post['status'] = 'Kas Credit';
		$tanggal = $post['tanggal'];
		$tanggal = date('Y-m-d', strtotime($tanggal));
		$this->M_spp->create($post);
		
		redirect ("Spp/credit");
	}
	
	function view(){
		$data['tanggal'] = $this->M_spp->find();
	}
}