<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductCategory extends CI_Model
{
    public function __construct()
    {
        $this->id             = null;
        $this->name           = null;
        $this->description    = null;
        $this->load->database();
    }
    /*
     * Retorna todas as categorias de produtos cadastradas
     */
    function getAll()
    {
        return $this->db->get('product_categories')->result();
    }
    /*Retorna uma categoria específica com base em seu id*/
    function getOne()
    {
        $this->db->where('id', $this->id);
        return $this->db->get('product_categories')->result();
    }
    /*Adiciona uma nova categoria*/
    function add()
    {
        $data = array (
            'name' => $this->name,
            'description' => $this->description
        );
        $this->db->insert('product_categories', $data);
        return true;
    }
    /*Atualiza uma categoria já existente*/
    function update()
    {
        $data = array(
          'name' => $this->name,
          'description' => $this->description
        );
        $this->db->where('id', $this->id);
        $this->db->update('product_categories', $data);
        return true;
    }
    /*Apaga uma categoria*/
    function delete()
    {
        $this->db->where('id', $this->id);
        $this->db->delete('product_categories');
        return true;
    }

}