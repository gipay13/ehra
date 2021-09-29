<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan extends CI_Controller
{
	public $CI = NULL;

	function __construct()
	{
		parent::__construct();
		$this->load->model(['PertanyaanModel', 'SurveyModel']);

		$this->CI = &get_instance();

		if (!$this->session->userdata('username'))
			redirect('auth');
	}

	public function index()
	{
		$data = array(
			'title' => 'Pertanyaan',
			'kategori' => $this->PertanyaanModel->get_kategori()->result(),
			'pertanyaan' => $this->PertanyaanModel->get_pertanyaan()->result(),
		);

		$this->template->load('layouts/layouts-admin', 'admin_pages/pertanyaan-page', $data);
	}

	public function pertanyaan($qcategory_id)
	{
		$data = $this->SurveyModel->get_pertanyaan($qcategory_id);

		return $data;
	}

	public function list_pertanyaan()
	{

		$data = [
			'kategori' => $this->PertanyaanModel->get_kategori()->result(),
		];

		$this->load->view('pdf_pages/pdf_pertanyaan', $data);
		// $this->load->library('pdf');

		// $this->pdf->setPaper('A4', 'potrait');
		// $this->pdf->filename = 'List Pertanyaan.pdf';
		// $this->pdf->load_view('pdf_pages/pdf_pertanyaan', $data);
	}
}
