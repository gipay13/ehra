<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
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

	function get_user($level = null)
	{
		$this->db->join('level', 'level.id = users.level_id');
		$this->db->join('puskesmas', 'puskesmas.id = users.puskesmas_id', 'left');
		if ($level != null) {
			$this->db->where('level_id', $level);
		}
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
		$this->db->where('user_id', $id);
		$this->db->delete('users');
	}
}
