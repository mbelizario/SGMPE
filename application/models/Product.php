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

    function getAll()
    {
        return $this->db->get('products')->result();
    }

    function getOne()
    {
        $this->db->where('id', $this->id);
        return $this->db->get('products')->result();
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