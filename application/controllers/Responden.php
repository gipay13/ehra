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
		$data = [
			'provinsi' => $this->input->post('provinsi'),
			'kabupaten' => $this->input->post('kabupaten'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kelurahan' => $this->input->post('kelurahan'),
			'koordinator' => $this->input->post('koordinator'),
			'kecamatan' => $this->input->post('kecamatan'),
			'tanggalSurvey' => $this->input->post('tanggalSurvey'),
			'waktu' => $this->input->post('waktu'),
			'pewawancara' => $this->input->post('pewawancara'),
			'supervisor' => $this->input->post('supervisor'),
			'kepalaRumah' => $this->input->post('kepalaRumah'),
			'jumlahJiwaLaki' => $this->input->post('jumlahJiwaLaki'),
			'jumlahJiwaPr' => $this->input->post('jumlahJiwaPr'),
			'jumlahJiwaLaki' => $this->input->post('jumlahJiwaLaki'),
			'hubungan' => $this->input->post('hubungan'),
			'alamat' => $this->input->post('alamat'),
		];

		echo '<pre>';
		print_r($data);
		die;
	}
}
