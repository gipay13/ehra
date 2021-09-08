<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Responden extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(['RespondenModel', 'SurveyModel']);
		if (!$this->session->userdata('username'))
			redirect('auth');
	}

	public function index()
	{
		$data = array(
			"regencies"		=> $this->RespondenModel->regencies(),
			"supervisor" 	=> $this->RespondenModel->supevisor(),
			"koordinator" 	=> $this->RespondenModel->koordinator(),
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

	public function get_last_no_survey()
	{
		$tahun = date("y");
		$bulan = date("m");
		$survey_last_id = $this->RespondenModel->get_last_no_survey($bulan, date("Y"));

		if ($survey_last_id->num_rows()) {
			$row_last_id   = $survey_last_id->row_array();
			$last_id       = substr($row_last_id['id'], 4) + 1;
			$id_survey = $tahun . $bulan . sprintf("%05d", $last_id);
		} else {
			$id_survey = $tahun . $bulan . sprintf("%05d", 1);
		}

		return $id_survey;
	}

	public function process()
	{
		$process = $this->input->post(null, TRUE);

		$no_survey = $this->get_last_no_survey();

		$this->SurveyModel->insert_responden($process);

		$this->SurveyModel->insert_survey($process, $no_survey);

		redirect('pertanyaan/p/' . $no_survey);
	}
}
