<?php

class Link extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('link_model');
	}

	public function index() // 預設載入
	{
		$account = $this->session->userdata('account');

		if ($account){
			$query = $this->link_model->select_all_data();
			$this->load->view('link_index', [
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
			$this->load->view('link_create');
			return true;
		}
		$data['title'] = $this->input->post('title', true);
  	$data['timestamp'] = $this->input->post('timestamp', true);
  	$data['picture'] = $this->input->post('picture', true);
		$data['url'] = $this->input->post('url', true);
		if ( ! $this->link_model->insert_data($data) ) {
			echo '<script type="text/javascript">alert("新增失敗");window.location.href= window.location.origin + "/codeigniter/link";</script>';
			return true;
		}
		echo '<script type="text/javascript">alert("新增成功");window.location.href= window.location.origin + "/codeigniter/link"; </script>';
		// echo "新增成功";
		return true;
	}

	public function show($id = null)
	{
		$query = $this->link_model->select_data($id);
		$this->load->view('link_show', [
			'query' => $query
		]);
		return true;
	}

	public function edit($id = null)
	{
		if ( ! $query = $this->link_model->select_data($id) ) {
			echo $id;
			echo '<script type="text/javascript">alert("查無此資料");window.location.href= window.location.origin + "/codeigniter/link";</script>';

			// echo "查無此資料";
			return true;
		}

		if ( ! $this->input->post() ) {
			$this->load->view('link_edit', [
				'query' => $query
			]);
			return true;
		}

		$data = [
			'id' => $id,
			'title' => $this->input->post('title', true),
			'timestamp' => $this->input->post('timestamp', true),
     	'picture' => $this->input->post('picture', true),
			'url' => $this->input->post('url', true)
 		];

		if ( ! $this->link_model->update_data($data) ) {
			echo '<script type="text/javascript">alert("更新失敗");window.location.href= window.location.origin + "/codeigniter/link";</script>';
			// echo "更新失敗";

			return true;
		}
		echo '<script type="text/javascript">alert("更新成功");window.location.href= window.location.origin + "/codeigniter/link";</script>';

		// echo "更新成功";
		return true;
	}

	public function delete($id = null)
	{
		if ( ! $query = $this->link_model->select_data($id) ) {
			echo '<script type="text/javascript">alert("查無此資料");window.location.href= window.location.origin + "/codeigniter/link";</script>';

			// echo "查無此資料";
			return true;
		}

		if ( ! $this->link_model->delete_data($id) ) {
			echo '<script type="text/javascript">alert("刪除失敗");window.location.href= window.location.origin + "/codeigniter/link";</script>';

			// echo "刪除失敗";
			return true;
		}
		echo '<script type="text/javascript">alert("刪除成功");window.location.href= window.location.origin + "/codeigniter/link";</script>';

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
