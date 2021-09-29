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

	function get_kecamatan()
	{
		$this->db->order_by('id', 'asc');
		$query = $this->db->get('districts');
		return $query->result();
	}

	function get_level()
	{
		$this->db->order_by('id', 'asc');
		$query = $this->db->get('levels');
		return $query->result();
	}

	function get_userdata() {
		$this->db->join('puskesmas', 'puskesmas.id = users.puskesmas_id');
		$this->db->join('districts', 'districts.id = puskesmas.district_id');
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get('users');
		return $query->row();
	}

	function get_user($level = null)
	{
		$this->db->join('levels', 'levels.id = users.level_id');
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
			'name' => $insert['user_name'],
			'password' => password_hash($insert['password'], PASSWORD_DEFAULT),
			'level_id' => $insert['level'],
			'puskesmas_id' => $insert['puskesmas'] == '' ? null : $insert['puskesmas'],
			'created_at' => date('Y-m-d'),
			'updated_at' => date('Y-m-d'),
		];

		$this->db->insert('users', $data);
	}

	public function validate_puskesmas($puskesmas, $level, $id = null)
	{
		$this->db->select('*');
		$this->db->where('level_id', $level);
		$this->db->where('puskesmas_id', $puskesmas);
		if ($id != null) {
			$this->db->where('user_id !=', $id);
		}
		$query = $this->db->get('users');

		return $query->num_rows();
	}

	public function validate_username($username, $id = null)
	{
		$this->db->select('*');
		$this->db->where('username', $username);
		if ($id != null) {
			$this->db->where('user_id !=', $id);
		}
		$query = $this->db->get('users');

		return $query->num_rows();
	}

	public function delete_user($id)
	{
		$this->db->where('user_id', $id);
		$this->db->delete('users');
	}


	function get_supervisor()
	{
		$this->db->order_by('created_at', 'asc');
		$query = $this->db->get('supervisors');
		return $query->result();
	}

	public function insert_supervisor($insert)
	{
		$data = [
			'supervisor_name' => $insert['supervisor_name'],
			'created_at' => date('Y-m-d'),
			'updated_at' => date('Y-m-d'),
		];

		$this->db->insert('supervisors', $data);
	}

	public function delete_supervisor($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('supervisors');
	}

	function get_koordinator()
	{
		$this->db->select('coordinators.*, districts.district_name as district_name');
		$this->db->join('districts', 'districts.id = coordinators.district_id');
		$this->db->order_by('created_at', 'asc');
		$query = $this->db->get('coordinators');
		return $query->result();
	}

	public function insert_koordinator($insert)
	{
		$data = [
			'coordinator_name' => $insert['koordinator_name'],
			'district_id' => $insert['kecamatan'],
			'created_at' => date('Y-m-d'),
			'updated_at' => date('Y-m-d'),
		];

		$this->db->insert('coordinators', $data);
	}

	public function delete_koordinator($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('coordinators');
	}
}
