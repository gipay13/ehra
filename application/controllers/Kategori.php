<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
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
			'kategori' => $this->AdminModel->Kategori_pertanyaan(),
		);

		$this->template->load('layouts/layouts-admin', 'admin_pages/kategori-page', $data);
	}

}
