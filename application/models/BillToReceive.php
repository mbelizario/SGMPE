<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BillToReceive extends CI_Model
{
    public function __construct()
    {
        $this->id                           = null;
        $this->customer_id                  = null;
        $this->document_number              = null;
        $this->complementary_information    = null;
        $this->issue_date                   = null; //data de emissão
        $this->due_date                     = null; //data de vencimento
        $this->amount                       = null;
        $this->received_amount              = null;
        $this->receipt_day                  = null;
//        $this->bill_to_pay_type_id          = null;
        $this->load->database();
    }
    //Busca todas as contas a receber cadastradas
    function getAll()
    {

        return $this->db->query("SELECT  *, to_char(issue_date, 'DD/MM/YYYY') as issue_date, 
        to_char(due_date, 'DD/MM/YYYY') as due_date, to_char(receipt_day, 'DD/MM/YYYY') as receipt_day
         FROM bills_to_receive")->result();
    }
    //Busca uma conta a receber específica, com base em seu id
    function getOne()
    {

        return $this->db->query("SELECT  *, to_char(issue_date, 'DD/MM/YYYY') as issue_date, 
        to_char(due_date, 'DD/MM/YYYY') as due_date, to_char(receipt_day, 'DD/MM/YYYY') as receipt_day
         FROM bills_to_receive WHERE id = ".$this->id)->result();
    }

    //retorna os tipos de contas a receber
    function getTypes()
    {
        return $this->db->get('bill_to_pay_types')->result();
    }

    //cadastra uma nova conta a receber
    function add()
    {
        $data = array(
            'customer_id' => $this->customer_id,
            'document_number' => $this->document_number,
            'complementary_information' => $this->complementary_information,
            'issue_date' => $this->issue_date,
            'due_date' => $this->due_date,
            'amount' => $this->amount,
            'received_amount' => $this->received_amount,
            'receipt_day' => $this->receipt_day ? $this->receipt_day  : null
        );
        $this->db->insert('bills_to_receive', $data);

        return true;
    }
    //atualiza as informalções de uma conta já existente
    function update()
    {
        $data = array(
            'customer_id' => $this->customer_id,
            'document_number' => $this->document_number,
            'complementary_information' => $this->complementary_information,
            'issue_date' => $this->issue_date,
            'due_date' => $this->due_date,
            'amount' => $this->amount,
            'received_amount' => $this->received_amount,
            'receipt_day' => $this->receipt_day ? $this->receipt_day  : null,
//            'bill_to_pay_type_id' => $this->bill_to_pay_type_id
        );
        $this->db->where('id', $this->id);
        $this->db->update('bills_to_receive', $data);
        return true;
    }
    //apaga uma conta a receber
    function delete()
    {
        $this->db->where('id', $this->id);
        $this->db->delete('bills_to_receive');
        return true;
    }

}