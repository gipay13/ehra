<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model(['PertanyaanModel', 'KategoriModel']);
		if (
			$this->session->userdata('level') == 4 ||
			$this->session->userdata('level') == 5 ||
			$this->session->userdata('level') == 6
		)
			redirect('admin/dashboard');
		if (!$this->session->userdata('username'))
			redirect('auth');
	}

	public function index()
	{
		$data = array(
			'title' => 'Pertanyaan',
			'kategori' => $this->KategoriModel->get_kategori(),
			'pertanyaan' => $this->PertanyaanModel->get_pertanyaan()->result(),
		);

		$this->template->load('layouts/layouts-admin', 'admin_pages/pertanyaan-page', $data);
	}

	public function process()
	{
		$process = $this->input->post(null, TRUE);

		if (isset($_POST['add'])) {
			$this->PertanyaanModel->insert_pertanyaan($process);
			//print_r($process);
		} else if (isset($_POST['edit'])) {
			$this->PertanyaanModel->update_pertanyaan($process);
		}

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<span><i class="fas fa-check-circle mx-1"></i> Pertanyaan Berhasil Ditambah/Diupdate</span>
				</div>'
			);
			redirect('admin/pertanyaan');
		}
	}

	public function delete($id)
	{
		$this->PertanyaanModel->delete_pertanyaan($id);


		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span><i class="fas fa-times-circle mx-1"></i> Pertanyaan Dihapus</span>
				</div>'
			);
			redirect('admin/pertanyaan');
		}
	}
}
