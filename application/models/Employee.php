<?php

class Employee extends CI_Model
{
  public function createData($data)
  {
    $this->load->database(); //wtf
    $query = $this->db->insert('employee', $data);

    return $query;
  }
}
