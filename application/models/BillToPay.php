<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BillToPay extends CI_Model
{
    public function __construct()
    {
        $this->id                           = null;
        $this->supplier_id                  = null;
        $this->document_number              = null;
        $this->complementary_information    = null;
        $this->issue_date                   = null; //data de emissão
        $this->due_date                     = null; //data de vencimento
        $this->amount                       = null;
        $this->paid_amount                  = null;
        $this->pay_day                      = null;
        $this->bill_to_pay_type_id          = null;
        $this->load->database();
    }
    //Busca todas as contas a pagar cadastradas
    function getAll()
    {
//        return $this->db->get('bills_to_pay')->result();
        return $this->db->query("SELECT  *, to_char(issue_date, 'DD/MM/YYYY') as issue_date, 
        to_char(due_date, 'DD/MM/YYYY') as due_date, to_char(pay_day, 'DD/MM/YYYY') as pay_day
         FROM bills_to_pay")->result();
    }
    //Busca uma conta a pagar específica, com base em seu id
    function getOne()
    {
//        $this->db->where('id', $this->id);
//        return $this->db->get('bills_to_pay')->result();
        return $this->db->query("SELECT  *, to_char(issue_date, 'DD/MM/YYYY') as issue_date, 
        to_char(due_date, 'DD/MM/YYYY') as due_date, to_char(pay_day, 'DD/MM/YYYY') as pay_day
         FROM bills_to_pay WHERE id = ".$this->id)->result();
    }

    //retorna os tipos de contas a pagar
    function getTypes()
    {
        return $this->db->get('bill_to_pay_types')->result();
    }

    //cadastra uma nova conta a pagar
    function add()
    {
        $data = array(
            'supplier_id' => $this->supplier_id,
            'document_number' => $this->document_number,
            'complementary_information' => $this->complementary_information,
            'issue_date' => $this->issue_date,
            'due_date' => $this->due_date,
            'amount' => $this->amount,
            'paid_amount' => $this->amount,
            'pay_day' => $this->pay_day,
            'bill_to_pay_type_id' => $this->bill_to_pay_type_id
        );
        $this->db->insert('bills_to_pay', $data);
        return true;
    }
    //atualiza as informalções de uma conta já existente
    function update()
    {
        $data = array(
            'supplier_id' => $this->supplier_id,
            'document_number' => $this->document_number,
            'complementary_information' => $this->complementary_information,
            'issue_date' => $this->issue_date,
            'due_date' => $this->due_date,
            'amount' => $this->amount,
            'paid_amount' => $this->paid_amount,
            'pay_day' => $this->pay_day,
            'bill_to_pay_type_id' => $this->bill_to_pay_type_id
        );
        $this->db->where('id', $this->id);
        $this->db->update('bills_to_pay', $data);
        return true;
    }
    //apaga uma conta a pagar
    function delete()
    {
        $this->db->where('id', $this->id);
        $this->db->delete('bills_to_pay');
        return true;
    }

}