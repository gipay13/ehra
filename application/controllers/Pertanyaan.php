<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan extends CI_Controller
{
	public $CI = NULL;

	function __construct()
	{
		parent::__construct();
		$this->load->model('PertanyaanModel');
		if (!$this->session->userdata('username'))
			redirect('auth');
		$this->CI = &get_instance();
	}

	public function index()
	{
		$data['kategoriB'] 	= $this->PertanyaanModel->kategoriPertanyaan('B');
		$data['kategoriC'] 	= $this->PertanyaanModel->kategoriPertanyaan('C');
		$data['kategoriD'] 	= $this->PertanyaanModel->kategoriPertanyaan('D');
		$data['kategoriE'] 	= $this->PertanyaanModel->kategoriPertanyaan('E');
		$data['kategoriF'] 	= $this->PertanyaanModel->kategoriPertanyaan('F');
		$data['kategoriG'] 	= $this->PertanyaanModel->kategoriPertanyaan('G');
		$data['kategoriH'] 	= $this->PertanyaanModel->kategoriPertanyaan('H');
		$data['kategoriAO'] = $this->PertanyaanModel->kategoriPertanyaan('AO');
		$data['kategoriBO'] = $this->PertanyaanModel->kategoriPertanyaan('BO');
		$data['kategoriCO'] = $this->PertanyaanModel->kategoriPertanyaan('CO');
		$data['kategoriDO'] = $this->PertanyaanModel->kategoriPertanyaan('DO');
		$data['kategoriEO'] = $this->PertanyaanModel->kategoriPertanyaan('EO');

		$this->load->view('layouts/head');
		$this->load->view('layouts/nav');
		$this->load->view('pages/pertanyaan-page', $data);
		$this->load->view('layouts/footer');
	}

	public function pertanyaan($value)
	{
		$data = $this->PertanyaanModel->pertanyaan($value);

		return $data;
	}

	public function store()
	{
		$kode_kategori = $this->input->post('kode_kategori');

		$jwbn10 = $this->input->post('answer10') == 1
			? $this->input->post('answer10')
			: ($this->input->post('answer10') == 2
				? $this->input->post('answer10tf1')
				: ($this->input->post('answer10') == 3
					? $this->input->post('answer10tf2')
					: null));
		$jwbn17 = $this->input->post('answer17') == 9
			? $this->input->post('answer17tf1')
			: ($this->input->post('answer17')
				? $this->input->post('answer17')
				: null);
		$jwbn20 = $this->input->post('answer20') == 7
			? $this->input->post('answer20tf1')
			: ($this->input->post('answer20')
				? $this->input->post('answer20')
				: null);
		$jwbn24 = $this->input->post('answer24') == 1
			? $this->input->post('answer24tf1')
			: ($this->input->post('answer24')
				? $this->input->post('answer24')
				: null);
		$jwbn25 = $this->input->post('answer25') == 9
			? $this->input->post('answer25tf1')
			: ($this->input->post('answer25')
				? $this->input->post('answer25')
				: null);
		$jwbn29 = $this->input->post('answer29') == 12
			? $this->input->post('answer29tf1')
			: ($this->input->post('answer29')
				? $this->input->post('answer29')
				: null);
		$jwbn37 = $this->input->post('answer37') == 4
			? $this->input->post('answer37tf1')
			: ($this->input->post('answer37')
				? $this->input->post('answer37')
				: null);
		$jwbn39 = $this->input->post('answer39') == 5
			? $this->input->post('answer39tf1')
			: ($this->input->post('answer39')
				? $this->input->post('answer39')
				: null);
		$jwbn41 = $this->input->post('answer41') == 5
			? $this->input->post('answer41tf1')
			: ($this->input->post('answer41')
				? $this->input->post('answer41')
				: null);
		$jwbn45 = $this->input->post('answer45') == 3
			? $this->input->post('answer45tf1')
			: ($this->input->post('answer45')
				? $this->input->post('answer45')
				: null);
		$jwbn48 = $this->input->post('answer48') == 3
			? $this->input->post('answer48tf1')
			: ($this->input->post('answer48')
				? $this->input->post('answer48')
				: null);
		$jwbn73 = $this->input->post('answer73') == 1
			? $this->input->post('answer73tf1')
			: ($this->input->post('answer73')
				? $this->input->post('answer73')
				: null);
		$jwbn75 = $this->input->post('answer75') == 7
			? $this->input->post('answer75tf1')
			: ($this->input->post('answer75')
				? $this->input->post('answer75')
				: null);
		$jwbn77 = $this->input->post('answer77') == 4
			? $this->input->post('answer77tf1')
			: ($this->input->post('answer77')
				? $this->input->post('answer77')
				: null);
		$jwbn85 = $this->input->post('answer85') == 4
			? $this->input->post('answer85tf1')
			: ($this->input->post('answer85')
				? $this->input->post('answer85')
				: null);
		$jwbn89 = $this->input->post('answer89') == 5
			? $this->input->post('answer89tf1')
			: ($this->input->post('answer89')
				? $this->input->post('answer89')
				: null);
		$jwbn90 = $this->input->post('answer90') == 5
			? $this->input->post('answer90tf1')
			: ($this->input->post('answer90')
				? $this->input->post('answer90')
				: null);
		$jwbn91 = $this->input->post('answer91') == 9
			? $this->input->post('answer91tf1')
			: ($this->input->post('answer91')
				? $this->input->post('answer91')
				: null);
		$jwbn93 = $this->input->post('answer93') == 9
			? $this->input->post('answer93tf1')
			: ($this->input->post('answer93')
				? $this->input->post('answer93')
				: null);
		$jwbn99 = $this->input->post('answer99') == 11
			? $this->input->post('answer99tf1')
			: ($this->input->post('answer99')
				? $this->input->post('answer99')
				: null);
		$jwbn106 = $this->input->post('answer106') == 9
			? $this->input->post('answer106tf1')
			: ($this->input->post('answer106')
				? $this->input->post('answer106')
				: null);
		$jwbn108 = $this->input->post('answer108') == 6
			? $this->input->post('answer108tf1')
			: ($this->input->post('answer108')
				? $this->input->post('answer108')
				: null);
		$jwbn110 = $this->input->post('answer110') == 9
			? $this->input->post('answer110tf1')
			: ($this->input->post('answer110')
				? $this->input->post('answer110')
				: null);

		if ($kode_kategori == "B") {
			$data  = [
				'jwbn1' => $this->input->post('answer1'),
				'jwbn2' => $this->input->post('answer2'),
				'jwbn3' => $this->input->post('answer3'),
				'jwbn4' => $this->input->post('answer4'),
				'jwbn5' => $this->input->post('answer5'),
				'jwbn6' => $this->input->post('answer6'),
				'jwbn7' => $this->input->post('answer7'),
				'jwbn8' => $this->input->post('answer8'),
				'jwbn9' => $this->input->post('answer9'),
				'jwbn10' => $jwbn10,
				'jwbn11' => $this->input->post('answer11'),
				'jwbn12' => $this->input->post('answer12'),
				'jwbn13A' => $this->input->post('answer13A'),
				'jwbn13B' => $this->input->post('answer13B'),
				'jwbn13C' => $this->input->post('answer13C'),
				'jwbn13D' => $this->input->post('answer13D'),
				'jwbn14A' => $this->input->post('answer14A'),
				'jwbn14B' => $this->input->post('answer14B'),
				'jwbn14C' => $this->input->post('answer14C'),
				'jwbn14D' => $this->input->post('answer14D'),
			];
		} else if ($kode_kategori == "C") {
			$data = [
				'jwbn17' => $jwbn17,
				'jwbn20' => $jwbn20,
				'jwbn24' => $jwbn24,
			];
		} else if ($kode_kategori == "D") {
			$data = [
				'jwbn25' => $jwbn25,
				'jwbn29' => $jwbn29,
				'jwbn37' => $jwbn37,
				'jwbn39' => $jwbn39,
				'jwbn41' => $jwbn41,
				'jwbn45' => $jwbn45,
				'jwbn48' => $jwbn48,
			];
		} else if ($kode_kategori == "E") {
		} else if ($kode_kategori == "F") {
			$data = [
				'jwbn73' => $jwbn73,
				'jwbn75' => $jwbn75,
				'jwbn77' => $jwbn77,
			];
		} else if ($kode_kategori == "G") {
		} else if ($kode_kategori == "H") {
		} else if ($kode_kategori == "AO") {
			$data = [
				'jwbn85' => $jwbn85,
				'jwbn89' => $jwbn89,
				'jwbn90' => $jwbn90,
				'jwbn91' => $jwbn91,
			];
		} else if ($kode_kategori == "BO") {
			$data = [
				'jwbn93' => $jwbn93,
			];
		} else if ($kode_kategori == "CO") {
			$data = [
				'jwbn99' => $jwbn99,
			];
		} else if ($kode_kategori == "DO") {
			$data = [
				'jwbn106' => $jwbn106,
			];
		} else if ($kode_kategori == "EO") {
			$data = [
				'jwbn108' => $jwbn108,
				'jwbn110' => $jwbn110,
			];
		}

		echo '<pre>';
		print_r($data);
		die;
	}
}
