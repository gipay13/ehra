<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('layouts/head');
		$this->load->view('welcome-page');
		$this->load->view('layouts/footer');
	}
}
