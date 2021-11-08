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
		if($this->session->userdata('puskesmas') != null) {
			$this->db->where('puskesmas.id', $this->session->userdata('puskesmas'));
		}
		$this->db->order_by('survey.survey_date', 'desc');
		$query = $this->db->get('survey');
		return $query;
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

	function get_pdf_kategori($code)
	{
		$this->db->order_by('created_at', 'asc');
		$this->db->where_in('category_code', $code);
		$query = $this->db->get('categories');
		return $query->result();
	}

	function get_pdf_pertanyaan($id)
	{
		$this->db->where('qcategory_id', $id);
		$this->db->order_by('id', 'asc');
		$query = $this->db->get('questions');
		return $query->result();
	}

	function get_pdf_jawaban($no_survey, $id)
	{

		$this->db->join('answers', 'answers.id = results.answer_id');
		$this->db->where('no_survey', $no_survey);
		$this->db->where('results.question_id', $id);
		$query = $this->db->get('results');
		return $query->result();
	}

	function get_pdf_total($no_survey) {
		$sql = "SELECT
					SUM( answers.answer_weight * categories.category_weight ) AS total 
				FROM
					results
					INNER JOIN survey ON results.no_survey = survey.no_survey
					INNER JOIN questions ON questions.id = results.question_id
					INNER JOIN answers ON results.answer_id = answers.id
					INNER JOIN categories ON questions.qcategory_id = categories.id 
				WHERE
					results.no_survey = '$no_survey'";
					
		$query = $this->db->query($sql);
		return $query->row();
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
}
