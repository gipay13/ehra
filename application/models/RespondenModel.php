<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RespondenModel extends CI_Model
{
	function regencies()
	{
		$this->db->like('name', 'SUKABUMI');
		$this->db->order_by('name', 'asc');
		$query = $this->db->get('regencies');

		return $query->result();
	}

	function district($id)
	{
		$this->db->where('regency_id', $id);
		$this->db->order_by('name', 'asc');
		$query = $this->db->get('districts');

		$output = '<option value="">--Pilih Kecamatan--</option>';
		foreach ($query->result() as $d) {
			$output .= '<option value="' . $d->id . '">' . $d->name . '</option>';
		}

		return $output;
	}

	function village($id)
	{
		$this->db->where('district_id', $id);
		$this->db->order_by('name', 'asc');
		$query = $this->db->get('villages');

		$output = '<option value="">--Pilih Kelurahan--</option>';
		foreach ($query->result() as $v) {
			$output .= '<option value="' . $v->id . '">' . $v->name . '</option>';
		}

		return $output;
	}

	public function koordinator()
	{
		$sql = "SELECT * FROM koordinator";

		return $this->db->query($sql);
	}

	function supevisor()
	{
		$this->db->order_by('nama_supervisor', 'asc');
		$query = $this->db->get('supervisor');
		return $query->result();
	}
}
