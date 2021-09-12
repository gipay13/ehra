<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey extends CI_Controller
{
	public $CI = NULL;

	function __construct()
	{
		parent::__construct();
		$this->load->model(['SurveyModel']);
		if (!$this->session->userdata('username'))
			redirect('auth');
		$this->CI = &get_instance();
	}

	public function index()
	{
		$data = array(
			'kategoriB' => $this->SurveyModel->kategori_pertanyaan('B'),
			'kategoriC' => $this->SurveyModel->kategori_pertanyaan('C'),
			'kategoriD' => $this->SurveyModel->kategori_pertanyaan('D'),
			'kategoriE' => $this->SurveyModel->kategori_pertanyaan('E'),
			'kategoriF' => $this->SurveyModel->kategori_pertanyaan('F'),
			'kategoriG' => $this->SurveyModel->kategori_pertanyaan('G'),
			'kategoriH' => $this->SurveyModel->kategori_pertanyaan('H'),
			'kategoriAO' => $this->SurveyModel->kategori_pertanyaan('AO'),
			'kategoriBO' => $this->SurveyModel->kategori_pertanyaan('BO'),
			'kategoriCO' => $this->SurveyModel->kategori_pertanyaan('CO'),
			'kategoriDO' => $this->SurveyModel->kategori_pertanyaan('DO'),
			'kategoriEO' => $this->SurveyModel->kategori_pertanyaan('EO'),
		);

		$this->template->load('layouts/layouts-survey', 'survey_pages/survey-page', $data);
	}

	public function pertanyaan($value)
	{
		$data = $this->SurveyModel->pertanyaan($value);

		return $data;
	}

	public function sub_pertanyaan($value)
	{
		$data = $this->SurveyModel->sub_pertanyaan($value);

		return $data;
	}

	public function store()
	{

		$store = $this->input->post(null, TRUE);

		// echo "<pre>";
		// print_r($store);
		// echo "</pre>";
		$no_survey = $this->input->post('no_survey');

		$jwbn10 = $store['answer10'] == 2
			? $store['answer10tf1']
			: ($store['answer10'] == 3
				? $store['answer10tf2']
				: null);
		$jwbn17 = $store['answer17'] == 9 ? $store['answer17tf1'] : null;
		$jwbn20 = $store['answer20'] == 7 ? $store['answer20tf1'] : null;
		$jwbn24 = $store['answer24'] == 1 ? $store['answer24tf1'] : null;
		$jwbn25 = $store['answer25'] == 9 ? $store['answer25tf1'] : null;
		$jwbn29 = $store['answer29'] == 12 ? $store['answer29tf1'] :  null;
		$jwbn37 = $store['answer37'] == 4 ? $store['answer37tf1'] : null;
		$jwbn39 = $store['answer39'] == 5 ? $store['answer39tf1'] : null;
		$jwbn41 = $store['answer41'] == 5 ? $store['answer41tf1'] : null;
		$jwbn45 = $store['answer45'] == 3 ? $store['answer45tf1'] : null;
		$jwbn48 = $store['answer48'] == 3 ? $store['answer48tf1'] : null;
		$jwbn73 = $store['answer73'] == 1 ? $store['answer73tf1'] : null;
		$jwbn75 = $store['answer75'] == 7 ? $store['answer75tf1'] : null;
		$jwbn77 = $store['answer77'] == 4 ? $store['answer77tf1'] : null;
		$jwbn85 = $store['answer85'] == 4 ? $store['answer85tf1'] : null;
		$jwbn89 = $store['answer89'] == 5 ? $store['answer89tf1'] : null;
		$jwbn90 = $store['answer90'] == 5 ? $store['answer90tf1'] : null;
		$jwbn91 = $store['answer91'] == 9 ? $store['answer91tf1'] : null;
		$jwbn93 = $store['answer93'] == 9 ? $store['answer93tf1'] : null;
		$jwbn99 = $store['answer99'] == 11 ? $store['answer99tf1'] : null;
		$jwbn106 = $store['answer106'] == 9 ? $store['answer106tf1'] : null;
		$jwbn108 = $store['answer108'] == 6 ? $store['answer108tf1'] : null;
		$jwbn110 = $store['answer110'] == 9 ? $store['answer110tf1'] : null;

		// B
		$this->SurveyModel->insert_jawaban($no_survey, 1, $store['answer1'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 2, $store['answer2'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 3, $store['answer3'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 4, $store['answer4'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 5, $store['answer5'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 6, $store['answer6'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 7, $store['answer7'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 8, $store['answer8'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 9, $store['answer9'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 10, $store['answer10'], $jwbn10);
		$this->SurveyModel->insert_jawaban($no_survey, 11, $store['answer11'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 12, $store['answer12'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 128, $store['answer128'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 129, $store['answer129'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 131, $store['answer131'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 132, $store['answer132'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 133, $store['answer133'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 134, $store['answer134'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 136, $store['answer136'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 137, $store['answer137'], null);
		// C
		$this->SurveyModel->insert_jawaban($no_survey, 15, $store['answer15'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 16, implode(',', $store['answer16']), null);
		$this->SurveyModel->insert_jawaban($no_survey, 17, $store['answer17'], $jwbn17);
		$this->SurveyModel->insert_jawaban($no_survey, 18, $store['answer18'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 19, implode(',', $store['answer19']), null);
		$this->SurveyModel->insert_jawaban($no_survey, 20, $store['answer20'], $jwbn20);
		$this->SurveyModel->insert_jawaban($no_survey, 21, $store['answer21'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 22, $store['answer22'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 23, $store['answer23'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 24, $store['answer24'], $jwbn24);
		// D
		$this->SurveyModel->insert_jawaban($no_survey, 25, $store['answer25'], $jwbn25);
		$this->SurveyModel->insert_jawaban($no_survey, 26, implode(',', $store['answer26']), null);
		$this->SurveyModel->insert_jawaban($no_survey, 27, $store['answer27'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 28, $store['answer28'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 29, $store['answer29'], $jwbn29);
		$this->SurveyModel->insert_jawaban($no_survey, 30, $store['answer30'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 31, $store['answer31'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 32, $store['answer32'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 33, $store['answer33'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 34, $store['answer34'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 35, $store['answer35'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 36, $store['answer36'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 37, $store['answer37'], $jwbn37);
		$this->SurveyModel->insert_jawaban($no_survey, 38, $store['answer38'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 39, $store['answer39'], $jwbn39);
		$this->SurveyModel->insert_jawaban($no_survey, 40, $store['answer40'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 41, $store['answer41'], $jwbn41);
		$this->SurveyModel->insert_jawaban($no_survey, 42, $store['answer42'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 43, $store['answer43'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 44, $store['answer44'], $jwbn45);
		$this->SurveyModel->insert_jawaban($no_survey, 45, $store['answer45'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 46, $store['answer46'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 47, $store['answer47'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 48, $store['answer48'], $jwbn48);
		// E
		$this->SurveyModel->insert_jawaban($no_survey, 49, $store['answer49'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 51, $store['answer51'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 52, $store['answer52'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 53, $store['answer53'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 54, $store['answer54'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 55, $store['answer55'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 56, $store['answer56'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 138, $store['answer138'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 139, $store['answer139'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 140, $store['answer140'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 141, $store['answer141'], null);
		// F
		$this->SurveyModel->insert_jawaban($no_survey, 58, $store['answer58'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 59, $store['answer59'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 60, $store['answer60'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 61, $store['answer61'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 62, $store['answer62'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 63, $store['answer63'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 64, $store['answer64'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 65, $store['answer65'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 66, $store['answer66'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 67, $store['answer67'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 68, $store['answer68'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 69, $store['answer69'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 71, $store['answer71'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 72, $store['answer72'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 73, $store['answer73'], $jwbn73);
		$this->SurveyModel->insert_jawaban($no_survey, 74, $store['answer74'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 75, $store['answer75'],  $jwbn75);
		$this->SurveyModel->insert_jawaban($no_survey, 76, $store['answer76'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 77, $store['answer77'], $jwbn77);
		// G
		$this->SurveyModel->insert_jawaban($no_survey, 78, $store['answer78'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 79, implode(',', $store['answer79']), null);
		$this->SurveyModel->insert_jawaban($no_survey, 80, implode(',', $store['answer80']), null);
		$this->SurveyModel->insert_jawaban($no_survey, 81, implode(',', $store['answer81']), null);
		// H
		$this->SurveyModel->insert_jawaban($no_survey, 82, $store['answer82'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 83, implode(',', $store['answer83']), null);
		// AO
		$this->SurveyModel->insert_jawaban($no_survey, 84, implode(',', $store['answer84']), null);
		$this->SurveyModel->insert_jawaban($no_survey, 85, $store['answer85'], $jwbn85);
		$this->SurveyModel->insert_jawaban($no_survey, 86, $store['answer86'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 87, $store['answer87'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 88, $store['answer88'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 89, $store['answer89'], $jwbn89);
		$this->SurveyModel->insert_jawaban($no_survey, 90, $store['answer90'], $jwbn90);
		$this->SurveyModel->insert_jawaban($no_survey, 91, $store['answer91'],  $jwbn91);
		// BO
		$this->SurveyModel->insert_jawaban($no_survey, 92, $store['answer92'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 93, $store['answer93'], $jwbn93);
		$this->SurveyModel->insert_jawaban($no_survey, 94, $store['answer94'], null);
		// CO
		$this->SurveyModel->insert_jawaban($no_survey, 95, $store['answer95'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 96, $store['answer96'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 97, $store['answer97'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 98, $store['answer98'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 99, $store['answer99'], $jwbn99);
		$this->SurveyModel->insert_jawaban($no_survey, 100, $store['answer100'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 101, $store['answer101'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 102, $store['answer102'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 103, $store['answer103'], null);
		// DO
		$this->SurveyModel->insert_jawaban($no_survey, 104, $store['answer104'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 105, implode(',', $store['answer105']), null);
		$this->SurveyModel->insert_jawaban($no_survey, 106, $store['answer106'], $jwbn106);
		// EO
		$this->SurveyModel->insert_jawaban($no_survey, 107, $store['answer107'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 108, $store['answer108'], $jwbn108);
		$this->SurveyModel->insert_jawaban($no_survey, 109, $store['answer109'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 110, $store['answer110'], $jwbn110);
		$this->SurveyModel->insert_jawaban($no_survey, 111, $store['answer111'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 112, $store['answer112'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 113, implode(',', $store['answer113']), null);
		$this->SurveyModel->insert_jawaban($no_survey, 114, $store['answer114'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 115, $store['answer115'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 116, implode(',', $store['answer116']), null);
		$this->SurveyModel->insert_jawaban($no_survey, 117, $store['answer117'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 118, implode(',', $store['answer118']), null);
		$this->SurveyModel->insert_jawaban($no_survey, 119, implode(',', $store['answer119']), null);
		$this->SurveyModel->insert_jawaban($no_survey, 120, $store['answer120'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 121, $store['answer121'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 122, $store['answer122'], null);
		$this->SurveyModel->insert_jawaban($no_survey, 123, $store['answer123'], null);

		redirect('admin/hasil');
	}
}
