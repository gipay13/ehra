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

	public function answer($id)
	{
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
			'umur' => $this->LaporanModel->chart_per_question(1)->result(),
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/infoumum_page', $data);
	}

	public function pdf_infoumum()
	{
		$data = [
			'title' => 'Informasi Responden',
			'question' => $this->LaporanModel->get_pdf_question(2, 1)->result(),
			'district' => $this->LaporanModel->get_district(),
			
		];

		$this->load->view('pdf_pages/pdf_infoumum', $data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     PENGELOLAAN SAMPAH

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_sampah()
	{
		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'district' => $this->LaporanModel->get_district()->result(),
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/sampah_page', $data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     LIMBAH RUMAH TANGGA

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_buangair()
	{
		$data = [
			'title' => 'Pembuangan Air Kotor/Limbah Tinja Manusia, dan Lumpur Tinja',
			'tba' => $this->LaporanModel->chart_per_question(25),
			'pba' => $this->LaporanModel->chart_per_question(29)
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/limbah_page', $data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     DRAINASE

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function index_drainase()
	{
		$data = [
			'title' => 'Drainase Lingkungan/ Selokan Sekitar Rumah dan Banjir',
			'genangan' => $this->LaporanModel->chart_per_question(118)->result(),
			'spal' => $this->LaporanModel->chart_per_question(49)->result()
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/drainase_page', $data);
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
			'diare' => $this->LaporanModel->chart_per_question(82)->result(),
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
