<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HasilModel extends CI_Model
{
	function get_hasil()
	{
		$this->db->join('respondent', 'respondent.nik = survey.nik');
		$this->db->join('users', 'users.user_id = survey.user_id');
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

	function get_hasil_laporan($no_survey) {
		$this->db->join('survey', 'survey.no_survey = survey_result.no_survey');
		$this->db->join('question', 'question.id = survey_result.question_id');
		$this->db->where('survey_result.no_survey', $no_survey);
		$query = $this->db->get('survey_result');
		return $query->result();	
	}
}
