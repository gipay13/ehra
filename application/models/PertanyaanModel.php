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

	public function insert_pertanyaan($insert)
	{
		$data = [
			'qcategory_id' => $insert['id_kategori'],
			'question_name' => $insert['pertanyaan'],
			'created_at' => date('Y-m-d'),
			'updated_at' => date('Y-m-d'),
		];

		$this->db->insert('question', $data);
	}

	public function delete_pertanyaan($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('question');
	}

	public function update_pertanyaan($update)
	{
		$data = [
			'qcategory_id' => $update['id_kategori'],
			'question_name' => $update['pertanyaan'],
			'updated_at' => date('Y-m-d'),
		];

		$this->db->where('id', $update['id']);
		$this->db->update('question', $data);
	}
}
