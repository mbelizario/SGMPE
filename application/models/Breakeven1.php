<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Breakeven1 extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
//    retorna os gastos fixos no mês atual
    function sumBillsToPayFixCurrentMonth($begin_date, $end_date)
    {
        return $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE bill_to_pay_type_id = 1 AND pay_day BETWEEN '$begin_date' AND '$end_date'")->result();
    }
    // quantidade vendida de um determinado produto
    function soldQuantity($product_id, $begin_date, $end_date)
    {
        return $this->db->query("SELECT sum(quantity) FROM bills_to_receive_x_products AS brp
                                JOIN bills_to_receive AS br ON br.id = brp.bill_to_receive_id
                                WHERE brp.product_id = $product_id 
                                AND br.receipt_day BETWEEN '$begin_date' AND '$end_date'")->result();
    }
    // valor em R$ de vendas de um determinado produto em um período
    function soldValue($product_id, $begin_date, $end_date)
    {
        return $this->db->query("SELECT sum(quantity * unit_price) FROM bills_to_receive_x_products AS brp
                                JOIN bills_to_receive AS br ON br.id = brp.bill_to_receive_id
                                WHERE brp.product_id = $product_id 
                                AND br.receipt_day BETWEEN '$begin_date' AND '$end_date'")->result();
    }
    //total de vendas em R$ em um período
    function soldTotalValue($begin_date, $end_date)
    {
        return $this->db->query("SELECT sum(quantity * unit_price) FROM bills_to_receive_x_products AS brp
                                JOIN bills_to_receive AS br ON br.id = brp.bill_to_receive_id
                                WHERE  br.receipt_day BETWEEN '$begin_date' AND '$end_date'")->result();
    }
}