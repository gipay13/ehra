<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PertanyaanModel extends CI_Model
{
	function kategori_pertanyaan($kode)
	{
		$this->db->where('kode_kategori', $kode);
		$query = $this->db->get('kategori_pertanyaan');
		return $query->result();
	}

	function pertanyaan($kdkategori)
	{
		$this->db->where('kode_kategori', $kdkategori);
		$query = $this->db->get('pertanyaan');
		return $query->result();
	}
}
