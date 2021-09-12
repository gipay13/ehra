<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('');
		if (!$this->session->userdata('username'))
			redirect('auth');
	}

	public function index()
	{
		$data = [
			'title' => 'Dashboard'
		];

		$this->template->load('layouts/layouts-admin', 'admin_pages/dashboard-page', $data);
	}
}
