<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('name')) {
			redirect('responden');
		} else {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == false) {
				$this->load->view('layouts/head');
				$this->load->view('auth/login-page');
				$this->load->view('layouts/footer');
			} else {
				// Validasi Success
				$this->_login();
			}
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('users', ['username' => $username])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'username' 	=> $user['username'],
					'name' 		=> $user['name'],
					'id'		=> $user['id']
				];
				$this->session->set_userdata($data);
				redirect('responden');
			} else {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger" role="alert">Username atau Password Salah</div>'
				);
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger" role="alert">Username atau Password Salah</div>'
			);
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}
