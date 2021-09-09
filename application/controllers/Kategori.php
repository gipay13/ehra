<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('KategoriModel');
		if (!$this->session->userdata('username'))
			redirect('auth');
	}

	public function index()
	{

		$data = array(
			'kategori' => $this->KategoriModel->get_kategori(),
		);

		$this->template->load('layouts/layouts-admin', 'admin_pages/kategori-page', $data);
	}

	public function process()
	{
		$process = $this->input->post(null, TRUE);

		if (isset($_POST['add'])) {
			$kode_kategori = $this->KategoriModel->validate_kategori($process['kode_kategori']);
			if ($kode_kategori > 0) {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span><i class="fas fa-exclamation-triangle mx-1"></i> Kode Kategori Sudah Terpakai</span>
				</div>'
				);
				redirect('admin/kategori');
			} else {
				$this->KategoriModel->insert_kategori($process);
			}
		} else if (isset($_POST['edit'])) {
			$kode_kategori = $this->KategoriModel->validate_kategori($process['kode_kategori'], $process['id']);
			if ($kode_kategori > 0) {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span><i class="fas fa-exclamation-triangle mx-1"></i> Kode Kategori Sudah Terpakai</span>
				</div>'
				);
				redirect('admin/kategori');
			} else {
				$this->KategoriModel->update_kategori($process);
			}
		}

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<span><i class="fas fa-check-circle mx-1"></i> Kategori Berhasil Ditambah/Diupdate</span>
					</div>'
			);
			redirect('admin/kategori');
		}
	}

	public function delete($id)
	{
		$this->KategoriModel->delete_kategori($id);

		$error = $this->db->error();

		if ($error['code'] != null) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span><i class="fas fa-times-circle mx-1"></i> Kategori Tidak Dapat Dihapus Karena Digunakan di Tabel Pertanyaan</span>
				</div>'
			);
			redirect('admin/kategori');
		}

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span><i class="fas fa-times-circle mx-1"></i> Kategori Dihapus</span>
				</div>'
			);
			redirect('admin/kategori');
		}
	}
}
