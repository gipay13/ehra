<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan extends CI_Controller
{
	public $CI = NULL;

	function __construct()
	{
		parent::__construct();
		$this->load->model('PertanyaanModel');
		$this->load->model('SurveyModel');
		if (!$this->session->userdata('username'))
			redirect('auth');
		$this->CI = &get_instance();
	}

	public function index()
	{
		$data = array(
			'kategoriB' => $this->PertanyaanModel->kategori_pertanyaan('B'),
			'kategoriC' => $this->PertanyaanModel->kategori_pertanyaan('C'),
			'kategoriD' => $this->PertanyaanModel->kategori_pertanyaan('D'),
			'kategoriE' => $this->PertanyaanModel->kategori_pertanyaan('E'),
			'kategoriF' => $this->PertanyaanModel->kategori_pertanyaan('F'),
			'kategoriG' => $this->PertanyaanModel->kategori_pertanyaan('G'),
			'kategoriH' => $this->PertanyaanModel->kategori_pertanyaan('H'),
			'kategoriAO' => $this->PertanyaanModel->kategori_pertanyaan('AO'),
			'kategoriBO' => $this->PertanyaanModel->kategori_pertanyaan('BO'),
			'kategoriCO' => $this->PertanyaanModel->kategori_pertanyaan('CO'),
			'kategoriDO' => $this->PertanyaanModel->kategori_pertanyaan('DO'),
			'kategoriEO' => $this->PertanyaanModel->kategori_pertanyaan('EO'),
		);

		$this->load->view('layouts/survey_layouts/head');
		$this->load->view('layouts/survey_layouts/nav');
		$this->load->view('survey_pages/pertanyaan-page', $data);
		$this->load->view('layouts/survey_layouts/footer');
	}

	public function pertanyaan($value)
	{
		$data = $this->PertanyaanModel->pertanyaan($value);

		return $data;
	}

	public function store()
	{
		$no_survey = $this->input->post('no_survey');

		$jwbn10 = $this->input->post('answer10') == 2
			? $this->input->post('answer10tf1')
			: ($this->input->post('answer10') == 3
				? $this->input->post('answer10tf2')
				: null);
		$jwbn17 = $this->input->post('answer17') == 9 ? $this->input->post('answer17tf1') : null;
		$jwbn20 = $this->input->post('answer20') == 7 ? $this->input->post('answer20tf1') : null;
		$jwbn24 = $this->input->post('answer24') == 1 ? $this->input->post('answer24tf1') : null;
		$jwbn25 = $this->input->post('answer25') == 9 ? $this->input->post('answer25tf1') : null;
		$jwbn29 = $this->input->post('answer29') == 12 ? $this->input->post('answer29tf1') :  null;
		$jwbn37 = $this->input->post('answer37') == 4 ? $this->input->post('answer37tf1') : null;
		$jwbn39 = $this->input->post('answer39') == 5 ? $this->input->post('answer39tf1') : null;
		$jwbn41 = $this->input->post('answer41') == 5 ? $this->input->post('answer41tf1') : null;
		$jwbn45 = $this->input->post('answer45') == 3 ? $this->input->post('answer45tf1') : null;
		$jwbn48 = $this->input->post('answer48') == 3 ? $this->input->post('answer48tf1') : null;
		$jwbn73 = $this->input->post('answer73') == 1 ? $this->input->post('answer73tf1') : null;
		$jwbn75 = $this->input->post('answer75') == 7 ? $this->input->post('answer75tf1') : null;
		$jwbn77 = $this->input->post('answer77') == 4 ? $this->input->post('answer77tf1') : null;
		$jwbn85 = $this->input->post('answer85') == 4 ? $this->input->post('answer85tf1') : null;
		$jwbn89 = $this->input->post('answer89') == 5 ? $this->input->post('answer89tf1') : null;
		$jwbn90 = $this->input->post('answer90') == 5 ? $this->input->post('answer90tf1') : null;
		$jwbn91 = $this->input->post('answer91') == 9 ? $this->input->post('answer91tf1') : null;
		$jwbn93 = $this->input->post('answer93') == 9 ? $this->input->post('answer93tf1') : null;
		$jwbn99 = $this->input->post('answer99') == 11 ? $this->input->post('answer99tf1') : null;
		$jwbn106 = $this->input->post('answer106') == 9 ? $this->input->post('answer106tf1') : null;
		$jwbn108 = $this->input->post('answer108') == 6 ? $this->input->post('answer108tf1') : null;
		$jwbn110 = $this->input->post('answer110') == 9 ? $this->input->post('answer110tf1') : null;

		// B
		$this->SurveyModel->insert_jawaban($no_survey, 1, $this->input->post('answer1'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 2, $this->input->post('answer2'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 3, $this->input->post('answer3'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 4, $this->input->post('answer4'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 5, $this->input->post('answer5'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 6, $this->input->post('answer6'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 7, $this->input->post('answer7'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 8, $this->input->post('answer8'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 9, $this->input->post('answer9'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 10, $this->input->post('answer10'), $jwbn10);
		$this->SurveyModel->insert_jawaban($no_survey, 11, $this->input->post('answer11'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 12, $this->input->post('answer12'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 13, $this->input->post('answer13A'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 13, $this->input->post('answer13B'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 13, $this->input->post('answer13C'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 13, $this->input->post('answer13D'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 14, $this->input->post('answer14A'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 14, $this->input->post('answer14B'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 14, $this->input->post('answer14C'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 14, $this->input->post('answer14D'), null);
		// C
		$this->SurveyModel->insert_jawaban($no_survey, 15, $this->input->post('answer15'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 16, implode(',', $this->input->post('answer16[]')), null);
		$this->SurveyModel->insert_jawaban($no_survey, 17, $this->input->post('answer17'), $jwbn17);
		$this->SurveyModel->insert_jawaban($no_survey, 18, $this->input->post('answer18'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 19, implode(',', $this->input->post('answer19[]')), null);
		$this->SurveyModel->insert_jawaban($no_survey, 20, $this->input->post('answer20'), $jwbn20);
		$this->SurveyModel->insert_jawaban($no_survey, 21, $this->input->post('answer21'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 22, $this->input->post('answer22'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 23, $this->input->post('answer23'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 24, $this->input->post('answer24'), $jwbn24);
		// D
		$this->SurveyModel->insert_jawaban($no_survey, 25, $this->input->post('answer25'), $jwbn25);
		$this->SurveyModel->insert_jawaban($no_survey, 26, implode(',', $this->input->post('answer26[]')),null);
		$this->SurveyModel->insert_jawaban($no_survey, 27, $this->input->post('answer27'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 28, $this->input->post('answer28'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 29, $this->input->post('answer29'), $jwbn29);
		$this->SurveyModel->insert_jawaban($no_survey, 30, $this->input->post('answer30'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 31, $this->input->post('answer31'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 32, $this->input->post('answer32'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 33, $this->input->post('answer33'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 34, $this->input->post('answer34'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 35, $this->input->post('answer35'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 36, $this->input->post('answer36'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 37, $this->input->post('answer37'), $jwbn37);
		$this->SurveyModel->insert_jawaban($no_survey, 38, $this->input->post('answer38'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 39, $this->input->post('answer39'), $jwbn39);
		$this->SurveyModel->insert_jawaban($no_survey, 40, $this->input->post('answer40'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 41, $this->input->post('answer41'), $jwbn41);
		$this->SurveyModel->insert_jawaban($no_survey, 42, $this->input->post('answer42'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 43, $this->input->post('answer43'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 44, $this->input->post('answer44'), $jwbn45);
		$this->SurveyModel->insert_jawaban($no_survey, 45, $this->input->post('answer45'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 46, $this->input->post('answer46'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 47, $this->input->post('answer47'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 48, $this->input->post('answer48'), $jwbn48);
		// E
		$this->SurveyModel->insert_jawaban($no_survey, 49, $this->input->post('answer49'), null);
		//$this->SurveyModel->insert_jawaban($no_survey, 50, $this->input->post('answer50'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 51, $this->input->post('answer51'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 52, $this->input->post('answer52'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 53, $this->input->post('answer53'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 54, $this->input->post('answer54'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 55, $this->input->post('answer55'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 56, $this->input->post('answer56'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 57, $this->input->post('answer57'), null);
		// F
		//$this->SurveyModel->insert_jawaban($no_survey, 58, $this->input->post('answer58'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 59, $this->input->post('answer59'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 60, $this->input->post('answer60'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 61, $this->input->post('answer61'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 62, $this->input->post('answer62'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 63, $this->input->post('answer63'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 64, $this->input->post('answer64'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 65, $this->input->post('answer65'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 66, $this->input->post('answer66'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 67, $this->input->post('answer67'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 68, $this->input->post('answer68'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 69, $this->input->post('answer69'), null);
		//$this->SurveyModel->insert_jawaban($no_survey, 70, $this->input->post('answer70'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 71, $this->input->post('answer71'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 72, $this->input->post('answer72'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 73, $this->input->post('answer73'), $jwbn73);
		$this->SurveyModel->insert_jawaban($no_survey, 74, $this->input->post('answer74'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 75, $this->input->post('answer75'),  $jwbn75);
		$this->SurveyModel->insert_jawaban($no_survey, 76, $this->input->post('answer76'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 77, $this->input->post('answer77'), $jwbn77);
		$this->SurveyModel->insert_jawaban($no_survey, 78, $this->input->post('answer78'), null);
		// G
		$this->SurveyModel->insert_jawaban($no_survey, 79, implode(',', $this->input->post('answer79[]')), null);
		$this->SurveyModel->insert_jawaban($no_survey, 80, implode(',', $this->input->post('answer80[]')), null);
		$this->SurveyModel->insert_jawaban($no_survey, 81, implode(',', $this->input->post('answer81[]')), null);
		// H
		$this->SurveyModel->insert_jawaban($no_survey, 82, $this->input->post('answer82'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 83, implode(',', $this->input->post('answer83[]')), null);
		// AO
		$this->SurveyModel->insert_jawaban($no_survey, 84, implode(',', $this->input->post('answer84[]')), null);
		$this->SurveyModel->insert_jawaban($no_survey, 85, $this->input->post('answer85'), $jwbn85);
		$this->SurveyModel->insert_jawaban($no_survey, 86, $this->input->post('answer86'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 87, $this->input->post('answer87'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 88, $this->input->post('answer88'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 89, $this->input->post('answer89'), $jwbn89);
		$this->SurveyModel->insert_jawaban($no_survey, 90, $this->input->post('answer90'),$jwbn90);
		$this->SurveyModel->insert_jawaban($no_survey, 91, $this->input->post('answer91'),  $jwbn91);
		// BO
		$this->SurveyModel->insert_jawaban($no_survey, 92, $this->input->post('answer92'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 93, $this->input->post('answer93'), $jwbn93);
		$this->SurveyModel->insert_jawaban($no_survey, 94, $this->input->post('answer94'), null);
		// CO
		$this->SurveyModel->insert_jawaban($no_survey, 95, $this->input->post('answer95'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 96, $this->input->post('answer96'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 97, $this->input->post('answer97'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 98, $this->input->post('answer98'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 99, $this->input->post('answer99'), $jwbn99);
		$this->SurveyModel->insert_jawaban($no_survey, 100, $this->input->post('answer100'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 101, $this->input->post('answer101'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 102, $this->input->post('answer102'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 103, $this->input->post('answer103'), null);
		// DO
		$this->SurveyModel->insert_jawaban($no_survey, 104, $this->input->post('answer104'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 105, implode(',', $this->input->post('answer105[]')), null);
		$this->SurveyModel->insert_jawaban($no_survey, 106, $this->input->post('answer106'), $jwbn106);
		// EO
		$this->SurveyModel->insert_jawaban($no_survey, 107, $this->input->post('answer107'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 108, $this->input->post('answer108'), $jwbn108);
		$this->SurveyModel->insert_jawaban($no_survey, 109, $this->input->post('answer109'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 110, $this->input->post('answer110'), $jwbn110);
		$this->SurveyModel->insert_jawaban($no_survey, 111, $this->input->post('answer111'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 112, $this->input->post('answer112'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 113, implode(',', $this->input->post('answer113[]')), null);
		$this->SurveyModel->insert_jawaban($no_survey, 114, $this->input->post('answer114'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 115, $this->input->post('answer115'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 116, implode(',', $this->input->post('answer116[]')), null);
		$this->SurveyModel->insert_jawaban($no_survey, 117, $this->input->post('answer117'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 118, implode(',', $this->input->post('answer118[]')), null);
		$this->SurveyModel->insert_jawaban($no_survey, 119, implode(',', $this->input->post('answer119[]')), null);
		$this->SurveyModel->insert_jawaban($no_survey, 120, $this->input->post('answer120'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 121, $this->input->post('answer121'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 122, $this->input->post('answer122'), null);
		$this->SurveyModel->insert_jawaban($no_survey, 123, $this->input->post('answer123'), null);

		redirect('admin/hasil');
	}
}
