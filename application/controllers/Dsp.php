<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Dsp extends CI_Controller{
    function __construct(){
		parent::__construct();
		$level = $this->session->userdata('level');
        if (!$level == 0 and !$level == 1){
            redirect("login");
        }
		$this->load->model("M_dsp");
    }

    function debit(){
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
        $this->load->view('template/v_header', $data);
        $this->load->view('v_dsp_debit');
        $this->load->view('template/v_footer');
    }
	
	function credit(){
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
        $this->load->view('template/v_header', $data);
        $this->load->view('v_dsp_credit');
        $this->load->view('template/v_footer');
    }
	
	public function rekap(){
		// $bulan = $this->input->get('bulan');
		// $data = $this->M_spp->find($bulan);
		
		$bulan = $this->input->get('bulan');
		$data['bulan'] = $this->M_dsp->find($bulan);
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
        $this->load->view('template/v_header', $data);
        $this->load->view('v_dsp_rekap', $data);
        $this->load->view('template/v_footer');
    }
	
	function do_add_debit() {
		$post	= $this->input->post(NULL,TRUE);
		$post['status'] = 'Kas Debit';
		$post['jenis'] = 'DSP';
		$tanggal = $post['tanggal'];
		$tanggal = date('Y-m-d', strtotime($tanggal));
		$this->M_dsp->create($post);
		
		redirect ("Dsp/debit");
	}
	
	function do_add_credit() {
		$post	= $this->input->post(NULL,TRUE);
		$post['status'] = 'Kas Credit';
		$post['jenis'] = 'DSP';
		$tanggal = $post['tanggal'];
		$tanggal = date('Y-m-d', strtotime($tanggal));
		$this->M_dsp->create($post);
		
		redirect ("Dsp/credit");
	}
	
	
}