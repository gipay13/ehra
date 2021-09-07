<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminpertanyaan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
		if (!$this->session->userdata('username'))
			redirect('auth');
	}

	public function index()
	{
		$data = array(
			'pertanyaan' => $this->AdminModel->pertanyaan(),
			'kategori' => $this->AdminModel->Kategori_pertanyaan(),
		);

		$this->template->load('layouts/layouts-admin', 'admin_pages/pertanyaan-page', $data);
	}

}
