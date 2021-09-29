<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanModel extends CI_Model
{
	function get_district() {
		$this->db->where('regency_id', '3272');
		$this->db->order_by('id', 'asc');
		$query = $this->db->get('districts');
		return $query;
	}
	function chart_kelompok_umur() {
		// $this->db->select('answers.answer_name, COUNT("results.answer_id") as count_answer');
		// $this->db->join('results', 'answers.id = results.answer_id', 'LEFT');
		// $this->db->where('answers.question_id', 1);
		// $this->db->group_by('answers.id');
		// $query = $this->db->get('answers');
		// return $query;
		$sql = "SELECT
					COUNT(results.answer_id) AS count_answer, 
					answers.answer_name
				FROM
					answers
				LEFT JOIN
					results
				ON 
					answers.id = results.answer_id
				WHERE
					answers.question_id = 1
				GROUP BY
					answers.id";

		$query = $this->db->query($sql);
		return $query;
	}

	function get_pdf_category_b() {
		$this->db->where('qcategory_id', '2');
		$query = $this->db->get('questions');
		return $query;
	}

	function get_pdf_answer($id) {
		$sql = "SELECT
					answers.answer_name, 
					COUNT(results.answer_id) AS answer_result, 
					(SELECT COUNT(survey.id) FROM survey WHERE survey.district_id = 3272050) AS total_cikole, 
					((COUNT(results.answer_id) / (SELECT count(survey.id) FROM survey WHERE survey.district_id = 3272050)) * 100) AS persentase_cikole,
					(SELECT COUNT(survey.id) FROM survey WHERE survey.district_id = 3272040) AS total_gunung, 
					((COUNT(results.answer_id) / (SELECT count(survey.id) FROM survey WHERE survey.district_id = 3272040)) * 100) AS persentase_gunung,
					(SELECT COUNT(survey.id) FROM survey WHERE survey.district_id = 3272030) AS total_waru, 
					((COUNT(results.answer_id) / (SELECT count(survey.id) FROM survey WHERE survey.district_id = 3272030)) * 100) AS persentase_waru,
					(SELECT COUNT(survey.id) FROM survey WHERE survey.district_id = 3272020) AS total_citamiang, 
					((COUNT(results.answer_id) / (SELECT count(survey.id) FROM survey WHERE survey.district_id = 3272020)) * 100) AS persentase_citamiang,
					(SELECT COUNT(survey.id) FROM survey WHERE survey.district_id = 3272012) AS total_cibeureum, 
					((COUNT(results.answer_id) / (SELECT count(survey.id) FROM survey WHERE survey.district_id = 3272012)) * 100) AS persentase_cibeureum,
					(SELECT COUNT(survey.id) FROM survey WHERE survey.district_id = 3272011) AS total_lembursitu, 
					((COUNT(results.answer_id) / (SELECT count(survey.id) FROM survey WHERE survey.district_id = 3272011)) * 100) AS persentase_lembursitu,
					(SELECT COUNT(survey.id) FROM survey WHERE survey.district_id = 3272010) AS total_baros, 
					((COUNT(results.answer_id) / (SELECT count(survey.id) FROM survey WHERE survey.district_id = 3272010)) * 100) AS persentase_baros
				FROM
					answers
				LEFT JOIN results ON answers.id = results.answer_id
				LEFT JOIN survey ON results.no_survey = survey.no_survey
				WHERE
					answers.question_id = $id
				GROUP BY
					answers.id, 
					survey.district_id";

		$query = $this->db->query($sql);
		return $query;
	}

	function chart_pengelolaan_sampah() {
		$this->db->where('regency_id', '3272');
		$query = $this->db->get('districts');
		return $query;
	}
	
}
