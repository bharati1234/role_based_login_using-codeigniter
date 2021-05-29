<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supervisor extends CI_Controller
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
    if ($this->session->userdata('role_level') == 2) {
      $this->load->view('Supervisor_view');
    } else {
      echo "<script>alert('access Denied')</script>";
    }
  }
  public function supervisor_list()
  {
    $this->load->view('Supervisor_list');
  }
}
