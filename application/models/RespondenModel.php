<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RespondenModel extends CI_Model
{
	function regencies()
	{
		$this->db->order_by('regency_name', 'asc');
		$query = $this->db->get('regencies');

		return $query->result();
	}

	function district($id)
	{
		$this->db->where('regency_id', $id);
		$this->db->order_by('district_name', 'asc');
		$query = $this->db->get('districts');

		$output = '<option value="">--Pilih Kecamatan--</option>';
		foreach ($query->result() as $d) {
			$output .= '<option value="' . $d->id . '">' . $d->district_name . '</option>';
		}

		return $output;
	}

	function village($id)
	{
		$this->db->where('district_id', $id);
		$this->db->order_by('village_name', 'asc');
		$query = $this->db->get('villages');

		$output = '<option value="">--Pilih Kelurahan--</option>';
		foreach ($query->result() as $v) {
			$output .= '<option value="' . $v->id . '">' . $v->village_name . '</option>';
		}

		return $output;
	}

	function koordinator($id)
	{
		$this->db->where('district_id', $id);
		$query = $this->db->get('coordinators');

		$output = '<option value="">--Pilih Koordinator--</option>';
		foreach ($query->result() as $k) {
			$output .= '<option value="' . $k->id . '">' . $k->coordinator_name . '</option>';
		}

		return $output;
	}


	public function no_survey()
	{
		$query = $this->db->query("SELECT MAX(MID(no_survey,12,4)) AS survey FROM survey WHERE MID(no_survey,5,6) = DATE_FORMAT(CURDATE(), '%y%m%d')");

		if ($query->num_rows() > 0) {
			$row = $query->row();
			$n = ((int)$row->survey) + 1;
			$no = sprintf("%'.04d", $n);
		} else {
			$no = "0001";
		}

		$no_survey = "EHRA" . date('ymd') . $no;
		return $no_survey;
	}

	function insert_responden($responden)
	{
		$data = [
			'nkk'					=> $responden['nkk'],
			'nik'					=> $responden['nik'],
			'nama_kepala'			=> $responden['nama_kepala'],
			'jml_keluarga'			=> $responden['jumlah_keluarga'],
			'jml_jiwa'				=> $responden['jumlah_jiwa'],
			'nama_responden'		=> $responden['responden'],
			'hubungan_responden'	=> $responden['hubungan'],
			'alamat'				=> $responden['alamat'],
			'rt'					=> $responden['rt'],
			'rw'					=> $responden['rw'],
			'no_rmh'				=> $responden['no_rmh'],
		];

		$this->db->insert('respondent', $data);
	}

	function insert_survey($survey)
	{
		$data = [
			'no_survey'				=> $survey['no_survey'],
			'nik'					=> $survey['nik'],
			'survey_date'			=> $survey['tanggal_survey'],
			'survey_time'			=> $survey['jam_survey'],
			'user_id'				=> $survey['user_id'],
			'supervisor_id'			=> $survey['supervisor'],
			'coordinator_id'		=> $survey['koordinator'],
			'regency_id'			=> $survey['kabupaten'],
			'district_id'			=> $survey['kecamatan'],
			'village_id'			=> $survey['kelurahan']
		];

		$this->db->insert('survey', $data);
	}
}
