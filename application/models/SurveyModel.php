<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SurveyModel extends CI_Model
{
	function insert_jawaban($no_survey, $id_pertanyaan, $jawaban, $ket)
	{
		$answer = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => $id_pertanyaan,
			'jawaban' 		=> $jawaban,
			'ket'			=> $ket = '' ? null : $ket,
		);

		$this->db->insert('survey_result', $answer);
	}

	function insert_responden($responden)
	{
		$data = [
			'nkk'					=> $responden['nkk'],
			'nik'					=> $responden['nik'],
			'nama_kepala'			=> $responden['nama_kepala'],
			'jml_keluarga'			=> $responden['jumlah_keluarga'],
			'jml_laki'				=> $responden['jumlah_laki'],
			'jml_pr'				=> $responden['jumlah_pr'],
			'nama_responden'		=> $responden['responden'],
			'hubungan_responden'	=> $responden['hubungan'],
			'district_id'			=> $responden['kecamatan'],
			'alamat'				=> $responden['alamat'],
			'rt'					=> $responden['rt'],
			'rw'					=> $responden['rw'],
			'no_rmh'				=> $responden['no_rmh'],
		];

		$this->db->insert('respondent', $responden);
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
		];

		$this->db->insert('survey', $data);
	}
}
