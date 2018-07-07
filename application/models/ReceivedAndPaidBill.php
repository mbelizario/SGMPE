<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReceivedAndPaidBill extends CI_Model
{
    function received($beginDate, $endDate)
    {
        return $this->db->query("SELECT *, to_char(issue_date, 'DD/MM/YYYY') as issue_date, 
        to_char(due_date, 'DD/MM/YYYY') as due_date, to_char(receipt_day, 'DD/MM/YYYY') as receipt_day FROM bills_to_receive WHERE 
        receipt_day >= '$beginDate' AND receipt_day <= '$endDate'")->result();
    }

    function paid($beginDate, $endDate)
    {
        return $this->db->query("SELECT  bills_to_pay.*, suppliers.company_name, 
        to_char(issue_date, 'DD/MM/YYYY') as issue_date, 
        to_char(due_date, 'DD/MM/YYYY') as due_date, to_char(pay_day, 'DD/MM/YYYY') as pay_day
         FROM bills_to_pay 
         JOIN suppliers ON bills_to_pay.supplier_id = suppliers.id
         WHERE pay_day >= '$beginDate' AND pay_day <= '$endDate'")->result();
    }
}