<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PertanyaanModel extends CI_Model
{
	function kategori_pertanyaan($kode)
	{
		$this->db->where('category_code', $kode);
		$query = $this->db->get('question_category');
		return $query->result();
	}

	function pertanyaan($kode_kategori)
	{
		$this->db->where('category_code', $kode_kategori);
		$query = $this->db->get('question');
		return $query->result();
	}
}
