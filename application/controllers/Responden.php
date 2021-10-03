<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Responden extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(['RespondenModel', 'UserModel']);
		if (
			$this->session->userdata('level') == 1 ||
			$this->session->userdata('level') == 3 ||
			$this->session->userdata('level') == 4
		)
			redirect('admin/dashboard');
		if (!$this->session->userdata('username'))
			redirect('auth');
	}

	public function index()
	{
		$data = array(
			'survey'		=> $this->RespondenModel->no_survey(),
			'supervisor'	=> $this->UserModel->get_supervisor(),
			'userdata'		=> $this->UserModel->get_userdata()
		);

		$this->template->load('layouts/layouts-survey', 'survey_pages/responden-page', $data);
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
		$process = $this->input->post(null, TRUE);

		// echo '<pre>';
		// print_r($process);
		// echo '</pre>';
		$this->db->trans_start();
		$this->RespondenModel->insert_responden($process);
		$this->RespondenModel->insert_survey($process);
		$this->db->trans_complete();

		if($this->db->trans_status() === False) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span><i class="fas fa-times-circle mx-1"></i> Error Database</span>
				</div>'
			);
			redirect('responden');
		} else {
			redirect('survey/p/' . $process['no_survey']);
		}
	}
}
