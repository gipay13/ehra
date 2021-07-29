<?php

class RespondenModel extends CI_Model {
	function provinces() {
		$this->db->order_by('name', 'asc');
		$query = $this->db->get('provinces');
		return $query->result();
	} 

	function regencies($id) {
		$this->db->where('province_id', $id);
		$this->db->order_by('name', 'asc');
		$query = $this->db->get('regencies');

		$output = '<option value="">--Pilih Kabupaten--</option>';
		foreach ($query->result() as $r) {
			$output .= '<option value="'.$r->id.'">'.$r->name.'</option>';
		}

		return $output;
	}

	function district($id) {
		$this->db->where('regency_id', $id);
		$this->db->order_by('name', 'asc');
		$query = $this->db->get('districts');

		$output = '<option value="">--Pilih Kecamatan--</option>';
		foreach ($query->result() as $d) {
			$output .= '<option value="'.$d->id.'">'.$d->name.'</option>';
		}

		return $output;
	} 

	function village($id) {
		$this->db->where('district_id', $id);
		$this->db->order_by('name', 'asc');
		$query = $this->db->get('villages');

		$output = '<option value="">--Pilih Kelurahan--</option>';
		foreach ($query->result() as $v) {
			$output .= '<option value="'.$v->id.'">'.$v->name.'</option>';
		}

		return $output;
	} 

	function koordinator($id) {
		$this->db->where('district_id', $id);
		$this->db->order_by('nama_koordinator', 'asc');
		$query = $this->db->get('koordinator');

		$output = '<option value="">--Pilih Koordinator--</option>';
		foreach ($query->result() as $k) {
			$output .= '<option value="'.$k->id.'">'.$k->nama_koordinator.'</option>';
		}

		return $output;
	} 

	function supevisor() {
		$this->db->order_by('nama_supervisor', 'asc');
		$query = $this->db->get('supervisor');
		return $query->result();
	}
}
