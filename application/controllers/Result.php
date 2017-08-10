<?php

class Result extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('result_model');
	}

	public function index() // 預設載入
	{
		$account = $this->session->userdata('account');

		if ($account){
			$query = $this->result_model->select_all_data();
			$this->load->view('result_index', [
				'query' => $query
			]);
		} else {
			$yourURL = '/codeigniter/auth';
			echo ("<script>location.href='$yourURL';</script>");
		}

		return true;
	}

	public function create()
	{
		if ( ! $this->input->post() ) {
			$this->load->view('result_create');
			return true;
		}
		$data['title'] = $this->input->post('title', true);
		$data['title_content'] = $this->input->post('title_content', true);
		$data['content'] = $this->input->post('content', true);
  	$data['timestamp'] = $this->input->post('timestamp', true);
  	$data['pdflink'] = $this->input->post('pdflink', true);
		if ( ! $this->result_model->insert_data($data) ) {
			echo '<script type="text/javascript">alert("新增失敗");window.location.href= window.location.origin + "/codeigniter/result";</script>';
			return true;
		}
		echo '<script type="text/javascript">alert("新增成功");window.location.href= window.location.origin + "/codeigniter/result"; </script>';
		// echo "新增成功";
		return true;
	}

	public function show($id = null)
	{
		$query = $this->result_model->select_data($id);
		$this->load->view('result_show', [
			'query' => $query
		]);
		return true;
	}

	public function edit($id = null)
	{
		if ( ! $query = $this->result_model->select_data($id) ) {
			echo $id;
			echo '<script type="text/javascript">alert("查無此資料");window.location.href= window.location.origin + "/codeigniter/result";</script>';

			// echo "查無此資料";
			return true;
		}

		if ( ! $this->input->post() ) {
			$this->load->view('result_edit', [
				'query' => $query
			]);
			return true;
		}

		$data = [
			'id' => $id,
			'title' => $this->input->post('title', true),
			'title_content' => $this->input->post('title_content', true),
			'content' => $this->input->post('content', true),
			'timestamp' => $this->input->post('timestamp', true),
     		'pdflink' => $this->input->post('pdflink', true)
 		];

		if ( ! $this->result_model->update_data($data) ) {
			echo '<script type="text/javascript">alert("更新失敗");window.location.href= window.location.origin + "/codeigniter/result";</script>';
			// echo "更新失敗";

			return true;
		}
		echo '<script type="text/javascript">alert("更新成功");window.location.href= window.location.origin + "/codeigniter/result";</script>';

		// echo "更新成功";
		return true;
	}

	public function delete($id = null)
	{
		if ( ! $query = $this->result_model->select_data($id) ) {
			echo '<script type="text/javascript">alert("查無此資料");window.location.href= window.location.origin + "/codeigniter/result";</script>';

			// echo "查無此資料";
			return true;
		}

		if ( ! $this->result_model->delete_data($id) ) {
			echo '<script type="text/javascript">alert("刪除失敗");window.location.href= window.location.origin + "/codeigniter/result";</script>';

			// echo "刪除失敗";
			return true;
		}
		echo '<script type="text/javascript">alert("刪除成功");window.location.href= window.location.origin + "/codeigniter/result";</script>';

		// echo "刪除成功";
		return true;
	}

	public function savetheuploadedfile() {
		// $public_dir = "/home/louise/public_html/"; // change this to public dir path
		$public_dir = 'public/images/';
		$baseurl = base_url();
		if ($_FILES['file']['name']) {
				if (!$_FILES['file']['error']) {
						$name = md5(rand(100, 200));
						$ext = explode('.', $_FILES['file']['name']);
						$filename = $name . '.' . $ext[1];
						$destination = $public_dir . $filename; //change path of the folder...
						$location = $_FILES["file"]["tmp_name"];
						move_uploaded_file($location, $destination);
						// echo $destination;

						// echo 'http://localhost/~louise/' . $filename;

						echo $baseurl.'/public/images/' . $filename;
				} else {
						echo $message = 'The following error occured:  ' . $_FILES['file']['error'];
				}
		}

		return true;
	}

}
