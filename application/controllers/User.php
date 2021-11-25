<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->library('form_validation');
		if (!$this->session->userdata('id'))
			redirect('auth', 'refresh');
		if (
			$this->session->userdata('level') == 2 ||
			$this->session->userdata('level') == 3
		)
			redirect('dashboard', 'refresh');
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
			$puskesmas = $this->UserModel->validate_puskesmas($process['puskesmas']);
			if ($username > 0) {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-warning alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<span><i class="fas fa-exclamation-triangle mx-1"></i> Username Sudah Terpakai</span>
					</div>'
				);
				redirect('user', 'refresh');
			} else if ($puskesmas > 0) {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-warning alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<span><i class="fas fa-exclamation-triangle mx-1"></i> Kepala Puskesmas Sudah Terdaftar</span>
					</div>'
				);
				redirect('user', 'refresh');
			} else {
				$message = 'User Berhasil Ditambah';
				$this->UserModel->insert_user($process);
			}
		} else if(isset($_POST['add_supervisor'])) {
			$message = 'Supervisor Berhasil Ditambah';
			$this->UserModel->insert_supervisor($process);
		} else if (isset($_POST['add_koordinator'])) {
			$message = 'Koordinator Berhasil Ditambah';
			$this->UserModel->insert_koordinator($process);
		} else if(isset($_POST['edit_user'])) {
			$username = $this->UserModel->validate_username($process['username'], $process['user_id']);
			$puskesmas = $this->UserModel->validate_puskesmas($process['puskesmas'], $process['user_id']);
			if ($username > 0) {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-warning alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<span><i class="fas fa-exclamation-triangle mx-1"></i> Username Sudah Terpakai</span>
					</div>'
				);
				redirect('user', 'refresh');
			} else if ($puskesmas > 0) {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-warning alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<span><i class="fas fa-exclamation-triangle mx-1"></i> Kepala Puskesmas Sudah Terdaftar</span>
					</div>'
				);
				redirect('user', 'refresh');
			} else {
				$message = 'User Berhasil Diubah';
				$this->UserModel->update_user($process);
			}
		} else if(isset($_POST['edit_supervisor'])) {
			$message = 'Supervisor Berhasil Diubah';
			$this->UserModel->update_supervisor($process);
		} else if(isset($_POST['edit_koordinator'])) {
			$message = 'Koordinator Berhasil Diubah';
			$this->UserModel->update_koordinator($process);
		}

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span><i class="fas fa-check-circle mx-1"></i> '.$message.'</span>
				</div>'
			);
			redirect('user', 'refresh');
		}
	}

	public function delete($id)
	{
		$this->UserModel->delete_user($id);

		$error = $this->db->error();
		if($error['code'] != 0) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span class="text-white"><i class="fas fa-times-circle mx-1"></i> User Tidak Dapat Dihapus, User Telah Melakukan Survey</span>
				</div>'
			);
			redirect('user', 'refresh');
		} else {
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<span><i class="fas fa-times-circle mx-1"></i> User Dihapus</span>
					</div>'
				);
				redirect('user', 'refresh');
			}
		}
	}

	public function delete_supervisor($id)
	{
		$this->UserModel->delete_supervisor($id);

		$error = $this->db->error();
		if($error['code'] != 0) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span class="text-white"><i class="fas fa-times-circle mx-1"></i> Supervisi Tidak Dapat Dihapus, Nama Telah Digunakan Untuk Survey</span>
				</div>'
			);
			redirect('user', 'refresh');
		} else {
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<span><i class="fas fa-times-circle mx-1"></i> Supervisi Dihapus</span>
					</div>'
				);
				redirect('user', 'refresh');
			}
		}
	}
	
	public function delete_koordinator($id)
	{
		$this->UserModel->delete_koordinator($id);

		$error = $this->db->error();
		if($error['code'] != 0) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span class="text-white"><i class="fas fa-times-circle mx-1"></i> Koordinator Tidak Dapat Dihapus, Nama Telah Digunakan Untuk Survey</span>
				</div>'
			);
			redirect('user', 'refresh');
		} else {
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<span><i class="fas fa-times-circle mx-1"></i> Koordinator Dihapus</span>
					</div>'
				);
				redirect('user', 'refresh');
			}
		}
	}
}
