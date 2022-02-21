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

  function lookup($keyword)
  {
    $this->load->database(); //wtf

    $this->db->select('*')->from('employee');

    $this->db->like('first_name', $keyword, 'after');
    $this->db->or_like('last_name', $keyword);
    $this->db->or_like('salary', $keyword);
    $this->db->or_like('job', $keyword);

    $query = $this->db->get();

    return $query->result();
  }
}
