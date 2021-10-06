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

	public function answer_radio($id)
	{
		$data = $this->LaporanModel->get_pdf_answer_radio($id);

		return $data;
	}

	public function answer_checkbox($id) {
		$data = $this->LaporanModel->get_pdf_answer_checkbox($id);

		return $data;
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     INFORMASI UMUM

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_infoumum()
	{
		$data = [
			'title' => 'Informasi Responden',
			'umur' => $this->LaporanModel->pie_bar_chart(1)->result(),
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/infoumum_page', $data);
	}

	public function pdf_infoumum()
	{
		$category = 2;
		$question = [1, 2, 5, 6, 9, 12];

		$data = [
			'title' => 'Informasi Responden',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
			
		];

		$this->load->view('pdf_pages/pdf_laporan_b', $data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     PENGELOLAAN SAMPAH

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_sampah()
	{
		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'pengelolaan61' => $this->LaporanModel->stacked_chart(17, 61)->result(),
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/sampah_page', $data);
	}

	public function pdf_kondisi_sampah()
	{
		$category = 4;
		$question = 16;

		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
			
		];

		$this->load->view('pdf_pages/pdf_laporan_b', $data);
	}

	public function pdf_kelola_sampah()
	{
		$category = 4;
		$question = 17;

		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan_b', $data);
	}

	public function pdf_pilih_sampah()
	{
		$category = 4;
		$question = 18;

		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan_b', $data);
	}

	public function pdf_jenis_pilih_sampah()
	{
		$category = 4;
		$question = 19;

		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan_b', $data);
	}

	public function pdf_petugas_kebersihan()
	{
		$category = 4;
		$question = [20, 21, 22, 23, 24];

		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan_b', $data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     LIMBAH RUMAH TANGGA

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_buangair()
	{
		$data = [
			'title' => 'Pembuangan Air Kotor/Limbah Tinja Manusia, dan Lumpur Tinja',
			'tba' => $this->LaporanModel->pie_bar_chart(25),
			'pba' => $this->LaporanModel->pie_bar_chart(29)
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/limbah_page', $data);
	}

	public function pdf_tba()
	{
		$category = 6;
		$question = 25;

		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan_b', $data);
	}

	public function pdf_bab()
	{
		$category = 6;
		$question = 26;

		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan_b', $data);
	}

	public function pdf_jamban()
	{
		$category = 6;
		$question = 27;

		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan_b', $data);
	}

	public function pdf_pembuangan()
	{
		$category = 6;
		$question = [28, 29, 33, 34, 36, 37, 40, 41];

		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan_b', $data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     DRAINASE

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_drainase()
	{
		$data = [
			'title' => 'Drainase Lingkungan/ Selokan Sekitar Rumah dan Banjir',
			'genangan' => $this->LaporanModel->pie_bar_chart(118)->result(),
			'spal' => $this->LaporanModel->pie_bar_chart(49)->result()
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/drainase_page', $data);
	}

	public function pdf_drainase()
	{
		$category = 8;
		$question = 49;

		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan_b', $data);
	}

	public function pdf_limbah()
	{
		$category = 8;
		$question = 50;

		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan_b', $data);
	}

	public function pdf_banjir()
	{
		$category = 8;
		$question = [52, 53, 54, 55, 56, 57];

		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan_b', $data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     SUMBER AIR

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_sumberair()
	{
		$data = [
			'title' => 'Pengelolaan Air Minum Rumah Tangga',
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/sumberair_page', $data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     PERILAKU HIEGENE DAN SANITASI

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_higiene()
	{
		$data = [
			'title' => 'Perilaku Higiene dan Sanitasi',
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/higiene_page', $data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     KEJADIAN DIARE

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_diare()
	{
		$data = [
			'title' => 'Kejadian Penyakit Diare',
			'diare' => $this->LaporanModel->pie_bar_chart(82)->result(),
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/diare_page', $data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     PENGAMATAN

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_pengamatan()
	{
		$data = [
			'title' => 'Pengamatan',
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/pengamatan_page', $data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     PENGAMATAN

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_areaberesiko()
	{
		$data = [
			'title' => 'Area Beresiko',
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/areaberesiko_page', $data);
	}
}
