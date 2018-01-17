<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

  public function __construct()
  {
    $this->firstName = NULL;
    $this->lastName = NULL;
    $this->email = NULL;
    $this->username = NULL;
    $this->pass = NULL;
    $this->firstName = NULL;
    $this->accessLevel = NULL;
    $this->load->database();
  }

  function getAll()
  {
    $this->load->database();
    return $this->db->get('users')->result();
  }

}
