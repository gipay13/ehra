<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Responden extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('RespondenModel');
		if (!$this->session->userdata('username'))
			redirect('auth');
	}

	public function index()
	{
		$data = array(
			"provinces"		=> $this->RespondenModel->provinces(),
			"supervisor" 	=> $this->RespondenModel->supevisor(),
			"koordinator" 	=> $this->RespondenModel->koordinator(),
			"get"			=> $this->RespondenModel->get_data()->row_array()
		);

		$this->load->view('layouts/head');
		$this->load->view('layouts/nav');
		$this->load->view('pages/responden-page', $data);
		$this->load->view('layouts/footer');
	}

	public function fetch_regencies()
	{
		if ($this->input->post('id')) {
			echo $this->RespondenModel->regencies($this->input->post('id'));
		}
	}

	public function fetch_district()
	{
		if ($this->input->post('id')) {
			echo $this->RespondenModel->district($this->input->post('id'));
		}
	}

	public function fetch_village()
	{
		if ($this->input->post('id')) {
			echo $this->RespondenModel->village($this->input->post('id'));
		}
	}

	public function fetch_koordinator()
	{
		if ($this->input->post('id')) {
			echo $this->RespondenModel->koordinator($this->input->post('id'));
		}
	}

	public function store()
	{
		$id = $this->input->post('id_survey');

		$wilayah_survey = array(
			'id_provinsi'		=> $this->input->post('provinsi'),
			'id_kabupaten'		=> $this->input->post('kabupaten'),
			'id_kecamatan' 		=> $this->input->post('kecamatan'),
			'id_kelurahan' 		=> $this->input->post('kelurahan'),
			'strata' 			=> $this->input->post('strata'),
		);

		$this->db->insert('wilayah_survey', $wilayah_survey);
		$get_id = $this->db->insert_id();



		$surfey = array(
			'tgl_survey' 			=> $this->input->post('tanggalSurvey'),
			'jam_survey' 			=> $this->input->post('waktu'),
			'id_pewawancara' 		=> $this->input->post('pewawancara'),
			'id_supervisor' 		=> $this->input->post('supervisor'),
			'id_koordinator' 		=> $this->input->post('koordinator'),
		);

		$this->db->insert('surfey', $surfey);

		$responden = array(
			'id_survey'				=> $get_id,
			'nik'					=> $this->input->post('nikKepalaRumah'),
			'nama_kepala'			=> $this->input->post('namaKepalaRumah'),
			'jml_keluarga'			=> $this->input->post('jumlahKeluarga'),
			'jml_laki'				=> $this->input->post('jumlahJiwaLaki'),
			'jml_pr'				=> $this->input->post('jumlahJiwaPr'),
			'nama_responden'		=> $this->input->post('responden'),
			'hubungan_responden'	=> $this->input->post('hubungan'),
			'alamat'				=> $this->input->post('alamat'),
		);

		$this->db->insert('responden', $responden);

		redirect('pertanyaan/p/b/' . $get_id);
	}
}
