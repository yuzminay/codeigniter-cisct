<?php

class Employee extends CI_Model
{
  public function createData($data)
  {
    $this->load->database(); //wtf
    $query = $this->db->insert('employee', $data);

    return $query;
  }

  public function getEmployees()
  {
    $this->load->database(); //wtf

    $this->db->from('employee');
    $this->db->order_by("id", "desc");
    $query = $this->db->get();

    // $query = $this->db->get('employee');
    $res   = $query->result();

    return $res;
  }
}
