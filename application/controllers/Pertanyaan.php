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

		$answer1  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 1,
			'jawaban' 		=> $this->input->post('answer1')
		);

		$this->db->insert('hasil_survey', $answer1);

		$answer2  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 2,
			'jawaban' 		=> $this->input->post('answer2')
		);

		$this->db->insert('hasil_survey', $answer2);

		$answer3  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 3,
			'jawaban' 		=> $this->input->post('answer3')
		);

		$this->db->insert('hasil_survey', $answer3);

		$answer4  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 4,
			'jawaban' 		=> $this->input->post('answer4')
		);

		$this->db->insert('hasil_survey', $answer4);

		$answer5  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 5,
			'jawaban' 		=> $this->input->post('answer5')
		);

		$this->db->insert('hasil_survey', $answer5);

		$answer6  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 6,
			'jawaban' 		=> $this->input->post('answer6')
		);

		$this->db->insert('hasil_survey', $answer6);

		$answer7  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 7,
			'jawaban' 		=> $this->input->post('answer7')
		);

		$this->db->insert('hasil_survey', $answer7);

		$answer8  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 8,
			'jawaban' 		=> $this->input->post('answer8')
		);

		$this->db->insert('hasil_survey', $answer8);

		$answer9  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 9,
			'jawaban' 		=> $this->input->post('answer9')
		);

		$this->db->insert('hasil_survey', $answer9);

		$answer10  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 10,
			'jawaban' 		=> $jwbn10
		);

		$this->db->insert('hasil_survey', $answer10);

		$answer11  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 11,
			'jawaban' 		=> $this->input->post('answer11')
		);

		$this->db->insert('hasil_survey', $answer11);

		$answer12  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 12,
			'jawaban' 		=> $this->input->post('answer12')
		);

		$this->db->insert('hasil_survey', $answer12);

		$answer13A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 13,
			'jawaban' 		=> $this->input->post('answer13A')
		);

		$this->db->insert('hasil_survey', $answer13A);

		$answer13B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 13,
			'jawaban' 		=> $this->input->post('answer13B')
		);

		$this->db->insert('hasil_survey', $answer13B);

		$answer13C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 13,
			'jawaban' 		=> $this->input->post('answer13C')
		);

		$this->db->insert('hasil_survey', $answer13C);

		$answer13D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 13,
			'jawaban' 		=> $this->input->post('answer13D')
		);

		$this->db->insert('hasil_survey', $answer13D);

		$answer14A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 14,
			'jawaban' 		=> $this->input->post('answer14A')
		);

		$this->db->insert('hasil_survey', $answer14A);

		$answer14B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 14,
			'jawaban' 		=> $this->input->post('answer14B')
		);

		$this->db->insert('hasil_survey', $answer14B);

		$answer14C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 14,
			'jawaban' 		=> $this->input->post('answer14C')
		);

		$this->db->insert('hasil_survey', $answer14C);

		$answer14D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 14,
			'jawaban' 		=> $this->input->post('answer14D')
		);

		$this->db->insert('hasil_survey', $answer14D);

		$answer15  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 15,
			'jawaban' 		=> $this->input->post('answer15')
		);

		$this->db->insert('hasil_survey', $answer15);

		$answer16A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 16,
			'jawaban' 		=> $this->input->post('answer16A')
		);

		$this->db->insert('hasil_survey', $answer16A);

		$answer16B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 16,
			'jawaban' 		=> $this->input->post('answer16B')
		);

		$this->db->insert('hasil_survey', $answer16B);

		$answer16C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 16,
			'jawaban' 		=> $this->input->post('answer16C')
		);

		$this->db->insert('hasil_survey', $answer16C);

		$answer16D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 16,
			'jawaban' 		=> $this->input->post('answer16D')
		);

		$this->db->insert('hasil_survey', $answer16D);

		$answer16E  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 16,
			'jawaban' 		=> $this->input->post('answer16E')
		);

		$this->db->insert('hasil_survey', $answer16E);

		$answer16F  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 16,
			'jawaban' 		=> $this->input->post('answer16F')
		);

		$this->db->insert('hasil_survey', $answer16F);

		$answer16G  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 16,
			'jawaban' 		=> $this->input->post('answer16G')
		);

		$this->db->insert('hasil_survey', $answer16G);

		$answer16H  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 16,
			'jawaban' 		=> $this->input->post('answer16H')
		);

		$this->db->insert('hasil_survey', $answer16H);

		$answer16I  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 16,
			'jawaban' 		=> $this->input->post('answer16I')
		);

		$this->db->insert('hasil_survey', $answer16I);

		$answer17  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 17,
			'jawaban' 		=> $jwbn17
		);

		$this->db->insert('hasil_survey', $answer17);

		$answer18  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 18,
			'jawaban' 		=> $this->input->post('answer18')
		);

		$this->db->insert('hasil_survey', $answer18);

		$answer19A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 19,
			'jawaban' 		=> $this->input->post('answer19A')
		);

		$this->db->insert('hasil_survey', $answer19A);

		$answer19B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 19,
			'jawaban' 		=> $this->input->post('answer19B')
		);

		$this->db->insert('hasil_survey', $answer19B);

		$answer19C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 19,
			'jawaban' 		=> $this->input->post('answer19C')
		);

		$this->db->insert('hasil_survey', $answer19C);

		$answer19D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 19,
			'jawaban' 		=> $this->input->post('answer19D')
		);

		$this->db->insert('hasil_survey', $answer19D);

		$answer19E  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 19,
			'jawaban' 		=> $this->input->post('answer19E')
		);

		$this->db->insert('hasil_survey', $answer19E);

		$answer19F  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 19,
			'jawaban' 		=> $this->input->post('answer19F')
		);

		$this->db->insert('hasil_survey', $answer19F);

		$answer19G  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 19,
			'jawaban' 		=> $this->input->post('answer19G')
		);

		$this->db->insert('hasil_survey', $answer19G);

		$answer19H  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 19,
			'jawaban' 		=> $this->input->post('answer19H')
		);

		$this->db->insert('hasil_survey', $answer19H);

		$answer20  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 20,
			'jawaban' 		=> $jwbn20
		);

		$this->db->insert('hasil_survey', $answer20);

		$answer21  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 21,
			'jawaban' 		=> $this->input->post('answer21')
		);

		$this->db->insert('hasil_survey', $answer21);

		$answer22  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 22,
			'jawaban' 		=> $this->input->post('answer22')
		);

		$this->db->insert('hasil_survey', $answer22);

		$answer23  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 23,
			'jawaban' 		=> $this->input->post('answer23')
		);

		$this->db->insert('hasil_survey', $answer23);

		$answer24  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 24,
			'jawaban' 		=> $jwbn24
		);

		$this->db->insert('hasil_survey', $answer24);

		$answer25  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 25,
			'jawaban' 		=> $jwbn25
		);

		$this->db->insert('hasil_survey', $answer25);

		$answer26A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 26,
			'jawaban' 		=> $this->input->post('answer26A')
		);

		$this->db->insert('hasil_survey', $answer26A);

		$answer26B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 26,
			'jawaban' 		=> $this->input->post('answer26B')
		);

		$this->db->insert('hasil_survey', $answer26B);

		$answer26C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 26,
			'jawaban' 		=> $this->input->post('answer26C')
		);

		$this->db->insert('hasil_survey', $answer26C);

		$answer26D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 26,
			'jawaban' 		=> $this->input->post('answer26D')
		);

		$this->db->insert('hasil_survey', $answer26D);

		$answer26E  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 26,
			'jawaban' 		=> $this->input->post('answer26E')
		);

		$this->db->insert('hasil_survey', $answer26E);

		$answer26F  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 26,
			'jawaban' 		=> $this->input->post('answer26F')
		);

		$this->db->insert('hasil_survey', $answer26F);

		$answer26G  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 26,
			'jawaban' 		=> $this->input->post('answer26G')
		);

		$this->db->insert('hasil_survey', $answer26G);

		$answer26H  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 26,
			'jawaban' 		=> $this->input->post('answer26H')
		);

		$this->db->insert('hasil_survey', $answer26H);

		$answer26I  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 26,
			'jawaban' 		=> $this->input->post('answer26I')
		);

		$this->db->insert('hasil_survey', $answer26I);

		$answer26J  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 26,
			'jawaban' 		=> $this->input->post('answer26J')
		);

		$this->db->insert('hasil_survey', $answer26J);

		$answer26K  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 26,
			'jawaban' 		=> $this->input->post('answer26K')
		);

		$this->db->insert('hasil_survey', $answer26K);

		$answer27  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 27,
			'jawaban' 		=> $this->input->post('answer27')
		);

		$this->db->insert('hasil_survey', $answer27);

		$answer28  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 28,
			'jawaban' 		=> $this->input->post('answer28')
		);

		$this->db->insert('hasil_survey', $answer28);

		$answer29  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 29,
			'jawaban' 		=> $jwbn29
		);

		$this->db->insert('hasil_survey', $answer29);

		$answer30  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 30,
			'jawaban' 		=> $this->input->post('answer30')
		);

		$this->db->insert('hasil_survey', $answer30);

		$answer31  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 31,
			'jawaban' 		=> $this->input->post('answer31')
		);

		$this->db->insert('hasil_survey', $answer31);

		$answer32  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 32,
			'jawaban' 		=> $this->input->post('answer32')
		);

		$this->db->insert('hasil_survey', $answer32);

		$answer33  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 33,
			'jawaban' 		=> $this->input->post('answer33')
		);

		$this->db->insert('hasil_survey', $answer33);

		$answer34  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 34,
			'jawaban' 		=> $this->input->post('answer34')
		);

		$this->db->insert('hasil_survey', $answer34);

		$answer35  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 35,
			'jawaban' 		=> $this->input->post('answer35')
		);

		$this->db->insert('hasil_survey', $answer35);

		$answer36  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 36,
			'jawaban' 		=> $this->input->post('answer36')
		);

		$this->db->insert('hasil_survey', $answer36);

		$answer37  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 37,
			'jawaban' 		=> $jwbn37
		);

		$this->db->insert('hasil_survey', $answer37);

		$answer38  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 38,
			'jawaban' 		=> $this->input->post('answer38')
		);

		$this->db->insert('hasil_survey', $answer38);

		$answer39  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 39,
			'jawaban' 		=> $jwbn39
		);

		$this->db->insert('hasil_survey', $answer39);

		$answer40  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 40,
			'jawaban' 		=> $this->input->post('answer40')
		);

		$this->db->insert('hasil_survey', $answer40);

		$answer41  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 41,
			'jawaban' 		=> $jwbn41
		);

		$this->db->insert('hasil_survey', $answer41);

		$answer42  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 42,
			'jawaban' 		=> $this->input->post('answer42')
		);

		$this->db->insert('hasil_survey', $answer42);

		$answer43  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 43,
			'jawaban' 		=> $this->input->post('answer43')
		);

		$this->db->insert('hasil_survey', $answer43);

		$answer44  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 44,
			'jawaban' 		=> $this->input->post('answer44')
		);

		$this->db->insert('hasil_survey', $answer44);

		$answer45  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 45,
			'jawaban' 		=> $jwbn45
		);

		$this->db->insert('hasil_survey', $answer45);

		$answer46  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 46,
			'jawaban' 		=> $this->input->post('answer46')
		);

		$this->db->insert('hasil_survey', $answer46);

		$answer47  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 47,
			'jawaban' 		=> $this->input->post('answer47')
		);

		$this->db->insert('hasil_survey', $answer47);

		$answer48  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 48,
			'jawaban' 		=> $jwbn48
		);

		$this->db->insert('hasil_survey', $answer48);

		$answer49  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 49,
			'jawaban' 		=> $this->input->post('answer49')
		);

		$this->db->insert('hasil_survey', $answer49);

		// $answer50  = array(
		// 	'id_survey'		=> $no_survey,
		// 	'id_pertanyaan' => 50,
		// 	'jawaban' 		=> $this->input->post('answer50')
		// );

		// $this->db->insert('hasil_survey', $answer50);

		$answer51  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 51,
			'jawaban' 		=> $this->input->post('answer51')
		);

		$this->db->insert('hasil_survey', $answer51);

		$answer52  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 52,
			'jawaban' 		=> $this->input->post('answer52')
		);

		$this->db->insert('hasil_survey', $answer52);

		$answer53  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 53,
			'jawaban' 		=> $this->input->post('answer53')
		);

		$this->db->insert('hasil_survey', $answer53);

		$answer54  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 54,
			'jawaban' 		=> $this->input->post('answer54')
		);

		$this->db->insert('hasil_survey', $answer54);

		$answer55  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 55,
			'jawaban' 		=> $this->input->post('answer55')
		);

		$this->db->insert('hasil_survey', $answer55);

		$answer56  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 56,
			'jawaban' 		=> $this->input->post('answer56')
		);

		$this->db->insert('hasil_survey', $answer56);

		$answer57  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 57,
			'jawaban' 		=> $this->input->post('answer57')
		);

		$this->db->insert('hasil_survey', $answer57);

		// $answer58  = array(
		// 	'id_survey'		=> $no_survey,
		// 	'id_pertanyaan' => 58,
		// 	'jawaban' 		=> $this->input->post('answer58')
		// );

		// $this->db->insert('hasil_survey', $answer58);

		$answer59  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 59,
			'jawaban' 		=> $this->input->post('answer59')
		);

		$this->db->insert('hasil_survey', $answer59);

		$answer60  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 60,
			'jawaban' 		=> $this->input->post('answer60')
		);

		$this->db->insert('hasil_survey', $answer60);

		$answer61  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 61,
			'jawaban' 		=> $this->input->post('answer61')
		);

		$this->db->insert('hasil_survey', $answer61);

		$answer62  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 62,
			'jawaban' 		=> $this->input->post('answer62')
		);

		$this->db->insert('hasil_survey', $answer62);

		$answer63  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 63,
			'jawaban' 		=> $this->input->post('answer63')
		);

		$this->db->insert('hasil_survey', $answer63);

		$answer64  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 64,
			'jawaban' 		=> $this->input->post('answer64')
		);

		$this->db->insert('hasil_survey', $answer64);

		$answer65  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 65,
			'jawaban' 		=> $this->input->post('answer65')
		);

		$this->db->insert('hasil_survey', $answer65);

		$answer66  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 66,
			'jawaban' 		=> $this->input->post('answer66')
		);

		$this->db->insert('hasil_survey', $answer66);

		$answer67  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 67,
			'jawaban' 		=> $this->input->post('answer67')
		);

		$this->db->insert('hasil_survey', $answer67);

		$answer68  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 68,
			'jawaban' 		=> $this->input->post('answer68')
		);

		$this->db->insert('hasil_survey', $answer68);

		$answer69  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 69,
			'jawaban' 		=> $this->input->post('answer69')
		);

		$this->db->insert('hasil_survey', $answer69);

		// $answer70  = array(
		// 	'id_survey'		=> $no_survey,
		// 	'id_pertanyaan' => 70,
		// 	'jawaban' 		=> $this->input->post('answer70')
		// );

		// $this->db->insert('hasil_survey', $answer70);

		$answer71  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 71,
			'jawaban' 		=> $this->input->post('answer71')
		);

		$this->db->insert('hasil_survey', $answer71);

		$answer72  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 72,
			'jawaban' 		=> $this->input->post('answer72')
		);

		$this->db->insert('hasil_survey', $answer72);

		$answer73  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 73,
			'jawaban' 		=> $jwbn73
		);

		$this->db->insert('hasil_survey', $answer73);

		$answer74  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 74,
			'jawaban' 		=> $this->input->post('answer74')
		);

		$this->db->insert('hasil_survey', $answer74);

		$answer75  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 75,
			'jawaban' 		=> $jwbn75
		);

		$this->db->insert('hasil_survey', $answer75);

		$answer76  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 76,
			'jawaban' 		=> $this->input->post('answer76')
		);

		$this->db->insert('hasil_survey', $answer76);

		$answer77  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 77,
			'jawaban' 		=> $jwbn77
		);

		$this->db->insert('hasil_survey', $answer77);

		$answer78  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 78,
			'jawaban' 		=> $this->input->post('answer78')
		);

		$this->db->insert('hasil_survey', $answer78);

		$answer79A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 79,
			'jawaban' 		=> $this->input->post('answer79A')
		);

		$this->db->insert('hasil_survey', $answer79A);

		$answer79B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 79,
			'jawaban' 		=> $this->input->post('answer79B')
		);

		$this->db->insert('hasil_survey', $answer79B);

		$answer79C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 79,
			'jawaban' 		=> $this->input->post('answer79C')
		);

		$this->db->insert('hasil_survey', $answer79C);

		$answer79D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 79,
			'jawaban' 		=> $this->input->post('answer79D')
		);

		$this->db->insert('hasil_survey', $answer79D);

		$answer79E  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 79,
			'jawaban' 		=> $this->input->post('answer79E')
		);

		$this->db->insert('hasil_survey', $answer79E);

		$answer79F  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 79,
			'jawaban' 		=> $this->input->post('answer79F')
		);

		$this->db->insert('hasil_survey', $answer79F);

		$answer79G  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 79,
			'jawaban' 		=> $this->input->post('answer79G')
		);

		$this->db->insert('hasil_survey', $answer79G);

		$answer79H  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 79,
			'jawaban' 		=> $this->input->post('answer79H')
		);

		$this->db->insert('hasil_survey', $answer79H);

		$answer79I  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 79,
			'jawaban' 		=> $this->input->post('answer79I')
		);

		$this->db->insert('hasil_survey', $answer79I);

		$answer80A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 80,
			'jawaban' 		=> $this->input->post('answer80A')
		);

		$this->db->insert('hasil_survey', $answer80A);

		$answer80B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 80,
			'jawaban' 		=> $this->input->post('answer80B')
		);

		$this->db->insert('hasil_survey', $answer80B);

		$answer80C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 80,
			'jawaban' 		=> $this->input->post('answer80C')
		);

		$this->db->insert('hasil_survey', $answer80C);

		$answer80D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 80,
			'jawaban' 		=> $this->input->post('answer80D')
		);

		$this->db->insert('hasil_survey', $answer80D);

		$answer80E  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 80,
			'jawaban' 		=> $this->input->post('answer80E')
		);

		$this->db->insert('hasil_survey', $answer80E);

		$answer80F  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 80,
			'jawaban' 		=> $this->input->post('answer80F')
		);

		$this->db->insert('hasil_survey', $answer80F);

		$answer80G  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 80,
			'jawaban' 		=> $this->input->post('answer80G')
		);

		$this->db->insert('hasil_survey', $answer80G);

		$answer80H  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 80,
			'jawaban' 		=> $this->input->post('answer80H')
		);

		$this->db->insert('hasil_survey', $answer80H);

		$answer80I  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 80,
			'jawaban' 		=> $this->input->post('answer80I')
		);

		$this->db->insert('hasil_survey', $answer80I);

		$answer80J  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 80,
			'jawaban' 		=> $this->input->post('answer80J')
		);

		$this->db->insert('hasil_survey', $answer80J);

		$answer81A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 81,
			'jawaban' 		=> $this->input->post('answer81A')
		);

		$this->db->insert('hasil_survey', $answer81A);

		$answer81B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 81,
			'jawaban' 		=> $this->input->post('answer81B')
		);

		$this->db->insert('hasil_survey', $answer81B);

		$answer81C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 81,
			'jawaban' 		=> $this->input->post('answer81C')
		);

		$this->db->insert('hasil_survey', $answer81C);

		$answer81D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 81,
			'jawaban' 		=> $this->input->post('answer81D')
		);

		$this->db->insert('hasil_survey', $answer81D);

		$answer81E  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 81,
			'jawaban' 		=> $this->input->post('answer81E')
		);

		$this->db->insert('hasil_survey', $answer81E);

		$answer81F  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 81,
			'jawaban' 		=> $this->input->post('answer81F')
		);

		$this->db->insert('hasil_survey', $answer81F);

		$answer81G  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 81,
			'jawaban' 		=> $this->input->post('answer81G')
		);

		$this->db->insert('hasil_survey', $answer81G);

		$answer81H  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 81,
			'jawaban' 		=> $this->input->post('answer81H')
		);

		$this->db->insert('hasil_survey', $answer81H);

		$answer81I  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 81,
			'jawaban' 		=> $this->input->post('answer81I')
		);

		$this->db->insert('hasil_survey', $answer81I);

		$answer81J  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 81,
			'jawaban' 		=> $this->input->post('answer81J')
		);

		$this->db->insert('hasil_survey', $answer81J);

		$answer82  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 82,
			'jawaban' 		=> $this->input->post('answer82')
		);

		$this->db->insert('hasil_survey', $answer82);

		$answer83A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 83,
			'jawaban' 		=> $this->input->post('answer83A')
		);

		$this->db->insert('hasil_survey', $answer83A);

		$answer83B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 83,
			'jawaban' 		=> $this->input->post('answer83B')
		);

		$this->db->insert('hasil_survey', $answer83B);

		$answer83C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 83,
			'jawaban' 		=> $this->input->post('answer83C')
		);

		$this->db->insert('hasil_survey', $answer83C);

		$answer83D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 83,
			'jawaban' 		=> $this->input->post('answer83D')
		);

		$this->db->insert('hasil_survey', $answer83D);

		$answer83E  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 83,
			'jawaban' 		=> $this->input->post('answer83E')
		);

		$this->db->insert('hasil_survey', $answer83E);

		$answer83F  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 83,
			'jawaban' 		=> $this->input->post('answer83F')
		);

		$this->db->insert('hasil_survey', $answer83F);

		$answer84A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84A')
		);

		$this->db->insert('hasil_survey', $answer84A);

		$answer84B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84B')
		);

		$this->db->insert('hasil_survey', $answer84B);

		$answer84C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84C')
		);

		$this->db->insert('hasil_survey', $answer84C);

		$answer84D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84D')
		);

		$this->db->insert('hasil_survey', $answer84D);

		$answer84E  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84E')
		);

		$this->db->insert('hasil_survey', $answer84E);

		$answer84F  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84F')
		);

		$this->db->insert('hasil_survey', $answer84F);

		$answer84G  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84G')
		);

		$this->db->insert('hasil_survey', $answer84G);

		$answer84H  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84H')
		);

		$this->db->insert('hasil_survey', $answer84H);

		$answer84I  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84I')
		);

		$this->db->insert('hasil_survey', $answer84I);

		$answer84J  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84J')
		);

		$this->db->insert('hasil_survey', $answer84J);

		$answer84K  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84K')
		);

		$this->db->insert('hasil_survey', $answer84K);

		$answer84L  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84L')
		);

		$this->db->insert('hasil_survey', $answer84L);

		$answer84M  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84M')
		);

		$this->db->insert('hasil_survey', $answer84M);

		$answer84N  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84N')
		);

		$this->db->insert('hasil_survey', $answer84N);

		$answer84O  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84O')
		);

		$this->db->insert('hasil_survey', $answer84O);

		$answer84P  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84P')
		);

		$this->db->insert('hasil_survey', $answer84P);

		$answer84Q  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84Q')
		);

		$this->db->insert('hasil_survey', $answer84Q);

		$answer84R  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84R')
		);

		$this->db->insert('hasil_survey', $answer84R);

		$answer84S  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84S')
		);

		$this->db->insert('hasil_survey', $answer84S);

		$answer84T  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 84,
			'jawaban' 		=> $this->input->post('answer84T')
		);

		$this->db->insert('hasil_survey', $answer84T);

		$answer85  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 85,
			'jawaban' 		=> $jwbn85
		);

		$this->db->insert('hasil_survey', $answer85);

		$answer86  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 86,
			'jawaban' 		=> $this->input->post('answer86')
		);

		$this->db->insert('hasil_survey', $answer86);

		$answer87  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 87,
			'jawaban' 		=> $this->input->post('answer87')
		);

		$this->db->insert('hasil_survey', $answer87);

		$answer88  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 88,
			'jawaban' 		=> $this->input->post('answer88')
		);

		$this->db->insert('hasil_survey', $answer88);

		$answer89  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 89,
			'jawaban' 		=> $jwbn89
		);

		$this->db->insert('hasil_survey', $answer89);

		$answer90  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 90,
			'jawaban' 		=> $jwbn90
		);

		$this->db->insert('hasil_survey', $answer90);

		$answer91  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 91,
			'jawaban' 		=> $jwbn91
		);

		$this->db->insert('hasil_survey', $answer91);

		$answer92  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 92,
			'jawaban' 		=> $this->input->post('answer92')
		);

		$this->db->insert('hasil_survey', $answer92);

		$answer93  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 93,
			'jawaban' 		=> $jwbn93
		);

		$this->db->insert('hasil_survey', $answer93);

		$answer94  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 94,
			'jawaban' 		=> $this->input->post('answer94')
		);

		$this->db->insert('hasil_survey', $answer94);

		$answer95  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 95,
			'jawaban' 		=> $this->input->post('answer95')
		);

		$this->db->insert('hasil_survey', $answer95);

		$answer95  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 95,
			'jawaban' 		=> $this->input->post('answer95')
		);

		$this->db->insert('hasil_survey', $answer95);

		$answer96  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 96,
			'jawaban' 		=> $this->input->post('answer96')
		);

		$this->db->insert('hasil_survey', $answer96);

		$answer97  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 97,
			'jawaban' 		=> $this->input->post('answer97')
		);

		$this->db->insert('hasil_survey', $answer97);

		$answer98  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 98,
			'jawaban' 		=> $this->input->post('answer98')
		);

		$this->db->insert('hasil_survey', $answer98);

		$answer99  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 99,
			'jawaban' 		=> $jwbn99
		);

		$this->db->insert('hasil_survey', $answer99);

		$answer100  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 100,
			'jawaban' 		=> $this->input->post('answer100')
		);

		$this->db->insert('hasil_survey', $answer100);

		$answer101  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 101,
			'jawaban' 		=> $this->input->post('answer101')
		);

		$this->db->insert('hasil_survey', $answer101);

		$answer102  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 102,
			'jawaban' 		=> $this->input->post('answer102')
		);

		$this->db->insert('hasil_survey', $answer102);

		$answer103  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 103,
			'jawaban' 		=> $this->input->post('answer103')
		);

		$this->db->insert('hasil_survey', $answer103);

		$answer104  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 104,
			'jawaban' 		=> $this->input->post('answer104')
		);

		$this->db->insert('hasil_survey', $answer104);

		$answer105A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 105,
			'jawaban' 		=> $this->input->post('answer105A')
		);

		$this->db->insert('hasil_survey', $answer105A);

		$answer105B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 105,
			'jawaban' 		=> $this->input->post('answer105B')
		);

		$this->db->insert('hasil_survey', $answer105B);

		$answer105C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 105,
			'jawaban' 		=> $this->input->post('answer105C')
		);

		$this->db->insert('hasil_survey', $answer105C);

		$answer105D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 105,
			'jawaban' 		=> $this->input->post('answer105D')
		);

		$this->db->insert('hasil_survey', $answer105D);

		$answer105E  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 105,
			'jawaban' 		=> $this->input->post('answer105E')
		);

		$this->db->insert('hasil_survey', $answer105E);

		$answer105F  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 105,
			'jawaban' 		=> $this->input->post('answer105F')
		);

		$this->db->insert('hasil_survey', $answer105F);

		$answer105G  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 105,
			'jawaban' 		=> $this->input->post('answer105G')
		);

		$this->db->insert('hasil_survey', $answer105G);

		$answer105H  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 105,
			'jawaban' 		=> $this->input->post('answer105H')
		);

		$this->db->insert('hasil_survey', $answer105H);

		$answer105I  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 105,
			'jawaban' 		=> $this->input->post('answer105I')
		);

		$this->db->insert('hasil_survey', $answer105I);

		$answer105J  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 105,
			'jawaban' 		=> $this->input->post('answer105J')
		);

		$this->db->insert('hasil_survey', $answer105J);

		$answer106  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 106,
			'jawaban' 		=> $jwbn106
		);

		$this->db->insert('hasil_survey', $answer106);

		$answer107  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 107,
			'jawaban' 		=> $this->input->post('answer107')
		);

		$this->db->insert('hasil_survey', $answer107);

		$answer108  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 108,
			'jawaban' 		=> $jwbn108
		);

		$this->db->insert('hasil_survey', $answer108);

		$answer109  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 109,
			'jawaban' 		=> $this->input->post('answer109')
		);

		$this->db->insert('hasil_survey', $answer109);

		$answer110  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 110,
			'jawaban' 		=> $jwbn110
		);

		$this->db->insert('hasil_survey', $answer110);

		$answer111  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 111,
			'jawaban' 		=> $this->input->post('answer111')
		);

		$this->db->insert('hasil_survey', $answer111);

		$answer112  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 112,
			'jawaban' 		=> $this->input->post('answer112')
		);

		$this->db->insert('hasil_survey', $answer112);

		$answer113A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 113,
			'jawaban' 		=> $this->input->post('answer113A')
		);

		$this->db->insert('hasil_survey', $answer113A);

		$answer113B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 113,
			'jawaban' 		=> $this->input->post('answer113B')
		);

		$this->db->insert('hasil_survey', $answer113B);

		$answer113C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 113,
			'jawaban' 		=> $this->input->post('answer113C')
		);

		$this->db->insert('hasil_survey', $answer113C);

		$answer113D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 113,
			'jawaban' 		=> $this->input->post('answer113D')
		);

		$this->db->insert('hasil_survey', $answer113D);

		$answer113E  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 113,
			'jawaban' 		=> $this->input->post('answer113E')
		);

		$this->db->insert('hasil_survey', $answer113E);

		$answer113F  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 113,
			'jawaban' 		=> $this->input->post('answer113F')
		);

		$this->db->insert('hasil_survey', $answer113F);

		$answer113G  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 113,
			'jawaban' 		=> $this->input->post('answer113G')
		);

		$this->db->insert('hasil_survey', $answer113G);

		$answer114  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 114,
			'jawaban' 		=> $this->input->post('answer114')
		);

		$this->db->insert('hasil_survey', $answer114);

		$answer115  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 115,
			'jawaban' 		=> $this->input->post('answer115')
		);

		$this->db->insert('hasil_survey', $answer115);

		$answer116A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 116,
			'jawaban' 		=> $this->input->post('answer116A')
		);

		$this->db->insert('hasil_survey', $answer116A);

		$answer116B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 116,
			'jawaban' 		=> $this->input->post('answer116B')
		);

		$this->db->insert('hasil_survey', $answer116B);

		$answer116C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 116,
			'jawaban' 		=> $this->input->post('answer116C')
		);

		$this->db->insert('hasil_survey', $answer116C);

		$answer116D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 116,
			'jawaban' 		=> $this->input->post('answer116D')
		);

		$this->db->insert('hasil_survey', $answer116D);

		$answer117  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 117,
			'jawaban' 		=> $this->input->post('answer117')
		);

		$this->db->insert('hasil_survey', $answer117);

		$answer118A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 118,
			'jawaban' 		=> $this->input->post('answer118A')
		);

		$this->db->insert('hasil_survey', $answer118A);

		$answer118B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 118,
			'jawaban' 		=> $this->input->post('answer118B')
		);

		$this->db->insert('hasil_survey', $answer118B);

		$answer118C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 118,
			'jawaban' 		=> $this->input->post('answer118C')
		);

		$this->db->insert('hasil_survey', $answer118C);

		$answer118D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 118,
			'jawaban' 		=> $this->input->post('answer118D')
		);

		$this->db->insert('hasil_survey', $answer118D);

		$answer118E  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 118,
			'jawaban' 		=> $this->input->post('answer118E')
		);

		$this->db->insert('hasil_survey', $answer118E);

		$answer119A  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 119,
			'jawaban' 		=> $this->input->post('answer119A')
		);

		$this->db->insert('hasil_survey', $answer119A);

		$answer119B  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 119,
			'jawaban' 		=> $this->input->post('answer119B')
		);

		$this->db->insert('hasil_survey', $answer119B);

		$answer119C  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 119,
			'jawaban' 		=> $this->input->post('answer119C')
		);

		$this->db->insert('hasil_survey', $answer119C);

		$answer119D  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 119,
			'jawaban' 		=> $this->input->post('answer119D')
		);

		$this->db->insert('hasil_survey', $answer119D);

		$answer119E  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 119,
			'jawaban' 		=> $this->input->post('answer119E')
		);

		$this->db->insert('hasil_survey', $answer119E);

		$answer120  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 120,
			'jawaban' 		=> $this->input->post('answer120')
		);

		$this->db->insert('hasil_survey', $answer120);

		$answer121  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 121,
			'jawaban' 		=> $this->input->post('answer121')
		);

		$this->db->insert('hasil_survey', $answer121);

		$answer122  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 122,
			'jawaban' 		=> $this->input->post('answer122')
		);

		$this->db->insert('hasil_survey', $answer122);

		$answer123  = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => 123,
			'jawaban' 		=> $this->input->post('answer123')
		);

		$this->db->insert('hasil_survey', $answer123);

		redirect('admin');
	}
}
