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
		$sql = "SELECT * FROM coordinator";

		return $this->db->query($sql);
	}

	function supevisor()
	{
		$this->db->order_by('supervisor_name', 'asc');
		$query = $this->db->get('supervisor');
		return $query->result();
	}

	public function get_last_no_survey($month, $year)
	{
		$sql = "SELECT id FROM survey 
                WHERE MONTH(survey_date) = ? 
                AND YEAR(survey_date) = ?
                ORDER BY id DESC 
                LIMIT 1";
		return $this->db->query($sql, array($month, $year));
	}

	public function no_survey()
	{
		$query = $this->db->query("SELECT MAX(MID(invoice,9,4)) AS invoice_number FROM sales WHERE MID(invoice,3,6) = DATE_FORMAT(CURDATE(), '%y%m%d')");

		if ($query->num_rows() > 0) {
			$row = $query->row();
			$n = ((int)$row->invoice_number) + 1;
			$no = sprintf("%'.04d", $n);
		} else {
			$no = "0001";
		}

		$invoice = "SK" . date('ymd') . $no;
		return $invoice;
	}
}
