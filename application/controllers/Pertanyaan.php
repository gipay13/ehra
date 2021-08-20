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

		// B
		$this->SurveyModel->insertJawaban($no_survey, 1, $this->input->post('answer1'));
		$this->SurveyModel->insertJawaban($no_survey, 2, $this->input->post('answer2'));
		$this->SurveyModel->insertJawaban($no_survey, 3, $this->input->post('answer3'));
		$this->SurveyModel->insertJawaban($no_survey, 4, $this->input->post('answer4'));
		$this->SurveyModel->insertJawaban($no_survey, 5, $this->input->post('answer5'));
		$this->SurveyModel->insertJawaban($no_survey, 6, $this->input->post('answer6'));
		$this->SurveyModel->insertJawaban($no_survey, 7, $this->input->post('answer7'));
		$this->SurveyModel->insertJawaban($no_survey, 8, $this->input->post('answer8'));
		$this->SurveyModel->insertJawaban($no_survey, 9, $this->input->post('answer9'));
		$this->SurveyModel->insertJawaban($no_survey, 10, $this->input->post('answer10'));
		$this->SurveyModel->insertJawaban($no_survey, 11, $this->input->post('answer11'));
		$this->SurveyModel->insertJawaban($no_survey, 12, $this->input->post('answer12'));
		$this->SurveyModel->insertJawaban($no_survey, 13, $this->input->post('answer13A'));
		$this->SurveyModel->insertJawaban($no_survey, 13, $this->input->post('answer13B'));
		$this->SurveyModel->insertJawaban($no_survey, 13, $this->input->post('answer13C'));
		$this->SurveyModel->insertJawaban($no_survey, 13, $this->input->post('answer13D'));
		$this->SurveyModel->insertJawaban($no_survey, 14, $this->input->post('answer14A'));
		$this->SurveyModel->insertJawaban($no_survey, 14, $this->input->post('answer14B'));
		$this->SurveyModel->insertJawaban($no_survey, 14, $this->input->post('answer14C'));
		$this->SurveyModel->insertJawaban($no_survey, 14, $this->input->post('answer14D'));
		// C
		$this->SurveyModel->insertJawaban($no_survey, 15, $this->input->post('answer15'));
		$this->SurveyModel->insertJawaban($no_survey, 16, implode(',', $this->input->post('answer16[]')));
		$this->SurveyModel->insertJawaban($no_survey, 17, $this->input->post('answer17'));
		$this->SurveyModel->insertJawaban($no_survey, 18, $this->input->post('answer18'));
		$this->SurveyModel->insertJawaban($no_survey, 19, implode(',', $this->input->post('answer19[]')));
		$this->SurveyModel->insertJawaban($no_survey, 20, $this->input->post('answer20'));
		$this->SurveyModel->insertJawaban($no_survey, 21, $this->input->post('answer21'));
		$this->SurveyModel->insertJawaban($no_survey, 22, $this->input->post('answer22'));
		$this->SurveyModel->insertJawaban($no_survey, 23, $this->input->post('answer23'));
		$this->SurveyModel->insertJawaban($no_survey, 24, $this->input->post('answer24'));
		// D
		$this->SurveyModel->insertJawaban($no_survey, 25, $this->input->post('answer25'));
		$this->SurveyModel->insertJawaban($no_survey, 26, implode(',', $this->input->post('answer26[]')));
		$this->SurveyModel->insertJawaban($no_survey, 27, $this->input->post('answer27'));
		$this->SurveyModel->insertJawaban($no_survey, 28, $this->input->post('answer28'));
		$this->SurveyModel->insertJawaban($no_survey, 29, $this->input->post('answer29'));
		$this->SurveyModel->insertJawaban($no_survey, 30, $this->input->post('answer30'));
		$this->SurveyModel->insertJawaban($no_survey, 31, $this->input->post('answer31'));
		$this->SurveyModel->insertJawaban($no_survey, 32, $this->input->post('answer32'));
		$this->SurveyModel->insertJawaban($no_survey, 33, $this->input->post('answer33'));
		$this->SurveyModel->insertJawaban($no_survey, 34, $this->input->post('answer34'));
		$this->SurveyModel->insertJawaban($no_survey, 35, $this->input->post('answer35'));
		$this->SurveyModel->insertJawaban($no_survey, 36, $this->input->post('answer36'));
		$this->SurveyModel->insertJawaban($no_survey, 37, $this->input->post('answer37'));
		$this->SurveyModel->insertJawaban($no_survey, 38, $this->input->post('answer38'));
		$this->SurveyModel->insertJawaban($no_survey, 39, $this->input->post('answer39'));
		$this->SurveyModel->insertJawaban($no_survey, 40, $this->input->post('answer40'));
		$this->SurveyModel->insertJawaban($no_survey, 41, $this->input->post('answer41'));
		$this->SurveyModel->insertJawaban($no_survey, 42, $this->input->post('answer42'));
		$this->SurveyModel->insertJawaban($no_survey, 43, $this->input->post('answer43'));
		$this->SurveyModel->insertJawaban($no_survey, 44, $this->input->post('answer44'));
		$this->SurveyModel->insertJawaban($no_survey, 45, $this->input->post('answer45'));
		$this->SurveyModel->insertJawaban($no_survey, 46, $this->input->post('answer46'));
		$this->SurveyModel->insertJawaban($no_survey, 47, $this->input->post('answer47'));
		$this->SurveyModel->insertJawaban($no_survey, 48, $this->input->post('answer48'));
		// E
		$this->SurveyModel->insertJawaban($no_survey, 49, $this->input->post('answer49'));
		$this->SurveyModel->insertJawaban($no_survey, 50, $this->input->post('answer50'));
		$this->SurveyModel->insertJawaban($no_survey, 51, $this->input->post('answer51'));
		$this->SurveyModel->insertJawaban($no_survey, 52, $this->input->post('answer52'));
		$this->SurveyModel->insertJawaban($no_survey, 53, $this->input->post('answer53'));
		$this->SurveyModel->insertJawaban($no_survey, 54, $this->input->post('answer54'));
		$this->SurveyModel->insertJawaban($no_survey, 55, $this->input->post('answer55'));
		$this->SurveyModel->insertJawaban($no_survey, 56, $this->input->post('answer56'));
		$this->SurveyModel->insertJawaban($no_survey, 57, $this->input->post('answer57'));
		// F
		$this->SurveyModel->insertJawaban($no_survey, 58, $this->input->post('answer58'));
		$this->SurveyModel->insertJawaban($no_survey, 59, $this->input->post('answer59'));
		$this->SurveyModel->insertJawaban($no_survey, 60, $this->input->post('answer60'));
		$this->SurveyModel->insertJawaban($no_survey, 61, $this->input->post('answer61'));
		$this->SurveyModel->insertJawaban($no_survey, 62, $this->input->post('answer62'));
		$this->SurveyModel->insertJawaban($no_survey, 63, $this->input->post('answer63'));
		$this->SurveyModel->insertJawaban($no_survey, 64, $this->input->post('answer64'));
		$this->SurveyModel->insertJawaban($no_survey, 65, $this->input->post('answer65'));
		$this->SurveyModel->insertJawaban($no_survey, 66, $this->input->post('answer66'));
		$this->SurveyModel->insertJawaban($no_survey, 67, $this->input->post('answer67'));
		$this->SurveyModel->insertJawaban($no_survey, 68, $this->input->post('answer68'));
		$this->SurveyModel->insertJawaban($no_survey, 69, $this->input->post('answer69'));
		$this->SurveyModel->insertJawaban($no_survey, 70, $this->input->post('answer70'));
		$this->SurveyModel->insertJawaban($no_survey, 71, $this->input->post('answer71'));
		$this->SurveyModel->insertJawaban($no_survey, 72, $this->input->post('answer72'));
		$this->SurveyModel->insertJawaban($no_survey, 73, $this->input->post('answer73'));
		$this->SurveyModel->insertJawaban($no_survey, 74, $this->input->post('answer74'));
		$this->SurveyModel->insertJawaban($no_survey, 75, $this->input->post('answer75'));
		$this->SurveyModel->insertJawaban($no_survey, 76, $this->input->post('answer76'));
		$this->SurveyModel->insertJawaban($no_survey, 77, $this->input->post('answer77'));
		$this->SurveyModel->insertJawaban($no_survey, 78, $this->input->post('answer78'));
		// G
		$this->SurveyModel->insertJawaban($no_survey, 79, implode(',', $this->input->post('answer79[]')));
		$this->SurveyModel->insertJawaban($no_survey, 80, implode(',', $this->input->post('answer80[]')));
		$this->SurveyModel->insertJawaban($no_survey, 81, implode(',', $this->input->post('answer81[]')));
		// H
		$this->SurveyModel->insertJawaban($no_survey, 82, $this->input->post('answer82'));
		$this->SurveyModel->insertJawaban($no_survey, 83, implode(',', $this->input->post('answer83[]')));
		// AO
		$this->SurveyModel->insertJawaban($no_survey, 84, implode(',', $this->input->post('answer84[]')));
		$this->SurveyModel->insertJawaban($no_survey, 85, $this->input->post('answer85'));
		$this->SurveyModel->insertJawaban($no_survey, 86, $this->input->post('answer86'));
		$this->SurveyModel->insertJawaban($no_survey, 87, $this->input->post('answer87'));
		$this->SurveyModel->insertJawaban($no_survey, 88, $this->input->post('answer88'));
		$this->SurveyModel->insertJawaban($no_survey, 89, $this->input->post('answer89'));
		$this->SurveyModel->insertJawaban($no_survey, 90, $this->input->post('answer90'));
		$this->SurveyModel->insertJawaban($no_survey, 91, $this->input->post('answer91'));
		// BO
		$this->SurveyModel->insertJawaban($no_survey, 92, $this->input->post('answer92'));
		$this->SurveyModel->insertJawaban($no_survey, 93, $this->input->post('answer93'));
		$this->SurveyModel->insertJawaban($no_survey, 94, $this->input->post('answer94'));
		// CO
		$this->SurveyModel->insertJawaban($no_survey, 95, $this->input->post('answer95'));
		$this->SurveyModel->insertJawaban($no_survey, 96, $this->input->post('answer96'));
		$this->SurveyModel->insertJawaban($no_survey, 97, $this->input->post('answer97'));
		$this->SurveyModel->insertJawaban($no_survey, 98, $this->input->post('answer98'));
		$this->SurveyModel->insertJawaban($no_survey, 99, $this->input->post('answer99'));
		$this->SurveyModel->insertJawaban($no_survey, 100, $this->input->post('answer100'));
		$this->SurveyModel->insertJawaban($no_survey, 101, $this->input->post('answer101'));
		$this->SurveyModel->insertJawaban($no_survey, 102, $this->input->post('answer102'));
		$this->SurveyModel->insertJawaban($no_survey, 103, $this->input->post('answer103'));
		// DO
		$this->SurveyModel->insertJawaban($no_survey, 104, $this->input->post('answer104'));
		$this->SurveyModel->insertJawaban($no_survey, 105, implode(',', $this->input->post('answer105[]')));
		$this->SurveyModel->insertJawaban($no_survey, 106, $this->input->post('answer106'));
		// EO
		$this->SurveyModel->insertJawaban($no_survey, 107, $this->input->post('answer107'));
		$this->SurveyModel->insertJawaban($no_survey, 108, $this->input->post('answer108'));
		$this->SurveyModel->insertJawaban($no_survey, 109, $this->input->post('answer109'));
		$this->SurveyModel->insertJawaban($no_survey, 110, $this->input->post('answer110'));
		$this->SurveyModel->insertJawaban($no_survey, 111, $this->input->post('answer111'));
		$this->SurveyModel->insertJawaban($no_survey, 112, $this->input->post('answer112'));
		$this->SurveyModel->insertJawaban($no_survey, 113, implode(',', $this->input->post('answer113[]')));
		$this->SurveyModel->insertJawaban($no_survey, 114, $this->input->post('answer114'));
		$this->SurveyModel->insertJawaban($no_survey, 115, $this->input->post('answer115'));
		$this->SurveyModel->insertJawaban($no_survey, 116, implode(',', $this->input->post('answer116[]')));
		$this->SurveyModel->insertJawaban($no_survey, 117, $this->input->post('answer117'));
		$this->SurveyModel->insertJawaban($no_survey, 118, implode(',', $this->input->post('answer118[]')));
		$this->SurveyModel->insertJawaban($no_survey, 119, implode(',', $this->input->post('answer119[]')));
		$this->SurveyModel->insertJawaban($no_survey, 120, $this->input->post('answer120'));
		$this->SurveyModel->insertJawaban($no_survey, 121, $this->input->post('answer121'));
		$this->SurveyModel->insertJawaban($no_survey, 122, $this->input->post('answer122'));
		$this->SurveyModel->insertJawaban($no_survey, 123, $this->input->post('answer123'));

		redirect('admin/hasil');
	}
}
