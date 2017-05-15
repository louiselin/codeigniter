<?php

class Program extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('program_model');
	}

	public function index() // 預設載入
	{
		$query = $this->program_model->select_all_data();
		$this->load->view('program_index', [
			'query' => $query
		]);
		return true;
	}

	public function create()
	{
		if ( ! $this->input->post() ) {
			$this->load->view('program_create');
			return true;
		}
		$data['title'] = $this->input->post('title', true);
		$data['content'] = $this->input->post('content', true);
		$data['timestamp'] = $this->input->post('timestamp', true);
		if ( ! $this->program_model->insert_data($data) ) {
			echo '<script type="text/javascript">alert("新增失敗");window.location.href= window.location.origin + "/Bitbuck/codeIgniter/index.php/program";</script>';
			return true;
		}
		echo '<script type="text/javascript">alert("新增成功");window.location.href= window.location.origin + "/Bitbuck/codeIgniter/index.php/program";</script>';
		// echo "新增成功";
		return true;
	}

	public function show($id = null)
	{
		$query = $this->program_model->select_data($id);
		$this->load->view('program_show', [
			'query' => $query
		]);
		return true;
	}

	public function edit($id = null)
	{
		if ( ! $query = $this->program_model->select_data($id) ) {
			echo '<script type="text/javascript">alert("查無此資料");window.location.href= window.location.origin + "/Bitbuck/codeIgniter/index.php/program";</script>';

			// echo "查無此資料";
			return true;
		}

		if ( ! $this->input->post() ) {
			$this->load->view('program_edit', [
				'query' => $query
			]);
			return true;
		}

		$data = [
			'id' => $id,
			'title' => $this->input->post('title', true),
			'content' => $this->input->post('content', true),
			'timestamp' => $this->input->post('timestamp', true)
 		];

		if ( ! $this->program_model->update_data($data) ) {
			echo '<script type="text/javascript">alert("更新失敗");window.location.href= window.location.origin + "/Bitbuck/codeIgniter/index.php/program";</script>';
			// echo "更新失敗";

			return true;
		}
		echo '<script type="text/javascript">alert("更新成功");window.location.href= window.location.origin + "/Bitbuck/codeIgniter/index.php/program";</script>';

		// echo "更新成功";
		return true;
	}

	public function delete($id = null)
	{
		if ( ! $query = $this->program_model->select_data($id) ) {
			echo '<script type="text/javascript">alert("查無此資料");window.location.href= window.location.origin + "/Bitbuck/codeIgniter/index.php/program";</script>';

			// echo "查無此資料";
			return true;
		}

		if ( ! $this->program_model->delete_data($id) ) {
			echo '<script type="text/javascript">alert("刪除失敗");window.location.href= window.location.origin + "/Bitbuck/codeIgniter/index.php/program";</script>';

			// echo "刪除失敗";
			return true;
		}
		echo '<script type="text/javascript">alert("刪除成功");window.location.href= window.location.origin + "/Bitbuck/codeIgniter/index.php/program";</script>';

		// echo "刪除成功";
		return true;
	}
}
