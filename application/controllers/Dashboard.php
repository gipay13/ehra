<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model(['PertanyaanModel', 'HasilModel', 'UserModel']);
		if (!$this->session->userdata('id'))
			redirect('');
	}

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'pertanyaan' => $this->PertanyaanModel->get_pertanyaan()->num_rows(),
			'kategori'	=> $this->PertanyaanModel->get_kategori()->num_rows(),
			'hasil' => $this->HasilModel->get_hasil()->num_rows(),
			'userdata' => $this->UserModel->get_userdata()
		];

		$this->template->load('layouts/layouts-admin', 'admin_pages/dashboard-page', $data);
	}
}
