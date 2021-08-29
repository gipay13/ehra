<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
		$this->load->view('layouts/admin_layouts/head');
		$this->load->view('layouts/admin_layouts/nav');
		$this->load->view('layouts/admin_layouts/sidenav');
		$this->load->view('admin_pages/index');
		$this->load->view('layouts/admin_layouts/footer');
	}

	public function pertanyaan()
	{
		$data = array(
			'pertanyaan' => $this->AdminModel->pertanyaan(),
			'kategori' => $this->AdminModel->Kategori_pertanyaan(),
		);

		$this->load->view('layouts/admin_layouts/head');
		$this->load->view('layouts/admin_layouts/nav');
		$this->load->view('layouts/admin_layouts/sidenav');
		$this->load->view('admin_pages/pertanyaan-page', $data);
		$this->load->view('layouts/admin_layouts/footer');
	}

	public function kategori()
	{
		$data = array(
			'kategori' => $this->AdminModel->Kategori_pertanyaan(),
		);

		$this->load->view('layouts/admin_layouts/head');
		$this->load->view('layouts/admin_layouts/nav');
		$this->load->view('layouts/admin_layouts/sidenav');
		$this->load->view('admin_pages/kategori-page', $data);
		$this->load->view('layouts/admin_layouts/footer');
	}

	public function hasil()
	{
		$this->load->view('layouts/admin_layouts/head');
		$this->load->view('layouts/admin_layouts/nav');
		$this->load->view('layouts/admin_layouts/sidenav');
		$this->load->view('admin_pages/hasilsurvey-page');
		$this->load->view('layouts/admin_layouts/footer');
	}

}
