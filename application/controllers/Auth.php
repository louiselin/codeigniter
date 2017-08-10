<?php
// session_start();
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

  function __construct()
  {
      parent::__construct();
			// $this->load->library('session');
			// $this->load->model('auth_model');
  }

	public function index()
	{
		// Using the terminal create new table by entering the
    // following SQL:
    /*
    CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(32) NOT NULL,
    `password` varchar(64) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
  */




    // Load the database
    // $dbconnect = $this->load->database();
    // $array = array('account' => 'admin', 'password' => md5('admin'));
  	// $this->db->insert('auth', $array);

      // To add new user run the following query sample:
  // $array = array('username' => 'admin', 'password' => md5('admin'));
  // $this->db->insert('users', $array);

    // When the form submit this code will
    // execute
    if ($this->input->post('submit'))
    {
      // Get the input from the form and dont forget to add md5
      // function to the password.
      $this->db->where('account', $this->input->post('account'));
      $this->db->where('password', $this->input->post('password'));
      $result = $this->db->get('auth');


      // If we find a user output correct, else output wrong.
      if($result->num_rows() != 0)
      {

				$session_data = array(
												'account' => $this->input->post('account'),
												);
        // echo 'Correct!';
				$this->session->set_userdata('account', $this->input->post('account'));
				// header('http://localhost/codeigniter/');
				$yourURL = '/codeigniter/';
				echo ("<script>location.href='$yourURL';</script>");
      }
      else
      {
				echo ('<script>alert("Wrong Account or Password!");</script>');
        // echo 'Wrong!';
      }
    }

    $this->load->view('auth_login');
	}

}
