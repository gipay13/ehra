<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model(['PertanyaanModel', 'KategoriModel']);
		if (!$this->session->userdata('username'))
			redirect('auth');
	}

	public function index()
	{
		$data = array(
			'kategori' => $this->KategoriModel->get_kategori(),
			'pertanyaan' => $this->PertanyaanModel->get_pertanyaan(),
		);

		$this->template->load('layouts/layouts-admin', 'admin_pages/pertanyaan-page', $data);
	}
}
