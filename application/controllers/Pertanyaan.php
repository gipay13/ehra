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
		$data = [
			'kode_kategori' => $this->input->post('kode_kategori'),
			'answer1' => $this->input->post('answer1'),
			'answer2' => $this->input->post('answer2'),
			'answer3' => $this->input->post('answer3'),
			'answer4' => $this->input->post('answer4'),
			'answer5' => $this->input->post('answer5'),
			'answer6' => $this->input->post('answer6'),
			'answer7' => $this->input->post('answer7'),
			'answer8' => $this->input->post('answer8'),
			'answer9' => $this->input->post('answer9'),
			'answer10' => $this->input->post('answer10'),
			'answer11' => $this->input->post('answer11'),
			'answer12' => $this->input->post('answer12'),
			'answer13' => $this->input->post('answer13'),
			'answer14' => $this->input->post('answer14'),
		];

		echo '<pre>';
		print_r($data);
		die;
	}
}


