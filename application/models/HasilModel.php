<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HasilModel extends CI_Model
{
	function get_hasil()
	{
		$this->db->join('respondent', 'respondent.nik = survey.nik');
		$this->db->join('users', 'users.user_id = survey.user_id');
		$this->db->join('districts', 'districts.id = respondent.district_id');
		$this->db->order_by('survey.survey_date', 'desc');
		$query = $this->db->get('survey');
		return $query->result();
	}

	function delete_hasil_responden($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('respondent');
	}

	function delete_hasil_survey($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('survey');
	}

	function get_hasil_survey($no_survey)
	{
		$this->db->join('respondent', 'respondent.nik = survey.nik');
		$this->db->join('users', 'users.user_id = survey.user_id');
		$this->db->join('districts', 'districts.id = respondent.district_id');
		$this->db->where('survey.no_survey', $no_survey);
		$query = $this->db->get('survey');
		return $query->row();
	}

	function get_hasil_jawaban($no_survey, $qcategory_id)
	{
		$this->db->join('question', 'question.id = survey_result.question_id');
		$this->db->join('question_category', 'question_category.id = question.qcategory_id');
		$this->db->where('question_category.id', $qcategory_id);
		$this->db->where('survey_result.no_survey', $no_survey);
		$query = $this->db->get('survey_result');
		return $query->result();
	}

	function kategori_pertanyaan()
	{
		$this->db->order_by('created_at', 'asc');
		$query = $this->db->get('question_category');
		return $query->result();
	}
}
