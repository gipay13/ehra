<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SurveyModel extends CI_Model
{
	function get_kategori_pertanyaan($kode)
	{
		$this->db->where('category_code', $kode);
		$query = $this->db->get('categories');
		return $query->result();
	}

	function get_jawaban($id) {
		$this->db->where('answers.question_id', $id);
		$query = $this->db->get('answers');
		return $query->result();
	}

	function get_pertanyaan($id)
	{
		$this->db->where('qcategory_id', $id);
		$this->db->order_by('id', 'asc');
		$query = $this->db->get('questions');
		return $query->result();
	}

	function insert_jawaban($no_survey, $id_pertanyaan, $jawaban)
	{
		$answer = array(
			'no_survey'		=> $no_survey,
			'question_id' => $id_pertanyaan,
			'answer_id' 		=> ($jawaban != null) ? $jawaban : null,
		);

		$this->db->insert('results', $answer);
	}
}
