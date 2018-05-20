<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BillToReceive extends CI_Model
{
    public function __construct($id = null, $customer_id = null, $document_numer = null,
                                $complementary_information = null, $issue_date = null, $due_date = null,
                                $amount = null, $received_amount = null, $receipt_day = null, $payment_type_id = null)
    {
        $this->id                           = $id;
        $this->customer_id                  = $customer_id;
        $this->document_number              = $document_numer;
        $this->complementary_information    = $complementary_information;
        $this->issue_date                   = $issue_date; //data de emissão
        $this->due_date                     = $due_date; //data de vencimento
        $this->amount                       = $amount;
        $this->received_amount              = $received_amount;
        $this->receipt_day                  = $receipt_day;
        $this->payment_type_id              = $payment_type_id;
        $this->load->database();
    }
    //Busca todas as contas a receber cadastradas
    function getAll()
    {

        return $this->db->query("SELECT  *, to_char(issue_date, 'DD/MM/YYYY') as issue_date, 
        to_char(due_date, 'DD/MM/YYYY') as due_date, to_char(receipt_day, 'DD/MM/YYYY') as receipt_day
         FROM bills_to_receive WHERE receipt_day isnull")->result();
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
            'receipt_day' => $this->receipt_day ? $this->receipt_day  : null,
            'payment_type_id' => $this->payment_type_id
        );
         $this->db->insert('bills_to_receive', $data);
        return $this->db->insert_id();

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

    function sumBillsToReceivePerMonth($year, $cashFlowType)
    {
        if($cashFlowType == 1) // fluxo de caixa planejado
            $field = "due_date";
        elseif($cashFlowType == 2) //fluxo de caixa realizado
            $field = "receipt_day";
        $result['jan'] = $this->db->query("SELECT sum(received_amount) FROM bills_to_receive 
        WHERE $field >= '$year-01-01'::DATE AND $field <= '$year-01-31'::DATE")->result();
        $result['feb'] = $this->db->query("SELECT sum(received_amount) FROM bills_to_receive 
        WHERE $field >= '$year-02-01'::DATE AND $field <= '$year-02-28'::DATE")->result();
        $result['mar'] = $this->db->query("SELECT sum(received_amount) FROM bills_to_receive 
        WHERE $field >= '$year-03-01'::DATE AND $field <= '$year-03-31'::DATE")->result();
        $result['apr'] = $this->db->query("SELECT sum(received_amount) FROM bills_to_receive 
        WHERE $field >= '$year-04-01'::DATE AND $field <= '$year-04-30'::DATE ")->result();
        $result['may'] = $this->db->query("SELECT sum(received_amount) FROM bills_to_receive 
        WHERE $field >= '$year-05-01'::DATE AND $field <= '$year-05-31'::DATE")->result();
        $result['jun'] = $this->db->query("SELECT sum(received_amount) FROM bills_to_receive 
        WHERE $field >= '$year-06-01'::DATE AND $field <= '$year-06-30'::DATE")->result();
        $result['jul'] = $this->db->query("SELECT sum(received_amount) FROM bills_to_receive 
        WHERE $field >= '$year-07-01'::DATE AND $field <= '$year-07-31'::DATE")->result();
        $result['aug'] = $this->db->query("SELECT sum(received_amount) FROM bills_to_receive 
        WHERE $field >= '$year-08-01'::DATE AND $field <= '$year-08-31'::DATE")->result();
        $result['sep'] = $this->db->query("SELECT sum(received_amount) FROM bills_to_receive 
        WHERE $field >= '$year-09-01'::DATE AND $field <= '$year-09-30'::DATE")->result();
        $result['oct'] = $this->db->query("SELECT sum(received_amount) FROM bills_to_receive 
        WHERE $field >= '$year-10-01'::DATE AND $field <= '$year-10-31'::DATE")->result();
        $result['nov'] = $this->db->query("SELECT sum(received_amount) FROM bills_to_receive 
        WHERE $field >= '$year-11-01'::DATE AND $field <= '$year-11-30'::DATE")->result();
        $result['dec'] = $this->db->query("SELECT sum(received_amount) FROM bills_to_receive 
        WHERE $field >= '$year-12-01'::DATE AND $field <= '$year-12-31'::DATE")->result();
        return $result;
    }

}