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
		$this->db->join('questions', 'questions.id = results.question_id');
		$this->db->join('categories', 'categories.id = questions.qcategory_id');
		$this->db->where('categories.id', $qcategory_id);
		$this->db->where('results.no_survey', $no_survey);
		$query = $this->db->get('results');
		return $query->result();
	}
}
