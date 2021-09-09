<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PertanyaanModel extends CI_Model
{
	function get_pertanyaan()
	{
		$this->db->select('question.*, question_category.category_code as qcategory_code');
		$this->db->join('question_category', 'question_category.id = question.qcategory_id');
		$query = $this->db->get('question');
		return $query->result();
	}
}
