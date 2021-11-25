<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Responden extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(['RespondenModel', 'UserModel']);
		if (
			$this->session->userdata('level') == 1
		)
			redirect('admin/dashboard', 'refresh');
		if (!$this->session->userdata('id'))
			redirect('', 'refresh');
	}


	public function index()
	{
		$data = array(
			'survey'		=> $this->RespondenModel->no_survey(),
			'supervisor'	=> $this->UserModel->get_supervisor(),
			'userdata'		=> $this->UserModel->get_userdata()
		);

		$this->template->load('layouts/layouts-survey', 'survey_pages/responden_page', $data);
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

	public function process()
	{
		$process = $this->input->post(null, TRUE);

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
		$this->load->library('upload', $config);

		if (isset($_POST['submit'])) {
			if ($process['token'] != $this->session->csrf_token or !$process['token'] or !$this->session->csrf_token) {
				$this->session->unset_userdata('csrf_token');

				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<span><i class="fas fa-check-circle mx-1"></i> Mohon Untuk Tekan Tombol Simpan Sekali Saja</span>
					</div>'
				);
				redirect('survey/responden', 'refresh');
			} else {
				$this->session->unset_userdata('csrf_token');
				if (@$_FILES['image']['name'] != null) {
					if ($this->upload->do_upload('image')) {
						$process['image'] = $this->upload->data('file_name');

						$this->db->trans_start();
						$this->RespondenModel->insert_survey($process);
						$this->db->trans_complete();

						if ($this->db->trans_status() === False) {
							$this->session->set_flashdata(
								'message',
								'<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<span><i class="fas fa-times-circle mx-1"></i> Something Wrong Please Try Again!</span>
								</div>'
							);
							redirect('responden', 'refresh');
						} else {
							$this->session->set_flashdata(
								'message',
								'<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<span><i class="fas fa-check-circle mx-1"></i> Responden Berhasil di Tambah Silahkan Lanjut Dengan Survey EHRA</span>
								</div>'
							);
							redirect('survey/ehra/' . $process['no_survey'], 'refresh');
						}
					} else {
						$error = $this->upload->display_error();
						$this->session->set_flashdata(
							'message',
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<span><i class="fas fa-check-circle mx-1"></i> ' . $error . '</span>
							</div>'
						);
						redirect('survey/responden', 'refresh');
					}
				}
			}
		}
	}
}
