<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerDashboard1 extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    //retorna as vendas nos ultimos 6 meses agrupadas de acordo com o mes/ano
    function salesInLastSixMonths()
    {
        return $this->db->query("select to_char(receipt_day,'Mon') as mon,
                          extract(year from receipt_day) as yyyy,
                          sum(received_amount)::money::numeric::float8       
	                      from bills_to_receive
	                      WHERE receipt_day >= current_date - interval '6 months'
	                      group by 1,2 ORDER BY 1")->result();
    }
    //retorna a soma das contas a pagar e a receber do mês atual
    function billsToReceiveVsBillsToPay()
    {

        //bills to pay
        $result['bp'] = $this->db->query("SELECT sum(paid_amount)::money::numeric::float8
                                      FROM bills_to_pay 
                                      WHERE extract(month from CURRENT_DATE) = extract(month from pay_day)")->result();

        $result['br'] = $this->db->query("SELECT sum(received_amount)::money::numeric::float8
                                  FROM bills_to_receive
                                  WHERE extract(month from CURRENT_DATE) = extract(month from receipt_day)")->result();

        return $result;
    }

    //Retorna as contas a pagar com vencimento nos próximos 7 dias e que ainda não foram pagas
    function BillsToPayNextSevenDays()
    {
        return $this->db->query("SELECT b.*, to_char(due_date, 'DD/MM/YYYY') as due_date, s.company_name 
                              FROM bills_to_pay as b
                              JOIN suppliers as s ON s.id = b.supplier_id
                              WHERE current_date <= due_date AND 
                              due_date <= CURRENT_DATE + interval  '7 days' AND pay_day is null")->result();
    }

    function overdueBillsToPay()
    {
        return $this->db->query("SELECT b.*, to_char(due_date, 'DD/MM/YYYY') as due_date, s.company_name 
                                  FROM bills_to_pay as b
                                  JOIN suppliers as s ON s.id = b.supplier_id
                                  WHERE due_date < CURRENT_DATE AND pay_day is null")->result();
    }

}