<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Responden extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('RespondenModel');
		$this->load->model('SurveyModel');
		if (!$this->session->userdata('username'))
			redirect('auth');
	}

	public function index()
	{
		$data = array(
			"regencies"		=> $this->RespondenModel->regencies(),
			"supervisor" 	=> $this->RespondenModel->supevisor(),
			"koordinator" 	=> $this->RespondenModel->koordinator(),
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

	public function fetch_village()
	{
		if ($this->input->post('id')) {
			echo $this->RespondenModel->village($this->input->post('id'));
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
		$process = $this->input->post(null, FALSE);

		//print_r($process);

		$this->SurveyModel->insert_responden($process);
		$this->SurveyModel->insert_survey($process);

		redirect('pertanyaan/p/' . $process['no_survey']);
	}
}
