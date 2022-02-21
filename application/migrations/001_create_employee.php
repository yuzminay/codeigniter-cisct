<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_employee extends CI_Migration
{

  public function up()
  {
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'first_name' => array(
        'type' => 'VARCHAR',
        'constraint' => '255',
      ),
      'last_name' => array(
        'type' => 'VARCHAR',
        'constraint' => '255',
      ),
      'job' => array(
        'type' => 'VARCHAR',
        'constraint' => '255',
      ),
      'hiredate' => array(
        'type' => 'DATE',
      ),
      'salary' => array(
        'type' => 'INT',
        'constraint' => 5,
      ),
    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('employee');
  }

  public function down()
  {
    $this->dbforge->drop_table('employee');
  }
}
