<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanModel extends CI_Model
{
	function get_district() {
		$this->db->where('regency_id', '3272');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get('districts');
		return $query;
	}

	function chart_per_question($id) {
		$sql = "SELECT
					((COUNT(results.answer_id) / (SELECT count(survey.id) FROM survey)) * 100) AS persentase, 
					COUNT(results.answer_id) AS count_answer, 
					answers.answer_name
				FROM
					answers
				LEFT JOIN
					results
				ON 
					answers.id = results.answer_id
				WHERE
					answers.question_id = $id
				GROUP BY
					answers.id";

		$query = $this->db->query($sql);
		return $query;
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     INFORMASI UMUM

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	function get_pdf_question($category_id, $question_id = null) {
		$this->db->where('qcategory_id', $category_id);
		if($question_id != null) {
			$this->db->where('id', $question_id);
		}
		$query = $this->db->get('questions');
		return $query;
	}

	function get_pdf_answer($id) {
		$sql = "SELECT
					answers.answer_name,
					COUNT( results.answer_id ) AS count_result,
					(( COUNT( results.answer_id ) / ( SELECT COUNT( survey.id ) FROM survey WHERE survey.district_id = 3272050 )) * 100 ) AS persentase 
				FROM
					answers
					LEFT JOIN results ON answers.id = results.answer_id
					LEFT JOIN survey ON results.no_survey = survey.no_survey 
				WHERE
					answers.question_id = $id 
					AND survey.district_id = 3272050 
				GROUP BY
					answers.id,
					survey.district_id";

		$query = $this->db->query($sql);
		return $query;
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     PENGELOLAAN SAMPAH

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function chart_sampah() {
		
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//     LIMBAH RUMAH TANGGA

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	
}
