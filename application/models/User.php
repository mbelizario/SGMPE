<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

  public function __construct()
  {
    $this->id = NULL;
    $this->firstname = NULL;
    $this->lastname = NULL;
    $this->email = NULL;
    $this->username = NULL;
    $this->pass = NULL;
    $this->confirmPass = NULL;
    $this->accessLevel = NULL;
    $this->load->database();
  }
  //************************************************
  //retorna todos os usuários cadastrados no banco
  //************************************************
  function getAll()
  {
    return $this->db->get('users')->result();
  }
  //***********************************************************************
  //retorna firstname, lastname, email e username de um usuário específico
  // com base em seu id
  //***********************************************************************
  function getOne()
  {
    $this->db->select('firstname, lastname, email, username');
    $this->db->where('id', $this->id);
    return $this->db->get('users')->result();
  }
  //************************************************
  //Insere um novo usuário no banco.
  //************************************************
  function add()
  {
    $data = array(
        'firstname' => $this->firstname,
        'lastname' => $this->lastname,
        'email' => $this->email,
        'username' => $this->username,
        'pass' => $this->pass,
        'accesslevel' => $this->accessLevel
    );
    $this->db->insert('users', $data);
    return true;
  }
  //***************************************************
  //Atualiza um usuário específico com base em seu id
  //***************************************************
  function update()
  {
    $data = array(
        'firstname' => $this->firstname,
        'lastname' => $this->lastname,
        'email' => $this->email,
        'username' => $this->username,
    );
    $this->db->where('id', $this->id);
    $this->db->update('users',$data);
    return true;
  }
  //*******************************************************
  //Verifica se um nome de usuário está disponivel ou não,
  //se estiver retorna true, se nao retorna false
  //*******************************************************
  function usernameIsUnique()
  {
    if($this->id)//no caso de ser um update ignora o id da pessoa a ser atualizada
    {
        $result = $this->db->query("select count(*) from users where
         username = '$this->username' AND id <> $this->id;")->result();
    }
    else//insert
    {
        $result = $this->db->query("select count(*) from users where
        username = '$this->username';")->result();
    }
    //descobri esse indice usando a error_log
    if($result[0]->count == 0)
      return true;
    else
      return false;
  }
  //*******************************************************
  //Remove um usuário com base em seu id
  //*******************************************************
  function delete()
  {
    $this->db->where('id',$this->id);
    $this->db->delete('users');
  }

}
