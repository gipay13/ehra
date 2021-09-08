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

	function pertanyaan($kode_kategori)
	{
		$this->db->where('kode_kategori', $kode_kategori);
		$query = $this->db->get('pertanyaan');
		return $query->result();
	}
}
