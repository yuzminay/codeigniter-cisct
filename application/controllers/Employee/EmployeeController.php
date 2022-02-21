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

  public function add()
  {
    $first_name = $this->input->post('first_name');
    $last_name = $this->input->post('last_name');
    $job = $this->input->post('job');
    $hiredate = $this->input->post('hiredate');
    $salary = $this->input->post('salary');

    $data = array(
      'name'  => $first_name,
      'last_name' => $last_name,
      'job'  => $job,
      'hiredate'  => $hiredate,
      'salary'  => $salary,
    );

    var_dump($data);
  }

  public function search()
  {
    $this->load->view('template/header');
    $this->load->view('employee/search');
    $this->load->view('template/footer');
  }
}
