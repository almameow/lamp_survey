<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Survey extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Define model
		$this->load->model("Survey_model");
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function get_questions()
	{
		// Pull questions from db and load partials
		$data["all_questions"] = $this->Survey_model->get_questions();
		$data["all_answers"] = $this->Survey_model->get_answers();
		$count = $this->Survey_model->get_question_count();
		$data["count"] = $count;
		$this->load->view("/partials/questions", $data);
	}

	public function submit_survey()
	{
		$data['survey_data'] = $this->input->post();
		if($data['survey_data'][1] == 1)
		{
			$data['gender_id'] = 1;
		}
		else
		{
			$data['gender_id'] = 2;
		}
		//var_dump($data);
		$this->Survey_model->submit_survey($data);
		
		for($i=1; $i<3; $i++)
		{
			$results['array_'.$i] = $this->Survey_model->show_results($i);
		}
		
		// var_dump($results);
		// Results for array 1 are women, array 2 are men
		$this->load->view("/results", $results);
	}

}