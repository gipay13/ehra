<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{
	public $CI = NULL;

	function __construct()
	{
		parent::__construct();
		$this->load->model('HasilModel');
		$this->CI = &get_instance();
		if (!$this->session->userdata('id'))
			redirect('', 'refresh');
	}

	public function index()
	{
		$data = [
			'title' => 'Hasil Survey',
			'survey' => $this->HasilModel->get_hasil()->result(),
		];
		$this->template->load('layouts/layouts-admin', 'admin_pages/hasil-page', $data);
	}

	public function pertanyaan($qcategory_id)
	{
		$data = $this->HasilModel->get_pdf_pertanyaan($qcategory_id);
		return $data;
	}

	public function jawaban($no_survey, $question_id) {
		$data = $this->HasilModel->get_pdf_jawaban($no_survey, $question_id);
		return $data;
	}


	public function hasil_survey_ehra($no_survey)
	{

		$code = ['B','C','D','E','F','G','H','AO','BO','CO','DO','EO'];

		$data = [
			'survey' => $this->HasilModel->get_pdf_survey($no_survey),
			'kategori' => $this->HasilModel->get_pdf_kategori($code),
		];

		$this->load->view('pdf_pages/pdf_hasil_ehra', $data);
		// $this->load->library('pdf');

		// $this->pdf->filename = 'Ehra-'.$no_survey.'.pdf';
		// $this->pdf->load_view('pdf_pages/pdf_hasil_ehra', $data, 'A4', 'portrait');
	}

	public function hasil_survey_rs($no_survey)
	{

		$code = ['I','J','K'];

		$data = [
			'survey' => $this->HasilModel->get_pdf_survey($no_survey),
			'kategori' => $this->HasilModel->get_pdf_kategori($code),
			'total' => $this->HasilModel->get_pdf_total($no_survey)
		];

		$this->load->view('pdf_pages/pdf_hasil_rs', $data);
		// $this->load->library('pdf');

		// $this->pdf->filename = 'Rumah Sehat-'.$no_survey.'.pdf';
		// $this->pdf->load_view('pdf_pages/pdf_hasil_rs', $data, 'A4', 'portrait');
	}

	public function delete($no_survey, $id)
	{
		$image = $this->HasilModel->get_image($id)->row();
		if($image->image != null) {
			$target_image = './uploads/'.$image->image;
			unlink($target_image);
		}
		$this->db->trans_start();
		$this->HasilModel->delete_survey($no_survey);
		$this->HasilModel->delete_respondent($id);
		$this->HasilModel->delete_result($no_survey);
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === FALSE) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span><i class="fas fa-times-circle mx-1"></i> Something Wrong, Please Try Again</span>
				</div>'
			);
			redirect('hasil', 'refresh');	
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span><i class="fas fa-times-circle mx-1"></i> Hasil Survey Dihapus</span>
				</div>'
			);
			redirect('hasil', 'refresh');
		}
		
	}
}
