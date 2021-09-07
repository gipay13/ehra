<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
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
		$this->template->load('layouts/layouts-admin', 'admin_pages/hasilsurvey-page');
	}

}
