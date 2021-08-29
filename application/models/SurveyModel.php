<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SurveyModel extends CI_Model
{
	function insert_jawaban($no_survey, $id_pertanyaan, $jawaban, $ket) {
		$answer = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => $id_pertanyaan,
			'jawaban' 		=> $jawaban,
			'ket'			=> $ket,
		);

		$this->db->insert('hasil_survey', $answer);
	}

	function insert_responden($responden) {
		$this->db->insert('responden', $responden);
	}

	function insert_survey($survey) {
		$this->db->insert('survey', $survey);
	}
}
