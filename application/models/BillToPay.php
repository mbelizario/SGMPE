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
            'pay_day' => $this->pay_day ? $this->pay_day : null,
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
            'pay_day' => $this->pay_day ? $this->pay_day : null,
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
    //retorna a soma das contas a pagar por mês filtradas pelo tipo
    function sumBillsToPayTypesPerMonth($year, $type)
    {
        $result['jan'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-01-01'::DATE AND pay_day <= '$year-01-31'::DATE and 
        bill_to_pay_type_id = $type")->result();
        $result['feb'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-02-01'::DATE AND pay_day <= '$year-02-28'::DATE and 
        bill_to_pay_type_id = $type")->result();
        $result['mar'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-03-01'::DATE AND pay_day <= '$year-03-31'::DATE and 
        bill_to_pay_type_id = $type")->result();
        $result['apr'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-04-01'::DATE AND pay_day <= '$year-04-30'::DATE and 
        bill_to_pay_type_id = $type")->result();
        $result['may'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-05-01'::DATE AND pay_day <= '$year-05-31'::DATE and 
        bill_to_pay_type_id = $type")->result();
        $result['jun'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-06-01'::DATE AND pay_day <= '$year-06-30'::DATE and 
        bill_to_pay_type_id = $type")->result();
        $result['jul'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-07-01'::DATE AND pay_day <= '$year-07-31'::DATE and 
        bill_to_pay_type_id = $type")->result();
        $result['aug'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-08-01'::DATE AND pay_day <= '$year-08-31'::DATE and 
        bill_to_pay_type_id = $type")->result();
        $result['sep'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-09-01'::DATE AND pay_day <= '$year-09-30'::DATE and 
        bill_to_pay_type_id = $type")->result();
        $result['oct'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-10-01'::DATE AND pay_day <= '$year-10-31'::DATE and 
        bill_to_pay_type_id = $type")->result();
        $result['nov'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-11-01'::DATE AND pay_day <= '$year-11-30'::DATE and 
        bill_to_pay_type_id = $type")->result();
        $result['dec'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-12-01'::DATE AND pay_day <= '$year-12-31'::DATE and 
        bill_to_pay_type_id = $type")->result();
        return $result;
    }
    //retorna a soma das contas a pagar por mês
    function sumBillsToPayPerMonth($year)
    {
        $result['jan'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-01-01'::DATE AND pay_day <= '$year-01-31'::DATE")->result();
        $result['feb'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-02-01'::DATE AND pay_day <= '$year-02-28'::DATE")->result();
        $result['mar'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-03-01'::DATE AND pay_day <= '$year-03-31'::DATE")->result();
        $result['apr'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-04-01'::DATE AND pay_day <= '$year-04-30'::DATE ")->result();
        $result['may'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-05-01'::DATE AND pay_day <= '$year-05-31'::DATE")->result();
        $result['jun'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-06-01'::DATE AND pay_day <= '$year-06-30'::DATE")->result();
        $result['jul'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-07-01'::DATE AND pay_day <= '$year-07-31'::DATE")->result();
        $result['aug'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-08-01'::DATE AND pay_day <= '$year-08-31'::DATE")->result();
        $result['sep'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-09-01'::DATE AND pay_day <= '$year-09-30'::DATE")->result();
        $result['oct'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-10-01'::DATE AND pay_day <= '$year-10-31'::DATE")->result();
        $result['nov'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-11-01'::DATE AND pay_day <= '$year-11-30'::DATE")->result();
        $result['dec'] = $this->db->query("SELECT sum(paid_amount) FROM bills_to_pay 
        WHERE pay_day >= '$year-12-01'::DATE AND pay_day <= '$year-12-31'::DATE")->result();
        return $result;
    }

}