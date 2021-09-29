<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
	public $CI = NULL;

	function __construct()
	{
		parent::__construct();
		$this->load->model('LaporanModel');
		$this->CI = &get_instance();
		if (!$this->session->userdata('username'))
			redirect('auth');
	}

	public function index_infoumum()
	{
		$data = [
			'title' => 'Informasi Responden',
			'umur' => $this->LaporanModel->chart_kelompok_umur()->result(),
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/infoumum_page', $data);
	}
	public function pdf_infoumum()
	{
		$data = [
			'question' => $this->LaporanModel->get_pdf_category_b()->result(),
			'district' => $this->LaporanModel->get_district()
		];

		$this->load->view('pdf_pages/pdf_infoumum', $data);
	}

	public function result($id)
	{
		$data = $this->LaporanModel->get_pdf_answer($id);

		return $data;
	}

	public function index_sampah()
	{
		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'kelola_sampah' => $this->LaporanModel->chart_pengelolaan_sampah()->result(),
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/sampah_page', $data);
	}

	public function index_buangair()
	{
		$data = [
			'title' => 'Pembuangan Air Kotor/Limbah Tinja Manusia, dan Lumpur Tinja',
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/limbah_page', $data);
	}
}
