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
		if (!$this->session->userdata('id'))
			redirect('auth');
	}

	public function answer_kecamatan($id, $initial_date, $end_date) {
		$data = $this->LaporanModel->get_pdf_answer_kecamatan($id, $initial_date, $end_date);

		return $data;
	}

	public function answer_kelurahan($id, $initial_date, $end_date) {
		$data = $this->LaporanModel->get_pdf_answer_kelurahan($id, $initial_date, $end_date);

		return $data;
	}

	public function export()
	{
		if(isset($_POST['infoumum'])) {
			$title = 'Informasi Responden';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');
			
			$category = 2;
			$question = [1, 2, 5, 6, 9, 12];
		} else if(isset($_POST['kondisi_sampah'])) {
			$title = 'Pengelolaan Sampah Rumah Tangga';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 4;
			$question = 16;
		} else if(isset($_POST['kelola_sampah'])) {
			$title = 'Pengelolaan Sampah Rumah Tangga';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 4;
			$question = 17;
		} else if(isset($_POST['pilih_sampah'])) {
			$title = 'Pengelolaan Sampah Rumah Tangga';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 4;
			$question = [18, 19];
		} else if(isset($_POST['petugas_kebersihan'])) {
			$title = 'Pengelolaan Sampah Rumah Tangga';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 4;
			$question = [20, 21, 22, 23, 24];
		} else if(isset($_POST['tba'])) {
			$title = 'Pembuangan Air Kotor/Limbah Tinja Manusia, dan Lumpur Tinja';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 6;
			$question = 25;
		} else if(isset($_POST['bab'])) {
			$title = 'Pembuangan Air Kotor/Limbah Tinja Manusia, dan Lumpur Tinja';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 6;
			$question = 26;
		} else if(isset($_POST['jamban'])) {
			$title = 'Pembuangan Air Kotor/Limbah Tinja Manusia, dan Lumpur Tinja';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 6;
			$question = 27;
		} else if(isset($_POST['pembuangan'])) {
			$title = 'Pembuangan Air Kotor/Limbah Tinja Manusia, dan Lumpur Tinja';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 6;
			$question = [28, 29, 33, 34, 36, 37, 40, 41];
		} else if(isset($_POST['drainase'])) {
			$title = 'Drainase Lingkungan/ Selokan Sekitar Rumah dan Banjir';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 8;
			$question = 49;
		} else if(isset($_POST['limbah_nontinja'])) {
			$title = 'Drainase Lingkungan/ Selokan Sekitar Rumah dan Banjir';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 8;
			$question = 50;
		} else if(isset($_POST['banjir'])) {
			$title = 'Drainase Lingkungan/ Selokan Sekitar Rumah dan Banjir';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 8;
			$question = [52, 53, 54, 55, 56, 57];
		} else if(isset($_POST['pengelolaan_sumberair'])) {
			$title = 'Pengelolaan Air Minum, Masak, Mencuci, dan Gosok Gigi Yang Aman dan Higiene';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 10;
			$question = 58;
		} else if(isset($_POST['kualitas_sumberair'])) {
			$title = 'Pengelolaan Air Minum, Masak, Mencuci, dan Gosok Gigi Yang Aman dan Higiene';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 10;
			$question = [62, 66, 67, 74, 75, 76, 77];
		} else if(isset($_POST['perilaku_higiene'])) {
			$title = 'Pengelolaan Air Minum, Masak, Mencuci, dan Gosok Gigi Yang Aman dan Higiene';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 11;
			$question = 78;
		} else if(isset($_POST['penggunaan_sabun'])) {
			$title = 'Pengelolaan Air Minum, Masak, Mencuci, dan Gosok Gigi Yang Aman dan Higiene';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 11;
			$question = 79;
		} else if(isset($_POST['lokasi_cucitangan'])) {
			$title = 'Pengelolaan Air Minum, Masak, Mencuci, dan Gosok Gigi Yang Aman dan Higiene';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 11;
			$question = 80;
		} else if(isset($_POST['waktu_cucitangan'])) {
			$title = 'Pengelolaan Air Minum, Masak, Mencuci, dan Gosok Gigi Yang Aman dan Higiene';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 11;
			$question = 81;
		} else if(isset($_POST['kejadian_diare'])) {
			$title = 'Kejadian Penyakit Diare';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 12;
		 	$question = [82, 83];
		} else if(isset($_POST['amati_ao'])) {
			$title = 'Pengamatan';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 1;
			$question = [84, 85, 86, 87, 88, 89, 90, 91];
		} else if(isset($_POST['amati_bo'])) {
			$title = 'Pengamatan';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 3;
			$question = [92, 93, 94];
		} else if(isset($_POST['amati_co'])) {
			$title = 'Pengamatan';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 5;
			$question = [95, 96, 97, 98, 99, 100, 101, 102, 103];
		} else if(isset($_POST['amati_do'])) {
			$title = 'Pengamatan';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 7;
			$question = [104, 105, 106];
		} else if(isset($_POST['amati_eo'])) {
			$title = 'Pengamatan';

			$initial_date = $this->input->post('initial_date');
			$end_date = $this->input->post('end_date');

			$category = 9;
			$question = [107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123];
		}

		$data = [
			'initial_date' => $initial_date,
			'end_date' => $end_date,
			'title' => $title,
			'question' => $this->LaporanModel->get_pdf_question($category, $question)->result(),
			'village' => $this->LaporanModel->get_village(),	
		];

		//$this->load->view('pdf_pages/pdf_laporan_kelurahan', $data);

		$this->load->library('pdf');

		$this->pdf->filename = $title.'_'.($initial_date).'_'.$end_date.'.pdf';
		$this->pdf->load_view('pdf_pages/pdf_laporan_kelurahan', $data, array(0, 0, 3458.27, 3458.27), 'landscape');
	} 

	public function index_infoumum()
	{
		$data = [
			'title' => 'Informasi Responden',
			'umur' => $this->LaporanModel->pie_bar_chart(1)->result(),
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/infoumum_page', $data);
	}

	public function index_sampah()
	{
		$data = [
			'title' => 'Pengelolaan Sampah Rumah Tangga',
			'pengelolaan61' => $this->LaporanModel->stacked_chart(17, 61)->result(),
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/sampah_page', $data);
	}

	public function index_limbah()
	{
		$data = [
			'title' => 'Pembuangan Air Kotor/Limbah Tinja Manusia, dan Lumpur Tinja',
			'tba' => $this->LaporanModel->pie_bar_chart(25),
			'pba' => $this->LaporanModel->pie_bar_chart(29)
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/limbah_page', $data);
	}

	public function index_drainase()
	{
		$data = [
			'title' => 'Drainase Lingkungan/ Selokan Sekitar Rumah dan Banjir',
			'genangan' => $this->LaporanModel->pie_bar_chart(118)->result(),
			'spal' => $this->LaporanModel->pie_bar_chart(49)->result()
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/drainase_page', $data);
	}

	public function index_sumberair()
	{
		$data = [
			'title' => 'Pengelolaan Air Minum, Masak, Mencuci, dan Gosok Gigi Yang Aman dan Higiene',
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/sumberair_page', $data);
	}

	public function index_higiene()
	{
		$data = [
			'title' => 'Perilaku Higiene dan Sanitasi',
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/higiene_page', $data);
	}

	public function index_diare()
	{
		$data = [
			'title' => 'Kejadian Penyakit Diare',
			'diare' => $this->LaporanModel->pie_bar_chart(82)->result(),
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/diare_page', $data);
	}

	public function index_pengamatan()
	{
		$data = [
			'title' => 'Pengamatan',
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/pengamatan_page', $data);
	}

	public function index_areaberesiko()
	{
		$data = [
			'title' => 'Area Beresiko',
		];

		$this->template->load('layouts/layouts-admin', 'laporan_pages/areaberesiko_page', $data);
	}
}
