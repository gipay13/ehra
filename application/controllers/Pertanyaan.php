<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('PertanyaanModel');
		if (!$this->session->userdata('username'))
			redirect('auth');
	}

	public function index()
	{
		// $kategori = $this->uri->segment(3);

		$data['kategori'] = $this->PertanyaanModel->kategoriPertanyaan();

		// echo '<pre>';
		// print_r($data);
		// die;

		$this->load->view('layouts/head');
		$this->load->view('layouts/nav');
		$this->load->view('pages/pertanyaan-page', $data);
		$this->load->view('layouts/footer');
	}

	public function save_pertanyaan()
	{
		// Koding Save

		redirect('responden')
	}
}
