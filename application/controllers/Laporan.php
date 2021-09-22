<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('LaporanModel');
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

		$this->template->load('layouts/layouts-admin', 'laporan_pages/buangair_page', $data);
	}
}
