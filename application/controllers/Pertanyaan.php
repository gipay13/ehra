<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {
	public $CI = NULL;
	
	function __construct()
    {
        parent::__construct();
		$this->load->model('PertanyaanModel');
		if(!$this->session->userdata('username')) 
			redirect('auth');	
		$this->CI = & get_instance();
    }

	public function index($kode) {
		$data['kategori'] = $this->PertanyaanModel->kategoriPertanyaan($kode);
		

		// echo '<pre>';
		// print_r($data);
		// die;

		$this->load->view('layouts/head');
		$this->load->view('layouts/nav');
		$this->load->view('pages/pertanyaan-page', $data);
		$this->load->view('layouts/footer');
	}
	
	public function pertanyaan($value) {
		$data = $this->PertanyaanModel->pertanyaan($value);
		
		return $data;
	}

	public function store() {
		$data  = $this->input->post();

		echo '<pre>';
		print_r($data);
		die;
	}
}


