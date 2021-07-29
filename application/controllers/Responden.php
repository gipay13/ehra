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
		$data['supervisor'] = $this->RespondenModel->supevisor();
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

	public function fetch_district() {
		if($this->input->post('id')) {
			echo $this->RespondenModel->district($this->input->post('id'));
		}
	}

	public function fetch_village() {
		if($this->input->post('id')) {
			echo $this->RespondenModel->village($this->input->post('id'));
		}
	}

	public function fetch_koordinator() {
		if($this->input->post('id')) {
			echo $this->RespondenModel->koordinator($this->input->post('id'));
		}
	}

	public function store() {

	}
}
