<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PertanyaanModel extends CI_Model
{
	function get_pertanyaan()
	{
		$this->db->select('questions.*, categories.category_code as qcategory_code');
		$this->db->join('categories', 'categories.id = questions.qcategory_id');
		$query = $this->db->get('questions');
		return $query;
	}

	function get_kategori()
	{
		$this->db->order_by('created_at', 'asc');
		$query = $this->db->get('categories');
		return $query;
	}

}
