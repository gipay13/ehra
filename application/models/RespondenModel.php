<?php

class RespondenModel extends CI_Model {
	function provinces() {
		$this->db->order_by('name', 'asc');
		$query = $this->db->get('provinces');
		return $query->result();
	} 

	public function regencies($id) {
		$this->db->where('province_id', $id);
		$this->db->order_by('name', 'asc');
		$query = $this->db->get('regencies');

		$output = '<option value="">--Pilih Kabupaten--</option>';
		foreach ($query->result() as $r) {
			$output .= '<option value="'.$r->id.'">'.$r->name.'</option>';
		}

		return $output;
	}

	public function district() {

	} 

	public function village() {

	} 

}
