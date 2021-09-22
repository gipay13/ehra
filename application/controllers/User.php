<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		if (!$this->session->userdata('username'))
			redirect('auth');
		if (
			$this->session->userdata('level') == 2 ||
			$this->session->userdata('level') == 3 ||
			$this->session->userdata('level') == 4
		)
			redirect('admin/dashboard');
	}

	public function index()
	{
		$data = [
			'title' => 'User',
			'kecamatan' => $this->UserModel->get_kecamatan(),
			'puskesmas' => $this->UserModel->get_puskesmas(),
			'user' => $this->UserModel->get_user(),
			'level' => $this->UserModel->get_level(),
			'supervisor' => $this->UserModel->get_supervisor(),
			'koordinator' => $this->UserModel->get_koordinator(),
		];

		$this->template->load('layouts/layouts-admin', 'admin_pages/user-page', $data);
	}

	public function process()
	{
		$process = $this->input->post(null, TRUE);

		if (isset($_POST['add_user'])) {
			$username = $this->UserModel->validate_username($process['username']);
			$puskesmas = $this->UserModel->validate_puskesmas($process['puskesmas'], $process['level']);
			if ($username > 0) {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-warning alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<span><i class="fas fa-exclamation-triangle mx-1"></i> Username Sudah Terpakai</span>
						</div>'
				);
				redirect('admin/user');
			} else if ($puskesmas > 0) {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-warning alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<span><i class="fas fa-exclamation-triangle mx-1"></i> Kepala Puskesmas Sudah Terdaftar</span>
					</div>'
				);
				redirect('admin/user');
			} else {
				$message = 'User';
				$this->UserModel->insert_user($process);
			}
		} else if(isset($_POST['add_supervisor'])) {
			$message = 'Supervisor';
			$this->UserModel->insert_supervisor($process);
		} else if (isset($_POST['add_koordinator'])) {
			$message = 'Koordinator';
			$this->UserModel->insert_koordinator($process);
		}

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<span><i class="fas fa-check-circle mx-1"></i> '.$message.' Berhasil Ditambah/Diupdate</span>
					</div>'
			);
			redirect('admin/user');
		}
	}

	public function delete($id)
	{
		$this->UserModel->delete_user($id);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span><i class="fas fa-times-circle mx-1"></i> User Dihapus</span>
				</div>'
			);
			redirect('admin/user');
		}
	}

	public function delete_supervisor($id)
	{
		$this->UserModel->delete_supervisor($id);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span><i class="fas fa-times-circle mx-1"></i> Supervisor Dihapus</span>
				</div>'
			);
			redirect('admin/user');
		}
	}

	public function delete_koordinator($id)
	{
		$this->UserModel->delete_koordinator($id);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span><i class="fas fa-times-circle mx-1"></i> Koordinator Dihapus</span>
				</div>'
			);
			redirect('admin/user');
		}
	}
}
