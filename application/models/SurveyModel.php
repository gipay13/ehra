<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SurveyModel extends CI_Model
{
	function kategori_pertanyaan($kode)
	{
		$this->db->where('category_code', $kode);
		$query = $this->db->get('categories');
		return $query->result();
	}

	function pertanyaan($id)
	{
		$this->db->where('qcategory_id', $id);
		$query = $this->db->get('questions');
		return $query->result();
	}

	function insert_jawaban($no_survey, $id_pertanyaan, $jawaban, $ket)
	{
		$answer = array(
			'survey_id'		=> $no_survey,
			'question_id' => $id_pertanyaan,
			'answer' 		=> $jawaban,
			'description'			=> $ket = '' ? null : $ket,
		);

		$this->db->insert('results', $answer);
	}
}
