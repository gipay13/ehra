<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HasilModel extends CI_Model
{
	function get_hasil()
	{
		$this->db->join('puskesmas', 'puskesmas.id = survey.puskesmas_id');
		$this->db->join('respondent', 'respondent.nik = survey.nik');
		$this->db->join('users', 'users.user_id = survey.user_id');
		$this->db->join('districts', 'districts.id = survey.district_id');
		$this->db->join('villages', 'villages.id = survey.village_id');
		$this->db->order_by('survey.survey_date', 'desc');
		$query = $this->db->get('survey');
		return $query;
	}

	function delete_survey($no_survey) {
		$this->db->where('no_survey', $no_survey);
		$this->db->delete('survey');
	}

	function delete_respondent($nik)
	{
		$this->db->where('nik', $nik);
		$this->db->delete('respondent');
	}

	function delete_result($no_survey)
	{
		$this->db->where('no_survey', $no_survey);
		$this->db->delete('results');
	}

	function get_pdf_survey($no_survey)
	{
		$this->db->join('respondent', 'respondent.nik = survey.nik');
		$this->db->join('users', 'users.user_id = survey.user_id');
		$this->db->join('districts', 'districts.id = survey.district_id');
		$this->db->join('villages', 'villages.id = survey.village_id');
		$this->db->join('supervisors', 'supervisors.id = survey.supervisor_id');
		$this->db->join('coordinators', 'coordinators.id = survey.coordinator_id');
		$this->db->where('survey.no_survey', $no_survey);
		$query = $this->db->get('survey');
		return $query->row();
	}

	function get_pdf_jawaban($no_survey, $id)
	{
		$this->db->join('answers', 'answers.id = results.answer_id');
		$this->db->where('no_survey', $no_survey);
		$this->db->where('results.question_id', $id);
		$query = $this->db->get('results');
		return $query->result();
	}
}
