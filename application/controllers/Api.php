<?php
require(APPPATH.'/libraries/REST_Controller.php');

class Api extends REST_Controller
{
  public function __construct()
	{
		parent::__construct();
    $this->load->model('article_model');
    $this->load->model('program_model');
    $this->load->model('result_model');
    $this->output->set_header('Access-Control-Allow-Origin: *');
  }
  public function articles_get()
  {
    $query = $this->article_model->select_all_data();
    $this->response($query);
  }
  public function article_get($id)
  {
    $query = $this->article_model->select_data($id);
    $this->response($query);
  }
  public function programs_get()
  {
    $query = $this->program_model->select_all_data();
    $this->response($query);
  }
  public function program_get($id)
  {
    $query = $this->program_model->select_data($id);
    $this->response($query);
  }
  public function results_get()
  {
    $query = $this->result_model->select_all_data();
    $this->response($query);
  }
  public function result_get($id)
  {
    $query = $this->result_model->select_data($id);
    $this->response($query);
  }
}
?>
