<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PertanyaanModel extends CI_Model
{
	function get_pertanyaan($id = null)
	{
		$this->db->join('categories', 'categories.id = questions.qcategory_id');
		if($id != null) {
			$this->db->where('qcategory_id', $id);
		}
		$query = $this->db->get('questions');
		return $query;
	}

	function get_kategori($code = null)
	{
		$this->db->order_by('created_at', 'asc');
		if($code != null) {
			$this->db->where_in('category_code', $code);
		}
		$query = $this->db->get('categories');
		return $query;
	}

}
