<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan extends CI_Controller
{
	public $CI = NULL;

	function __construct()
	{
		parent::__construct();
		$this->load->model('PertanyaanModel');

		$this->CI = &get_instance();

		if (!$this->session->userdata('id'))
			redirect('', 'refresh');
	}

	public function index()
	{
		$data = array(
			'title' => 'Pertanyaan',
			'pertanyaan' => $this->PertanyaanModel->get_pertanyaan()->result(),
		);

		$this->template->load('layouts/layouts-admin', 'admin_pages/pertanyaan-page', $data);
	}

	public function pertanyaan($qcategory_id)
	{
		$data = $this->PertanyaanModel->get_pertanyaan($qcategory_id)->result();

		return $data;
	}

	public function pertanyaan_ehra()
	{
		$code = ['B','C','D','E','F','G','H','AO','BO','CO','DO','EO'];

		$data = [
			'title' => 'PENILAIAN RISIKO KESEHATAN LINGKUNGAN 2020/2024',
			'kategori' => $this->PertanyaanModel->get_kategori($code)->result(),
		];

		// $this->load->view('pdf_pages/pdf_pertanyaan', $data);
		$this->load->library('pdf');

		$this->pdf->filename = 'List Pertanyaan Ehra.pdf';
		$this->pdf->load_view('pdf_pages/pdf_pertanyaan', $data, 'A4', 'portrait');
	}

	public function pertanyaan_rs()
	{
		$code = ['I','J','K'];

		$data = [
			'title' => 'RUMAH SEHAT',
			'kategori' => $this->PertanyaanModel->get_kategori($code)->result(),
		];

		// $this->load->view('pdf_pages/pdf_pertanyaan', $data);
		$this->load->library('pdf');

		$this->pdf->filename = 'List Pertanyaan Rumah Sehat.pdf';
		$this->pdf->load_view('pdf_pages/pdf_pertanyaan', $data, 'A4', 'portrait');
	}
}
