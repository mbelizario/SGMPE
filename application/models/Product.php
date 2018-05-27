<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model
{
    public function __construct()
    {
        $this->id = NULL;
        $this->internal_code = NULL;
        $this->name = NULL;
        $this->cost = NULL;
        $this->price = NULL;
        $this->profit = NULL;
        $this->quantity = NULL;
        $this->product_category_id = NULL;
        $this->load->database();
    }
//    Traz todos os produtos cadastrados
    function getAll()
    {
        return $this->db->get('products')->result();
    }
//    Pega um produto específico com base em seu ID
    function getOne()
    {
        $this->db->where('id', $this->id);
        return $this->db->get('products')->result();
    }
    //busca os produtos de uma determinada categoria
    function getByCategory($category)
    {
        return $this->db->query("SELECT id, name FROM products WHERE product_category_id = $category")->result();
    }
    //    pega um produto especifico com base em seu codigo interno
    function getOneByInternalCode()
    {
        return $this->db->query("select id, internal_code, name, cost::money::numeric::float8, 
        price::money::numeric::float8,
        profit::money::numeric::float8 FROM products WHERE internal_code like '$this->internal_code'")->result();
    }

    function add()
    {
        $data = array(
            'internal_code' => $this->internal_code,
            'name' => $this->name,
            'cost' => $this->cost,
            'price' => $this->price,
            'profit' => $this->profit,
            'quantity' => $this->quantity,
            'product_category_id' => $this->product_category_id
        );
        $this->db->insert('products', $data);
        return true;
    }

    function update()
    {
        $data = array(
            'internal_code' => $this->internal_code,
            'name' => $this->name,
            'cost' => $this->cost,
            'price' => $this->price,
            'profit' => $this->profit,
            'quantity' => $this->quantity,
            'product_category_id' => $this->product_category_id
        );
        $this->db->where('id', $this->id);
        $this->db->update('products', $data);
        return true;
    }

    function delete()
    {
        $this->db->where('id', $this->id);
        $this->db->delete('products');
        return true;
    }

}