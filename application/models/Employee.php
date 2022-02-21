<?php

class Employee extends CI_Model
{
  public function createData($data)
  {
    $query = $this->db->insert('employee', $data);
    return $query;
  }
}
