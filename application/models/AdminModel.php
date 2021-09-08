<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{
	function get_pertanyaan()
	{
		$query = $this->db->get('question');
		return $query->result();
	}

	function get_puskesmas()
	{
		$this->db->order_by('id', 'asc');
		$query = $this->db->get('puskesmas');
		return $query->result();
	}

	function get_level()
	{
		$this->db->order_by('id', 'asc');
		$query = $this->db->get('level');
		return $query->result();
	}


	//
	//
	//Kategori Pertanyaan
	//
	//

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


	//
	//
	//User
	//
	//

	function get_user()
	{
		$this->db->select('users.*, level.name as level_name, puskesmas.nm_puskesmas as puskesmas_name');
		$this->db->join('level', 'level.id = users.level_id');
		$this->db->join('puskesmas', 'puskesmas.id = users.puskesmas_id', 'left');
		$this->db->order_by('users.created_at', 'asc');
		$query = $this->db->get('users');
		return $query->result();
	}

	public function insert_user($insert)
	{
		$data = [
			'username' => $insert['username'],
			'name' => $insert['name'],
			'password' => password_hash($insert['password'], PASSWORD_DEFAULT),
			'level_id' => $insert['level'],
			'puskesmas_id' => $insert['puskesmas'] == '' ? null : $insert['puskesmas'],
			'created_at' => date('Y-m-d'),
			'updated_at' => date('Y-m-d'),
		];

		$this->db->insert('users', $data);
	}

	public function validate_username($username, $id = null)
	{
		$this->db->select('*');
		$this->db->where('username', $username);
		if ($id != null) {
			$this->db->where('users.id !=', $id);
		}
		$query = $this->db->get('users');

		return $query->num_rows();
	}

	public function delete_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('users');
	}
}
