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

	public function answer($id) {
		$data = $this->LaporanModel->get_pdf_answer($id);

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

		$this->load->view('pdf_pages/pdf_laporan', $data);
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

		$this->load->view('pdf_pages/pdf_laporan', $data);
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

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	public function pdf_pilih_sampah()
	{
		$category = 4;
		$question = [18, 19];

		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
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

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     LIMBAH RUMAH TANGGA

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_limbah()
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
			'title' => 'Pembuangan Air Kotor/Limbah Tinja Manusia, dan Lumpur Tinja',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	public function pdf_bab()
	{
		$category = 6;
		$question = 26;

		$data = [
			'title' => 'Pembuangan Air Kotor/Limbah Tinja Manusia, dan Lumpur Tinja',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	public function pdf_jamban()
	{
		$category = 6;
		$question = 27;

		$data = [
			'title' => 'Pembuangan Air Kotor/Limbah Tinja Manusia, dan Lumpur Tinja',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	public function pdf_pembuangan()
	{
		$category = 6;
		$question = [28, 29, 33, 34, 36, 37, 40, 41];

		$data = [
			'title' => 'Pembuangan Air Kotor/Limbah Tinja Manusia, dan Lumpur Tinja',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
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
			'title' => 'Drainase Lingkungan/ Selokan Sekitar Rumah dan Banjir',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	public function pdf_limbah()
	{
		$category = 8;
		$question = 50;

		$data = [
			'title' => 'Drainase Lingkungan/ Selokan Sekitar Rumah dan Banjir',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	public function pdf_banjir()
	{
		$category = 8;
		$question = [52, 53, 54, 55, 56, 57];

		$data = [
			'title' => 'Drainase Lingkungan/ Selokan Sekitar Rumah dan Banjir',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     SUMBER AIR

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_sumberair()
	{
		$data = [
			'title' => 'Pengelolaan Air Minum, Masak, Mencuci, dan Gosok Gigi Yang Aman dan Higiene',
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/sumberair_page', $data);
	}

	public function pdf_pengelolaan_sumberair()
	{
		$category = 10;
		$question = 58;

		$data = [
			'title' => 'Pengelolaan Air Minum, Masak, Mencuci, dan Gosok Gigi Yang Aman dan Higiene',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	public function pdf_kualitas_sumberair()
	{
		$category = 10;
		$question = [62, 66, 67, 74, 75, 76, 77];

		$data = [
			'title' => 'Pengelolaan Air Minum, Masak, Mencuci, dan Gosok Gigi Yang Aman dan Higiene',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
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

	public function pdf_perilaku_higiene()
	{
		$category = 11;
		$question = 78;

		$data = [
			'title' => 'Perilaku Higiene dan Sanitasi',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	public function pdf_penggunaan_sabun()
	{
		$category = 11;
		$question = 79;

		$data = [
			'title' => 'Perilaku Higiene dan Sanitasi',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	public function pdf_lokasi_cucitangan()
	{
		$category = 11;
		$question = 80;

		$data = [
			'title' => 'Perilaku Higiene dan Sanitasi',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	public function pdf_waktu_cucitangan()
	{
		$category = 11;
		$question = 81;

		$data = [
			'title' => 'Perilaku Higiene dan Sanitasi',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
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

	public function pdf_kejadian_diare()
	{
		$category = 12;
		$question = [82, 83];

		$data = [
			'title' => 'Perilaku Higiene dan Sanitasi',
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
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

	public function pdf_amati_ao()
	{
		$category = 1;

		$data = [
			'title' => 'Pengamatan',
			'question' => $this->LaporanModel->get_pdf_question($category)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	public function pdf_amati_bo()
	{
		$category = 3;

		$data = [
			'title' => 'Pengamatan',
			'question' => $this->LaporanModel->get_pdf_question($category)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	public function pdf_amati_co()
	{
		$category = 5;

		$data = [
			'title' => 'Pengamatan',
			'question' => $this->LaporanModel->get_pdf_question($category)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	public function pdf_amati_do()
	{
		$category = 7;

		$data = [
			'title' => 'Pengamatan',
			'question' => $this->LaporanModel->get_pdf_question($category)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
	}

	public function pdf_amati_eo()
	{
		$category = 9;

		$data = [
			'title' => 'Pengamatan',
			'question' => $this->LaporanModel->get_pdf_question($category)->result(),
			'district' => $this->LaporanModel->get_district(),
		];

		$this->load->view('pdf_pages/pdf_laporan', $data);
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
