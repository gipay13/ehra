<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PertanyaanModel extends CI_Model
{
	function kategoriPertanyaan()
	{
		$this->db->join('grup_pertanyaan', 'grup_pertanyaan.kode_kategori = kategori_pertanyaan.kode_kategori');
		$this->db->join('pertanyaan', 'pertanyaan.id = grup_pertanyaan.id_pertanyaan');
		$this->db->where('kategori_pertanyaan.kode_kategori', 'b');
		$this->db->order_by('grup_pertanyaan.id', 'asc');

		$query = $this->db->get('kategori_pertanyaan');
		return $query->result();
	}
}
