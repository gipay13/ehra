<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Responden extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(['RespondenModel', 'UserModel']);
		if (!$this->session->userdata('username'))
			redirect('auth');
	}

	public function index()
	{
		$data = array(
			"regencies"		=> $this->RespondenModel->regencies(),
			"koordinator"	=> $this->UserModel->get_user(4),
			"supervisor"	=> $this->UserModel->get_user(6),
			"survey"		=> $this->RespondenModel->no_survey()
		);

		$this->template->load('layouts/layouts-survey', 'survey_pages/responden-page', $data);
	}

	public function fetch_district()
	{
		if ($this->input->post('id')) {
			echo $this->RespondenModel->district($this->input->post('id'));
		}
	}

	public function fetch_koordinator()
	{
		if ($this->input->post('id')) {
			echo $this->RespondenModel->koordinator($this->input->post('id'));
		}
	}

	public function process()
	{
		$process = $this->input->post(null, TRUE);

		//print_r($process);

		$this->RespondenModel->insert_responden($process);
		$this->RespondenModel->insert_survey($process);

		//$this->db->insert_id(); ini untuk alternatif url

		redirect('survey/p/' . $process['no_survey']);
	}
}
