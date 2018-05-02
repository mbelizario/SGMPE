<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdv1 extends CI_Model
{
    public function __construct($bill_to_receive_id = null, $product_id = null, $quantity = null, $unit_price = null)
    {
        $this->bill_to_receive_id = $bill_to_receive_id;
        $this->product_id = $product_id;
        $this->quantity = $quantity;
        $this->unit_price = $unit_price;
        $this->load->database();
    }

    function saveBillProducts()
    {
        $data = array(
          'bill_to_receive_id' => $this->bill_to_receive_id,
          'product_id' => $this->product_id,
          'quantity' => $this->quantity,
          'unit_price' => $this->unit_price
        );
        $this->db->insert('bills_to_receive_x_products', $data);
        return true;
    }
}