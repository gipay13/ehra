<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanModel extends CI_Model
{
	function chart_kelompok_umur() {
		$this->db->select('answers.answer_name, answer_id, COUNT("answer_id") as count_answer');
		$this->db->join('results', 'results.answer_id = answers.id');
		$this->db->where('answers.question_id', '1');
		$this->db->group_by('answer_id');
		$this->db->order_by('answers.id', 'asc');
		$query = $this->db->get('answers');
		return $query;
	}

	// function chart_kelompok_umur()
	// {
	// 	$this->db->select('answers.answer_name, answers.question_id, COUNT("answer_id") as count_answer');
	// 	$this->db->join('results', 'results.answer_id = answers.id', 'left outer');
	// 	$this->db->where('answers.question_id', '1');
	// 	$this->db->group_by('answer_name');
	// 	$this->db->order_by('answers.id', 'asc');
	// 	$query = $this->db->get('answers');
	// 	return $query;
	// }

	function chart_pengelolaan_sampah() {
		$this->db->where('regency_id', '3272');
		$query = $this->db->get('districts');
		return $query;
	}
	
}
