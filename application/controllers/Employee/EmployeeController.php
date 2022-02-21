<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{

  public function create()
  {
    $this->load->view('template/header');
    $this->load->view('employee/create');
    $this->load->view('template/footer');
  }

  public function search()
  {
    $this->load->view('template/header');
    $this->load->view('employee/search');
    $this->load->view('template/footer');
  }
}
