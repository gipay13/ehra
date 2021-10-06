<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey extends CI_Controller
{
	public $CI = NULL;

	function __construct()
	{
		parent::__construct();
		$this->load->model(['SurveyModel']);
		if (
			$this->session->userdata('level') == 1 ||
			$this->session->userdata('level') == 3 ||
			$this->session->userdata('level') == 4
		)
			redirect('admin/dashboard');
		if (!$this->session->userdata('username'))
			redirect('auth');
		$this->CI = &get_instance();
	}

	public function index()
	{
		$data = array(
			'kategoriB' => $this->SurveyModel->get_kategori_pertanyaan('B'),
			'kategoriC' => $this->SurveyModel->get_kategori_pertanyaan('C'),
			'kategoriD' => $this->SurveyModel->get_kategori_pertanyaan('D'),
			'kategoriE' => $this->SurveyModel->get_kategori_pertanyaan('E'),
			'kategoriF' => $this->SurveyModel->get_kategori_pertanyaan('F'),
			'kategoriG' => $this->SurveyModel->get_kategori_pertanyaan('G'),
			'kategoriH' => $this->SurveyModel->get_kategori_pertanyaan('H'),
			'kategoriAO' => $this->SurveyModel->get_kategori_pertanyaan('AO'),
			'kategoriBO' => $this->SurveyModel->get_kategori_pertanyaan('BO'),
			'kategoriCO' => $this->SurveyModel->get_kategori_pertanyaan('CO'),
			'kategoriDO' => $this->SurveyModel->get_kategori_pertanyaan('DO'),
			'kategoriEO' => $this->SurveyModel->get_kategori_pertanyaan('EO'),
		);

		$this->template->load('layouts/layouts-survey', 'survey_pages/survey-page', $data);
	}

	public function pertanyaan($value)
	{
		$data = $this->SurveyModel->get_pertanyaan($value);

		return $data;
	}

	public function jawaban($value)
	{
		$data = $this->SurveyModel->get_jawaban($value);

		return $data;
	}

	public function radio($id, $id_pertanyaan, $label) {
		echo '	<div class="custom-control custom-radio mb-1">
					<input type="radio" id="'.$id.'" name="answer'.$id_pertanyaan.'" class="custom-control-input" value="'.$id.'">
					<label class="custom-control-label" for="'.$id.'">'.$label.'</label>
				</div>';
	}

	public function checkbox($id, $id_pertanyaan, $label)
	{
		echo '	<div class="custom-control custom-checkbox mb-1">
					<input type="checkbox" class="custom-control-input" name="answer'.$id_pertanyaan.'[]" id="'. $id.'" value="'.$id. '">
					<label class="custom-control-label" for="'. $id.'">'.$label.'</label>
				</div>';
	}

	public function store()
	{

		$store = $this->input->post(null, TRUE);

		// echo "<pre>";
		// print_r($store);
		// echo "</pre>";
		$no_survey = $this->input->post('no_survey');

		$this->db->trans_start();
		// B
		$this->SurveyModel->insert_jawaban($no_survey, 1, $store['answer1']);
		$this->SurveyModel->insert_jawaban($no_survey, 2, $store['answer2']);
		$this->SurveyModel->insert_jawaban($no_survey, 3, $store['answer3']);
		$this->SurveyModel->insert_jawaban($no_survey, 4, $store['answer4']);
		$this->SurveyModel->insert_jawaban($no_survey, 5, $store['answer5']);
		$this->SurveyModel->insert_jawaban($no_survey, 6, $store['answer6']);
		$this->SurveyModel->insert_jawaban($no_survey, 7, $store['answer7']);
		$this->SurveyModel->insert_jawaban($no_survey, 8, $store['answer8']);
		$this->SurveyModel->insert_jawaban($no_survey, 9, $store['answer9']);
		$this->SurveyModel->insert_jawaban($no_survey, 10, $store['answer10']);
		$this->SurveyModel->insert_jawaban($no_survey, 11, $store['answer11']);
		$this->SurveyModel->insert_jawaban($no_survey, 12, $store['answer12']);
		$this->SurveyModel->insert_jawaban($no_survey, 124, $store['answer13']);
		$this->SurveyModel->insert_jawaban($no_survey, 128, $store['answer14']);
		// C
		$this->SurveyModel->insert_jawaban($no_survey, 15, $store['answer15']);
		for($i = 0; $i < count($store['answer16']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 16, $store['answer16'][$i]);
		}
		$this->SurveyModel->insert_jawaban($no_survey, 17, $store['answer17']);
		$this->SurveyModel->insert_jawaban($no_survey, 18, $store['answer18']);
		$this->SurveyModel->insert_jawaban($no_survey, 19, implode(',', $store['answer19']));
		$this->SurveyModel->insert_jawaban($no_survey, 20, $store['answer20']);
		$this->SurveyModel->insert_jawaban($no_survey, 21, $store['answer21']);
		$this->SurveyModel->insert_jawaban($no_survey, 22, $store['answer22']);
		$this->SurveyModel->insert_jawaban($no_survey, 23, $store['answer23']);
		$this->SurveyModel->insert_jawaban($no_survey, 24, $store['answer24']);
		// D
		$this->SurveyModel->insert_jawaban($no_survey, 25, $store['answer25']);
		for ($i = 0; $i < count($store['answer26']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 26, $store['answer26'][$i]);
		}
		$this->SurveyModel->insert_jawaban($no_survey, 27, $store['answer27']);
		$this->SurveyModel->insert_jawaban($no_survey, 28, $store['answer28']);
		$this->SurveyModel->insert_jawaban($no_survey, 29, $store['answer29']);
		$this->SurveyModel->insert_jawaban($no_survey, 30, $store['answer30']);
		$this->SurveyModel->insert_jawaban($no_survey, 31, $store['answer31']);
		$this->SurveyModel->insert_jawaban($no_survey, 32, $store['answer32']);
		$this->SurveyModel->insert_jawaban($no_survey, 33, $store['answer33']);
		$this->SurveyModel->insert_jawaban($no_survey, 34, $store['answer34']);
		$this->SurveyModel->insert_jawaban($no_survey, 35, $store['answer35']);
		$this->SurveyModel->insert_jawaban($no_survey, 36, $store['answer36']);
		$this->SurveyModel->insert_jawaban($no_survey, 37, $store['answer37']);
		$this->SurveyModel->insert_jawaban($no_survey, 38, $store['answer38']);
		$this->SurveyModel->insert_jawaban($no_survey, 39, $store['answer39']);
		$this->SurveyModel->insert_jawaban($no_survey, 40, $store['answer40']);
		$this->SurveyModel->insert_jawaban($no_survey, 41, $store['answer41']);
		$this->SurveyModel->insert_jawaban($no_survey, 42, $store['answer42']);
		$this->SurveyModel->insert_jawaban($no_survey, 43, $store['answer43']);
		$this->SurveyModel->insert_jawaban($no_survey, 44, $store['answer44']);
		$this->SurveyModel->insert_jawaban($no_survey, 45, $store['answer45']);
		$this->SurveyModel->insert_jawaban($no_survey, 46, $store['answer46']);
		$this->SurveyModel->insert_jawaban($no_survey, 47, $store['answer47']);
		$this->SurveyModel->insert_jawaban($no_survey, 48, $store['answer48']);
		// E
		$this->SurveyModel->insert_jawaban($no_survey, 49, $store['answer49']);
		for ($i = 0; $i < count($store['answer50']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 50, $store['answer50'][$i]);
		}
		$this->SurveyModel->insert_jawaban($no_survey, 51, $store['answer51']);
		$this->SurveyModel->insert_jawaban($no_survey, 52, $store['answer52']);
		$this->SurveyModel->insert_jawaban($no_survey, 53, $store['answer53']);
		$this->SurveyModel->insert_jawaban($no_survey, 54, $store['answer54']);
		$this->SurveyModel->insert_jawaban($no_survey, 55, $store['answer55']);
		$this->SurveyModel->insert_jawaban($no_survey, 56, $store['answer56']);
		$this->SurveyModel->insert_jawaban($no_survey, 57, $store['answer57']);
		// F
		for ($i = 0; $i < count($store['answer58']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 58, $store['answer58'][$i]);
		}
		$this->SurveyModel->insert_jawaban($no_survey, 59, $store['answer59']);
		$this->SurveyModel->insert_jawaban($no_survey, 60, $store['answer60']);
		$this->SurveyModel->insert_jawaban($no_survey, 61, $store['answer61']);
		$this->SurveyModel->insert_jawaban($no_survey, 62, $store['answer62']);
		$this->SurveyModel->insert_jawaban($no_survey, 63, $store['answer63']);
		$this->SurveyModel->insert_jawaban($no_survey, 64, $store['answer64']);
		$this->SurveyModel->insert_jawaban($no_survey, 65, $store['answer65']);
		$this->SurveyModel->insert_jawaban($no_survey, 66, $store['answer66']);
		$this->SurveyModel->insert_jawaban($no_survey, 67, $store['answer67']);
		$this->SurveyModel->insert_jawaban($no_survey, 68, $store['answer68']);
		$this->SurveyModel->insert_jawaban($no_survey, 69, $store['answer69']);
		for ($i = 0; $i < count($store['answer70']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 70, $store['answer70'][$i]);
		}
		$this->SurveyModel->insert_jawaban($no_survey, 71, $store['answer71']);
		$this->SurveyModel->insert_jawaban($no_survey, 72, $store['answer72']);
		$this->SurveyModel->insert_jawaban($no_survey, 73, $store['answer73']);
		$this->SurveyModel->insert_jawaban($no_survey, 74, $store['answer74']);
		$this->SurveyModel->insert_jawaban($no_survey, 75, $store['answer75']);
		$this->SurveyModel->insert_jawaban($no_survey, 76, $store['answer76']);
		$this->SurveyModel->insert_jawaban($no_survey, 77, $store['answer77']);
		// G
		$this->SurveyModel->insert_jawaban($no_survey, 78, $store['answer78']);
		for ($i = 0; $i < count($store['answer79']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 79, $store['answer79'][$i]);
		}
		for ($i = 0; $i < count($store['answer80']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 80, $store['answer80'][$i]);
		}
		for ($i = 0; $i < count($store['answer81']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 81, $store['answer81'][$i]);
		}
		// H
		$this->SurveyModel->insert_jawaban($no_survey, 82, $store['answer82']);
		for ($i = 0; $i < count($store['answer83']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 83, $store['answer83'][$i]);
		}
		// AO
		for ($i = 0; $i < count($store['answer84']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 84,$store['answer84'][$i]);
		}
		$this->SurveyModel->insert_jawaban($no_survey, 85, $store['answer85']);
		$this->SurveyModel->insert_jawaban($no_survey, 86, $store['answer86']);
		$this->SurveyModel->insert_jawaban($no_survey, 87, $store['answer87']);
		$this->SurveyModel->insert_jawaban($no_survey, 88, $store['answer88']);
		$this->SurveyModel->insert_jawaban($no_survey, 89, $store['answer89']);
		$this->SurveyModel->insert_jawaban($no_survey, 90, $store['answer90']);
		$this->SurveyModel->insert_jawaban($no_survey, 91, $store['answer91']);
		// BO
		$this->SurveyModel->insert_jawaban($no_survey, 92, $store['answer92']);
		$this->SurveyModel->insert_jawaban($no_survey, 93, $store['answer93']);
		$this->SurveyModel->insert_jawaban($no_survey, 94, $store['answer94']);
		// CO
		$this->SurveyModel->insert_jawaban($no_survey, 95, $store['answer95']);
		$this->SurveyModel->insert_jawaban($no_survey, 96, $store['answer96']);
		$this->SurveyModel->insert_jawaban($no_survey, 97, $store['answer97']);
		$this->SurveyModel->insert_jawaban($no_survey, 98, $store['answer98']);
		$this->SurveyModel->insert_jawaban($no_survey, 99, $store['answer99']);
		$this->SurveyModel->insert_jawaban($no_survey, 100, $store['answer100']);
		$this->SurveyModel->insert_jawaban($no_survey, 101, $store['answer101']);
		$this->SurveyModel->insert_jawaban($no_survey, 102, $store['answer102']);
		$this->SurveyModel->insert_jawaban($no_survey, 103, $store['answer103']);
		// DO
		$this->SurveyModel->insert_jawaban($no_survey, 104, $store['answer104']);
		for ($i = 0; $i < count($store['answer105']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 105, $store['answer105'][$i]);
		}
		$this->SurveyModel->insert_jawaban($no_survey, 106, $store['answer106']);
		// EO
		$this->SurveyModel->insert_jawaban($no_survey, 107, $store['answer107']);
		$this->SurveyModel->insert_jawaban($no_survey, 108, $store['answer108']);
		$this->SurveyModel->insert_jawaban($no_survey, 109, $store['answer109']);
		$this->SurveyModel->insert_jawaban($no_survey, 110, $store['answer110']);
		$this->SurveyModel->insert_jawaban($no_survey, 111, $store['answer111']);
		$this->SurveyModel->insert_jawaban($no_survey, 112, $store['answer112']);
		for ($i = 0; $i < count($store['answer113']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 113, $store['answer113'][$i]);
		}
		$this->SurveyModel->insert_jawaban($no_survey, 114, $store['answer114']);
		$this->SurveyModel->insert_jawaban($no_survey, 115, $store['answer115']);
		for ($i = 0; $i < count($store['answer116']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 116, $store['answer116'][$i]);
		}
		$this->SurveyModel->insert_jawaban($no_survey, 117, $store['answer117']);
		for ($i = 0; $i < count($store['answer118']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 118, $store['answer118'][$i]);
		}
		for ($i = 0; $i < count($store['answer119']); $i++) {
			$this->SurveyModel->insert_jawaban($no_survey, 119, $store['answer119'][$i]);
		}
		$this->SurveyModel->insert_jawaban($no_survey, 120, $store['answer120']);
		$this->SurveyModel->insert_jawaban($no_survey, 121, $store['answer121']);
		$this->SurveyModel->insert_jawaban($no_survey, 122, $store['answer122']);
		$this->SurveyModel->insert_jawaban($no_survey, 123, $store['answer123']);
		$this->db->trans_complete();

		redirect('admin/hasil');
	}
}
