<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Model
{

  public function __construct()
  {
    $this->id = null;
    $this->company_name = NULL;
    $this->cnpj = NULL;
    $this->email = NULL;
    $this->address_zip_code = NULL;
    $this->address_street = NULL;
    $this->address_number = NULL;
    $this->address_comp = NULL;
    $this->address_neighborhood = NULL;
    $this->address_city = NULL;
    $this->address_state = NULL;
    $this->phone = NULL;
    $this->cell_phone = NULL;
    $this->load->database();
  }

//***************************************************
//retorna todos os fornecedores cadastrados no banco
//***************************************************
  function getAll()
  {
    $this->db->select('id,company_name, cnpj , email');
    return $this->db->get('suppliers')->result();
  }

//***************************************************
//retorna um fornecedor com base em seu id
//***************************************************
  function getOne()
  {
      $this->db->where('id', $this->id);
      return $this->db->get('suppliers')->result();
  }

//***************************************************
//Adiciona um fornecedor no banco de dados
//***************************************************
  function add()
  {
      $data = array(
          'company_name' => $this->company_name,
          'cnpj' => $this->cnpj,
          'email' => $this->email,
          'address_zip_code' => $this->address_zip_code,
          'address_street' => $this->address_street,
          'address_number' => $this->address_number,
          'address_comp' => $this->address_comp,
          'address_neighborhood' => $this->address_neighborhood,
          'address_city' => $this->address_city,
          'address_state' => $this->address_state,
          'phone' => $this->phone,
          'cell_phone' => $this->cell_phone

      );
      $this->db->insert('suppliers', $data);
      return true;
  }

//***************************************************
//Atualiza um fornecedor com base em seu id
//***************************************************
  function update()
  {

      $data = array(
          'company_name' => $this->company_name,
          'cnpj' => $this->cnpj,
          'email' => $this->email,
          'address_zip_code' => $this->address_zip_code,
          'address_street' => $this->address_street,
          'address_number' => $this->address_number,
          'address_comp' => $this->address_comp,
          'address_neighborhood' => $this->address_neighborhood,
          'address_city' => $this->address_city,
          'address_state' => $this->address_state,
          'phone' => $this->phone,
          'cell_phone' => $this->cell_phone
      );
      $this->db->where('id', $this->id);
      $this->db->update('suppliers', $data);
      return true;
  }
//*******************************************************
//Remove um fornecedor com base em seu id
//*******************************************************
    function delete()
    {
        $this->db->where('id',$this->id);
        $this->db->delete('suppliers');
    }

}
