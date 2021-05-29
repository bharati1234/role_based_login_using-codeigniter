<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
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
    if ($this->session->userdata('role_level') == 3) {
      $this->load->view('Employee_view');
    } else {
      echo "<script>alert('access Denied')</script>";
    }
  }
  public function employee_list()
  {
    $this->load->view('Employee_list');
  }
}
