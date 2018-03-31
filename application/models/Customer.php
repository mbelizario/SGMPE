<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Model
{

    public function __construct()
    {
        $this->id = null;
        $this->person_name = NULL;
        $this->cpf = NULL;
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
//retorna todos os clientes cadastrados no banco
//***************************************************
    function getAll()
    {
        $this->db->select('id,person_name, cpf , email');
        return $this->db->get('customers')->result();
    }

//***************************************************
//retorna um cliente com base em seu id
//***************************************************
    function getOne()
    {
        $this->db->where('id', $this->id);
        return $this->db->get('customers')->result();
    }

//***************************************************
//Adiciona um cliente no banco de dados
//***************************************************
    function add()
    {
        $data = array(
            'person_name' => $this->person_name,
            'cpf' => $this->cpf,
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
        $this->db->insert('customers', $data);
        return true;
    }

//***************************************************
//Atualiza um cliente com base em seu id
//***************************************************
    function update()
    {

        $data = array(
            'person_name' => $this->person_name,
            'cpf' => $this->cpf,
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
        $this->db->update('customers', $data);
        return true;
    }
//*******************************************************
//Remove um cliente com base em seu id
//*******************************************************
    function delete()
    {
        $this->db->where('id',$this->id);
        $this->db->delete('customers');
    }

}
