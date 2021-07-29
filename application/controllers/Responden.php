<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Responden extends CI_Controller {
	function __construct()
    {
        parent::__construct();
		$this->load->model('RespondenModel');
		if(!$this->session->userdata('username')) 
			redirect('auth');	
    }

	public function index() {
		$data['provinces'] = $this->RespondenModel->provinces();
		$this->load->view('layouts/head');
		$this->load->view('layouts/nav');
		$this->load->view('pages/responden-page', $data);
		$this->load->view('layouts/footer');
	}

	public function fetch_regencies() {
		if($this->input->post('id')) {
			echo $this->RespondenModel->regencies($this->input->post('id'));
		}
	}

	public function store() {

	}
}
