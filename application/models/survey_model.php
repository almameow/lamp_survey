<?php
	class Survey_model extends CI_Model{
		
		function get_questions()
		{
			return $this->db->query("SELECT questions.id, questions.question_order, questions.question_text
				FROM questions
				ORDER BY questions.question_order")->result_array();
		}

		function get_answers()
		{
			return $this->db->query("SELECT questions.id, questions.question_order, answers.answer_text, questions.type, answers.id AS answer_id 
				FROM questions
				LEFT JOIN answers
				ON questions.id = answers.question_id
				ORDER BY questions.question_order")->result_array();
		}
		function get_question_count()
		{
			return $this->db->query("SELECT COUNT(questions.id) AS 'count' FROM questions")->row_array();
		}

		function submit_survey($data)
		{
			return $this->db->query("UPDATE results
				SET count = count + 1
				WHERE answer_id != 1 AND gender_id = ?", $data['gender_id']);
		}
		function show_results($gender_id)
		{
			return $this->db->query("SELECT questions.question_text, answers.answer_text, results.count, results.gender_id
				FROM results
				LEFT JOIN answers
				ON results.answer_id = answers.id
				LEFT JOIN questions
				ON answers.question_id = questions.id
				WHERE gender_id = ? AND questions.id != 1
				GROUP BY questions.id
				ORDER BY results.count DESC", $gender_id) -> result_array();
		}
	}
?>