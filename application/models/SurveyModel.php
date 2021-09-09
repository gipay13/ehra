<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SurveyModel extends CI_Model
{
	function kategori_pertanyaan($kode)
	{
		$this->db->where('category_code', $kode);
		$query = $this->db->get('question_category');
		return $query->result();
	}

	function pertanyaan($id)
	{
		$this->db->where('qcategory_id', $id);
		$query = $this->db->get('question');
		return $query->result();
	}

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
}
