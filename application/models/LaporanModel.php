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

	function get_village() {
		$this->db->where('district_id', '3272010');
		$this->db->or_where('district_id', '3272011');
		$this->db->or_where('district_id', '3272012');
		$this->db->or_where('district_id', '3272020');
		$this->db->or_where('district_id', '3272030');
		$this->db->or_where('district_id', '3272040');
		$this->db->or_where('district_id', '3272050');
		$this->db->order_by('id', 'asc');
		$query = $this->db->get('villages');
		return $query;
	}

	function chart($id) {
		$sql = "SELECT
					((COUNT(results.answer_id) / (SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id)) * 100) AS persentase, 
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

	function get_pdf_answer_kelurahan($id, $initial_date, $end_date) {
		$sql = "SELECT
					answers.answer_name,
					( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id ) as total_survey,
					-- BAROS
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272010006 THEN 1 ELSE NULL END ) AS result_sudajaya,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272010006 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272010006  )) * 100 ) AS persentase_sudajaya,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272010007 THEN 1 ELSE NULL END ) AS result_jayamekar,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272010007 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272010007  )) * 100 ) AS persentase_jayamekar,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272010008 THEN 1 ELSE NULL END ) AS result_jayaraksa,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272010008 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272010008  )) * 100 ) AS persentase_jayaraksa,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272010009 THEN 1 ELSE NULL END ) AS result_baros,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272010009 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272010009  )) * 100 ) AS persentase_baros,
					-- LEMBURSITU
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272011001 THEN 1 ELSE NULL END ) AS result_lembursitu,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272011001 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272011001  )) * 100 ) AS persentase_lembursitu,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272011002 THEN 1 ELSE NULL END ) AS result_situmekar,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272011002 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272011002  )) * 100 ) AS persentase_situmekar,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272011003 THEN 1 ELSE NULL END ) AS result_cipanengah,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272011003 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272011003  )) * 100 ) AS persentase_cipanengah,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272011004 THEN 1 ELSE NULL END ) AS result_cikundul,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272011004 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272011004  )) * 100 ) AS persentase_cikundul,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272011005 THEN 1 ELSE NULL END ) AS result_sidangsari,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272011005 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272011005  )) * 100 ) AS persentase_sidangsari,
					-- CIBEUREUM
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272012001 THEN 1 ELSE NULL END ) AS result_sindangpalay,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272012001 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272012001  )) * 100 ) AS persentase_sindangpalay,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272012002 THEN 1 ELSE NULL END ) AS result_limusnunggal,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272012003 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272012002  )) * 100 ) AS persentase_limusnunggal,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272012003 THEN 1 ELSE NULL END ) AS result_babakan,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272012003 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272012003  )) * 100 ) AS persentase_babakan,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272012004 THEN 1 ELSE NULL END ) AS result_cibeureum,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272012004 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272012004  )) * 100 ) AS persentase_cibeureum,
					-- CITAMIANG
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272020001 THEN 1 ELSE NULL END ) AS result_cikondang,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272020001 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272020001  )) * 100 ) AS persentase_cikondang,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272020002 THEN 1 ELSE NULL END ) AS result_gedong,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272020002 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272020002  )) * 100 ) AS persentase_gedong,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272020003 THEN 1 ELSE NULL END ) AS result_citamiang,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272020003 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272020003  )) * 100 ) AS persentase_citamiang,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272020004 THEN 1 ELSE NULL END ) AS result_nanggeleng,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272020004 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272020004  )) * 100 ) AS persentase_nanggeleng,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272020005 THEN 1 ELSE NULL END ) AS result_tipar,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272020005 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272020005  )) * 100 ) AS persentase_tipar,
					-- WARUDOYONG
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272030001 THEN 1 ELSE NULL END ) AS result_dayeuhluhur,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3273010001 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272030001  )) * 100 ) AS persentase_dayeuhluhur,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272030002 THEN 1 ELSE NULL END ) AS result_warudoyong,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272030002 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272030002  )) * 100 ) AS persentase_warudoyong,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272030003 THEN 1 ELSE NULL END ) AS result_nyomplong,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272030003 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272030003  )) * 100 ) AS persentase_nyomplong,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272030004 THEN 1 ELSE NULL END ) AS result_benteng,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272030004 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272030004  )) * 100 ) AS persentase_benteng,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272030005 THEN 1 ELSE NULL END ) AS result_sukakarya,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272030005 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272030005  )) * 100 ) AS persentase_sukakarya,
					-- GUNUNGPUYUH
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272040001 THEN 1 ELSE NULL END ) AS result_karangtengah,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272040001 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272040001  )) * 100 ) AS persentase_karangtengah,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272040002 THEN 1 ELSE NULL END ) AS result_gunungpuyuh,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272040002 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272040002  )) * 100 ) AS persentase_gunungpuyuh,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272040003 THEN 1 ELSE NULL END ) AS result_sriwidari,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272040003 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272040003  )) * 100 ) AS persentase_sriwidari,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272040004 THEN 1 ELSE NULL END ) AS result_karamat,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272040004 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272040004  )) * 100 ) AS persentase_karamat,
					-- CIKOLE
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272050001 THEN 1 ELSE NULL END ) AS result_gunungparang,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272050001 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272050001  )) * 100 ) AS persentase_gunungparang,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272050002 THEN 1 ELSE NULL END ) AS result_cikole,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272050002 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272050002  )) * 100 ) AS persentase_cikole,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272050003 THEN 1 ELSE NULL END ) AS result_kebonjati,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272050003 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272050003  )) * 100 ) AS persentase_kebonjati,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272050004 THEN 1 ELSE NULL END ) AS result_selabatu,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272050004 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272050004  )) * 100 ) AS persentase_selabatu,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272050005 THEN 1 ELSE NULL END ) AS result_cisarua,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272050005 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272050005  )) * 100 ) AS persentase_cisarua,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272050006 THEN 1 ELSE NULL END ) AS result_subangjaya,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.village_id = 3272050006 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.village_id = 3272050006  )) * 100 ) AS persentase_subangjaya
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

	function get_pdf_answer_kecamatan($id, $initial_date, $end_date) {
		$sql = "SELECT
					answers.answer_name,
					( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id ) as total_survey,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.district_id = 3272010 THEN 1 ELSE NULL END ) AS result_baros,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.district_id = 3272010 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.district_id = 3272010  )) * 100 ) AS persentase_baros,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.district_id = 3272011 THEN 1 ELSE NULL END ) AS result_lembursitu,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.district_id = 3272011 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.district_id = 3272011 )) * 100 ) AS persentase_cibeureum,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.district_id = 3272012 THEN 1 ELSE NULL END ) AS result_cibeureum,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.district_id = 3272012 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.district_id = 3272012 )) * 100 ) AS persentase_lembursitu,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.district_id = 3272020 THEN 1 ELSE NULL END ) AS result_citamiang,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.district_id = 3272020 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.district_id = 3272020 )) * 100 ) AS persentase_citamiang,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.district_id = 3272030 THEN 1 ELSE NULL END ) AS result_warudoyong,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.district_id = 3272030 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.district_id = 3272030 )) * 100 ) AS persentase_warudoyong,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.district_id = 3272040 THEN 1 ELSE NULL END ) AS result_gunungpuyuh,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.district_id = 3272040 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.district_id = 3272040 )) * 100 ) AS persentase_gunungpuyuh,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.district_id = 3272050 THEN 1 ELSE NULL END ) AS result_cikole,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' AND survey.district_id = 3272050 THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.district_id = 3272050 )) * 100 ) AS persentase_cikole
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

	function get_pdf_answer($id, $district_id, $initial_date, $end_date) {
		$sql = "SELECT
					answers.answer_name,
					COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' THEN 1 ELSE NULL END ) AS result,
					(( COUNT(CASE WHEN survey.survey_date BETWEEN '$initial_date' AND '$end_date' THEN 1 ELSE NULL END ) / ( SELECT COUNT( results.question_id ) FROM answers LEFT JOIN results ON answers.id = results.answer_id LEFT JOIN survey ON results.no_survey = survey.no_survey WHERE answers.question_id = $id AND survey.survey_date BETWEEN '$initial_date' AND '$end_date' )) * 100 ) AS persentase
				FROM
					answers
					LEFT JOIN results ON answers.id = results.answer_id
					LEFT JOIN survey ON results.no_survey = survey.no_survey 
				WHERE
					answers.question_id = $id
					AND (SELECT districts.id FROM districts WHERE districts.id = $district_id)
				GROUP BY
					answers.id";

		$query = $this->db->query($sql);
		return $query;
	}
	
}
