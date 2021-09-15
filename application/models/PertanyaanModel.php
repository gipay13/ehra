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

	public function insert_pertanyaan($insert)
	{
		$data = [
			'qcategory_id' => $insert['id_kategori'],
			'question_name' => $insert['pertanyaan'],
			'created_at' => date('Y-m-d'),
			'updated_at' => date('Y-m-d'),
		];

		$this->db->insert('questions', $data);
	}

	public function delete_pertanyaan($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('questions');
	}

}
