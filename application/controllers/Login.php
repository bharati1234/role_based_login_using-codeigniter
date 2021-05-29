<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Login_Model');
  }
  public function index()
  {
    $this->load->view('login_view');
  }
  function auth()
  {
    $username = $this->input->post('username', TRUE);
    $password = $this->input->post('password', TRUE);
    $result = $this->Login_Model->check_user($username, $password);
    if ($result->num_rows() > 0) {
      $data = $result->row_array();
      $uname = $data['username'];
      $role_level = $data['role_level'];
      $sessiondata = array(
        'username' => $uname,
        'role_level' => $role_level,
        'logged_in' => TRUE,
      );
      $this->session->set_userdata($sessiondata);
      if ($role_level == 1) {
        redirect("Admin");
      } else if ($role_level == 2) {
        redirect("Supervisor");
      } else {
        redirect("Employee");
      }
    } else {
      echo "<script>alert('Access Denied');history.go(-1);</script>";
    }
    $this->load->view('login_view');
  }

  function Logout()
  {
    $this->session->sess_destroy();
    redirect("Login");
  }
}
