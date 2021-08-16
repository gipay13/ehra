<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PertanyaanModel extends CI_Model
{
	function kategoriPertanyaan($kode)
	{
		$this->db->where('kode_kategori', $kode);
		$query = $this->db->get('kategori_pertanyaan');
		return $query->result();
	}

	function pertanyaan($kdkategori)
	{
		$this->db->join('pertanyaan', 'pertanyaan.id = grup_pertanyaan.id_pertanyaan');
		$this->db->where('grup_pertanyaan.kode_kategori', $kdkategori);
		$this->db->order_by('grup_pertanyaan.id', 'asc');

		$query = $this->db->get('grup_pertanyaan');
		return $query->result();
	}
}
