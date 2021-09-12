<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('HasilModel');
		if (!$this->session->userdata('username'))
			redirect('auth');
	}

	public function index()
	{
		$data = [
			'title' => 'Hasil Survey',
			'survey' => $this->HasilModel->get_hasil(),
		];
		$this->template->load('layouts/layouts-admin', 'admin_pages/hasil-page', $data);
	}

	public function delete($id)
	{
		$this->HasilModel->delete_hasil_responden($id);
		$this->HasilModel->delete_hasil_survey($id);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span><i class="fas fa-times-circle mx-1"></i> Hasil Survey Dihapus</span>
				</div>'
			);
			redirect('admin/hasil');
		}
	}

	public function laporan_hasil($no_survey)
	{

		$data = [
			'laporan' => $this->HasilModel->get_hasil_laporan($no_survey),
		];

		//$this->load->view('laporan_pages/laporan_hasil');
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = 'Survey-'.$no_survey.'.pdf';
		$this->pdf->load_view('laporan_pages/laporan_hasil', $data);
	}
}
