<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{
	public $CI = NULL;

	function __construct()
	{
		parent::__construct();
		$this->load->model(['HasilModel', 'PertanyaanModel', 'SurveyModel']);
		$this->CI = &get_instance();
		if (!$this->session->userdata('id'))
			redirect('auth');
	}

	public function index()
	{
		$data = [
			'title' => 'Hasil Survey',
			'survey' => $this->HasilModel->get_hasil()->result(),
		];
		$this->template->load('layouts/layouts-admin', 'admin_pages/hasil-page', $data);
	}

	public function delete($no_survey, $nik)
	{
		$this->db->trans_start();
		$this->HasilModel->delete_survey($no_survey);
		$this->HasilModel->delete_respondent($nik);
		$this->HasilModel->delete_result($no_survey);
		$this->db->trans_complete();
		
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span><i class="fas fa-times-circle mx-1"></i> Hasil Survey Dihapus</span>
				</div>'
			);
			redirect('admin/hasil');
		}
	}

	public function pertanyaan($qcategory_id)
	{
		$data = $this->SurveyModel->get_pertanyaan($qcategory_id);

		return $data;
	}

	public function jawaban($no_survey, $question_id) {
		$data = $this->HasilModel->get_pdf_jawaban($no_survey, $question_id);

		return $data;
	}

	public function laporan_hasil($no_survey)
	{

		$data = [
			'survey' => $this->HasilModel->get_pdf_survey($no_survey),
			'kategori' => $this->PertanyaanModel->get_kategori()->result(),
		];

		//$this->load->view('pdf_pages/pdf_hasil', $data);
		$this->load->library('pdf');

		$this->pdf->filename = 'Survey-'.$no_survey.'.pdf';
		$this->pdf->load_view('pdf_pages/pdf_hasil', $data, 'A4', 'portrait');
	}
}
