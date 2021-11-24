<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RespondenModel extends CI_Model
{

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
		$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$query = $this->db->query("SELECT MAX(MID(no_survey,12,4)) AS survey FROM survey WHERE MID(no_survey,5,6) = DATE_FORMAT(CURDATE(), '%y%m%d')");

		if ($query->num_rows() > 0) {
			$row = $query->row();
			$n = ((int)$row->survey) + 1;
			$no = sprintf("%'.02d", $n);
		} else {
			$no = "01";
		}

		$no_survey = "EHRA".date('ymd').substr(str_shuffle($permitted_chars), 0, 10).$no;
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

		$get_id = $this->db->insert_id();

		return $get_id;
	}

	function insert_survey($survey)
	{
		$data = [
			'no_survey'				=> $survey['no_survey'],
			'respondent_id'			=> $this->insert_responden($survey),
			'survey_date'			=> $survey['tanggal_survey'],
			'survey_time'			=> $survey['jam_survey'],
			'puskesmas_id'			=> $survey['puskesmas_id'],
			'user_id'				=> $survey['user_id'],
			'supervisor_id'			=> $survey['supervisor'],
			'coordinator_id'		=> $survey['koordinator'],
			'district_id'			=> $survey['kecamatan'],
			'village_id'			=> $survey['kelurahan'],
			'village_id'			=> $survey['kelurahan'],
			'lat'					=> $survey['latitude'],
			'lng'					=> $survey['longitude'],
			'image'					=> $survey['foto_responden'],
		];

		$this->db->insert('survey', $data);
	}
}
