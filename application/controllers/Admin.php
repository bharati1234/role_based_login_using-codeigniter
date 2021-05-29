<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('Login');
    }
  }
  public function index()
  {
    if ($this->session->userdata('role_level') == '1') {
      $this->load->view('Admin_view');
    } else {
      echo "<script>alert('access Denied')</script>";
    }
  }
}
