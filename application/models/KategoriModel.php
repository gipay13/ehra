<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KategoriModel extends CI_Model
{
	function get_kategori()
	{
		$this->db->order_by('created_at', 'asc');
		$query = $this->db->get('question_category');
		return $query->result();
	}

	public function validate_kategori($category_code, $id = null)
	{
		$this->db->select('*');
		$this->db->where('category_code', $category_code);
		if ($id != null) {
			$this->db->where('question_category.id !=', $id);
		}
		$query = $this->db->get('question_category');

		return $query->num_rows();
	}

	public function insert_kategori($insert)
	{
		$data = [
			'category_code' => $insert['kode_kategori'],
			'category_name' => $insert['nama_kategori'],
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		];

		$this->db->insert('question_category', $data);
	}

	public function delete_kategori($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('question_category');
	}

	public function update_kategori($update)
	{
		$data = [
			'category_code' => $update['kode_kategori'],
			'category_name' => $update['nama_kategori'],
			'updated_at' => date('Y-m-d H:i:s'),
		];

		$this->db->where('id', $update['id']);
		$this->db->update('question_category', $data);
	}
}
