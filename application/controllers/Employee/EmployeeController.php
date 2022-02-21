<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Employee');
    $this->load->helper("url");
    $this->load->helper('form');
  }


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
      'id' => '',
      'first_name'  => $first_name,
      'last_name' => $last_name,
      'job'  => $job,
      'hiredate'  => $hiredate,
      'salary'  => $salary,
    );


    $success = $this->Employee->createData($data);

    echo json_encode($success);
  }

  public function search()
  {
    $this->load->view('template/header');
    $this->load->view('employee/search');
    $this->load->view('template/footer');
  }

  public function lookup()
  {

    // process posted form data
    $keyword = $this->input->post('keyup');

    $data['response'] = 'false'; //Set default response
    $query = $this->Employee->lookup($keyword); //Search DB
    if (!empty($query)) {
      $data['response'] = 'true'; //Set response
      $data['message'] = array(); //Create array
      foreach ($query as $row) {
        $data['message'][] = array(
          'id' => $row->id,
          'first_name' => $row->first_name,
          'last_name' => $row->last_name,
          'job' => $row->job,
          'salary' => $row->salary,
          'hiredate' => $row->hiredate,
          ''
        );  //Add a row to array
      }
    }
    if ($keyword == "" && $keyword = " ") {
      $data['response'] = 'false';
      $data['message'] = array(); //Create array
    }

    if ('IS_AJAX') {
      echo json_encode($data); //echo json string if ajax request

    } else {
      $this->load->view('template/header');
      $this->load->view('employee/search', $data); //Load html view of search results
      $this->load->view('template/footer');
    }
  }
}
