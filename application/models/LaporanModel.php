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

	function pie_bar_chart($id) {
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

	function stacked_chart($question_id, $answer_id) {
		$sql = "SELECT
					districts.district_name,
					((COUNT(CASE WHEN results.question_id = $question_id AND results.answer_id = $answer_id THEN 1 ELSE NULL END) / (SELECT COUNT( survey.id ) FROM survey) * 100)) AS result  
				FROM
					districts
					LEFT JOIN survey ON districts.id = survey.district_id
					LEFT JOIN results ON survey.no_survey = results.no_survey 
				WHERE
					districts.regency_id = 3272 
				GROUP BY
					districts.id";

		$query = $this->db->query($sql);
		return $query;	
	}

	function get_pdf_question($category_id, $question_id = null) {
		$this->db->where('qcategory_id', $category_id);
		if($question_id != null) {
			$this->db->where_in('id', $question_id);
		}
		$query = $this->db->get('questions');
		return $query;
	}

	function get_pdf_answer($id) {
		$sql = "SELECT
					answers.answer_name,
					COUNT(CASE WHEN survey.district_id = 3272010 THEN 1 ELSE NULL END ) AS result_baros,
					(( COUNT(CASE WHEN survey.district_id = 3272010 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.district_id = 3272010  )) * 100 ) AS persentase_baros,
					COUNT(CASE WHEN survey.district_id = 3272011 THEN 1 ELSE NULL END ) AS result_lembursitu,
					(( COUNT(CASE WHEN survey.district_id = 3272011 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.district_id = 3272011 )) * 100 ) AS persentase_cibeureum,
					COUNT(CASE WHEN survey.district_id = 3272012 THEN 1 ELSE NULL END ) AS result_cibeureum,
					(( COUNT(CASE WHEN survey.district_id = 3272012 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.district_id = 3272012 )) * 100 ) AS persentase_lembursitu,
					COUNT(CASE WHEN survey.district_id = 3272020 THEN 1 ELSE NULL END ) AS result_citamiang,
					(( COUNT(CASE WHEN survey.district_id = 3272020 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.district_id = 3272020 )) * 100 ) AS persentase_citamiang,
					COUNT(CASE WHEN survey.district_id = 3272030 THEN 1 ELSE NULL END ) AS result_warudoyong,
					(( COUNT(CASE WHEN survey.district_id = 3272030 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.district_id = 3272030 )) * 100 ) AS persentase_warudoyong,
					COUNT(CASE WHEN survey.district_id = 3272040 THEN 1 ELSE NULL END ) AS result_gunungpuyuh,
					(( COUNT(CASE WHEN survey.district_id = 3272040 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.district_id = 3272040 )) * 100 ) AS persentase_gunungpuyuh,
					COUNT(CASE WHEN survey.district_id = 3272050 THEN 1 ELSE NULL END ) AS result_cikole,
					(( COUNT(CASE WHEN survey.district_id = 3272050 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.district_id = 3272050 )) * 100 ) AS persentase_cikole
				FROM
					answers
					LEFT JOIN results ON answers.id = results.answer_id
					LEFT JOIN survey ON results.no_survey = survey.no_survey 
				WHERE
					answers.question_id = $id 
				GROUP BY
					answers.id";

		$query = $this->db->query($sql);
		return $query;
	}

	// function get_pdf_answer_radio($id) {
	// 	$sql = "SELECT
	// 				answers.answer_name,
	// 				COUNT(CASE WHEN  survey.district_id = 3272010 THEN 1 ELSE NULL END ) AS result_baros,
	// 				(( COUNT(CASE WHEN  survey.district_id = 3272010 THEN 1 ELSE NULL END ) / ( SELECT COUNT( survey.id ) FROM survey WHERE survey.district_id = 3272010 )) * 100 ) AS persentase_baros,
	// 				COUNT(CASE WHEN  survey.district_id = 3272011 THEN 1 ELSE NULL END ) AS result_lembursitu,
	// 				(( COUNT(CASE WHEN  survey.district_id = 3272011 THEN 1 ELSE NULL END ) / ( SELECT COUNT( survey.id ) FROM survey WHERE survey.district_id = 3272011 )) * 100 ) AS persentase_cibeureum,
	// 				COUNT(CASE WHEN  survey.district_id = 3272012 THEN 1 ELSE NULL END ) AS result_cibeureum,
	// 				(( COUNT(CASE WHEN  survey.district_id = 3272012 THEN 1 ELSE NULL END ) / ( SELECT COUNT( survey.id ) FROM survey WHERE survey.district_id = 3272012 )) * 100 ) AS persentase_lembursitu,
	// 				COUNT(CASE WHEN  survey.district_id = 3272020 THEN 1 ELSE NULL END ) AS result_citamiang,
	// 				(( COUNT(CASE WHEN  survey.district_id = 3272020 THEN 1 ELSE NULL END ) / ( SELECT COUNT( survey.id ) FROM survey WHERE survey.district_id = 3272020 )) * 100 ) AS persentase_citamiang,
	// 				COUNT(CASE WHEN  survey.district_id = 3272030 THEN 1 ELSE NULL END ) AS result_warudoyong,
	// 				(( COUNT(CASE WHEN  survey.district_id = 3272030 THEN 1 ELSE NULL END ) / ( SELECT COUNT( survey.id ) FROM survey WHERE survey.district_id = 3272030 )) * 100 ) AS persentase_warudoyong,
	// 				COUNT(CASE WHEN  survey.district_id = 3272040 THEN 1 ELSE NULL END ) AS result_gunungpuyuh,
	// 				(( COUNT(CASE WHEN  survey.district_id = 3272040 THEN 1 ELSE NULL END ) / ( SELECT COUNT( survey.id ) FROM survey WHERE survey.district_id = 3272040 )) * 100 ) AS persentase_gunungpuyuh,
	// 				COUNT(CASE WHEN  survey.district_id = 3272050 THEN 1 ELSE NULL END ) AS result_cikole,
	// 				(( COUNT(CASE WHEN  survey.district_id = 3272050 THEN 1 ELSE NULL END ) / ( SELECT COUNT( survey.id ) FROM survey WHERE survey.district_id = 3272050 )) * 100 ) AS persentase_cikole
	// 			FROM
	// 				answers
	// 				LEFT JOIN results ON answers.id = results.answer_id
	// 				LEFT JOIN survey ON results.no_survey = survey.no_survey 
	// 			WHERE
	// 				answers.question_id = $id  
	// 			GROUP BY
	// 				answers.id";

	// 	$query = $this->db->query($sql);
	// 	return $query;
	// }

	// public function get_data_pembayaran_by_date_range($start, $end)
    // {
    //     $sql = "SELECT
    //                 t_pembayaran.no_pembayaran,
    //                 t_pembayaran.tgl_bayar,
    //                 t_pembayaran.nis,
    //                 t_siswa.nama_siswa,
    //                 t_pembayaran.jumlah 
    //             FROM
    //                 t_pembayaran
    //                 JOIN t_siswa ON t_siswa.nis = t_pembayaran.nis 
    //             WHERE t_pembayaran.tgl_bayar BETWEEN ? AND ?
    //             ORDER BY t_pembayaran.tgl_bayar ASC";
    //     return $this->db->query($sql, array($start, $end));
    // }
	
}
