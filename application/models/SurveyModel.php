<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SurveyModel extends CI_Model
{
	function insertJawaban($no_survey, $id_pertanyaan, $jawaban, $ket) {
		$answer = array(
			'id_survey'		=> $no_survey,
			'id_pertanyaan' => $id_pertanyaan,
			'jawaban' 		=> $jawaban,
			'ket'			=> $ket,
		);

		$this->db->insert('hasil_survey', $answer);
	}
}
