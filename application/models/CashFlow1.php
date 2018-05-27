<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CashFlow1 extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    //calcular disponibilidade acumulada
    //além de retornar a disponibilidade acumulada (total a pagar - total a receber)
    //retorna um flag true quando o valor é positivo e false quando negativo
    function calculateCumulativeAvailability($year, $cashFlowType)
    {
        if($cashFlowType == 1) //fluxo de caixa planejado
            $field = "due_date";
        elseif($cashFlowType == 2) //fluxo de caixa realizado
            $field = "pay_day";
        
        $result['jan'] = $this->db->query("SELECT bills.bills_to_receive - bills.bills_to_pay AS result ,
        CASE WHEN bills.bills_to_receive - bills.bills_to_pay >= CAST(0 AS money)  THEN true
        ELSE false
        end
        FROM (SELECT
		        (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                WHERE $field >= '$year-01-01'::DATE AND $field <= '$year-01-31'::DATE) AS bills_to_pay,

		        (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
		        WHERE receipt_day >= '$year-01-01'::DATE AND receipt_day <= '$year-01-31'::DATE) AS bills_to_receive
        ) AS bills")->result();
        $result['feb'] = $this->db->query("SELECT bills.bills_to_receive - bills.bills_to_pay AS result ,
        CASE WHEN bills.bills_to_receive - bills.bills_to_pay >= CAST(0 AS money)  THEN true
        ELSE false
        end
        FROM (SELECT
		        (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                WHERE $field >= '$year-02-01'::DATE AND $field <= '$year-02-28'::DATE) AS bills_to_pay,

		        (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
		        WHERE receipt_day >= '$year-02-01'::DATE AND receipt_day <= '$year-02-28'::DATE) AS bills_to_receive
        ) AS bills")->result();
        $result['mar'] = $this->db->query("SELECT bills.bills_to_receive - bills.bills_to_pay AS result ,
        CASE WHEN bills.bills_to_receive - bills.bills_to_pay >= CAST(0 AS money)  THEN true
        ELSE false
        end
        FROM (SELECT
		        (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                WHERE $field >= '$year-03-01'::DATE AND $field <= '$year-03-31'::DATE) AS bills_to_pay,

		        (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
		        WHERE receipt_day >= '$year-03-01'::DATE AND receipt_day <= '$year-03-31'::DATE) AS bills_to_receive
        ) AS bills")->result();
        $result['apr'] = $this->db->query("SELECT bills.bills_to_receive - bills.bills_to_pay AS result ,
        CASE WHEN bills.bills_to_receive - bills.bills_to_pay >= CAST(0 AS money)  THEN true
        ELSE false
        end
        FROM (SELECT
		        (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                WHERE $field >= '$year-04-01'::DATE AND $field <= '$year-04-30'::DATE) AS bills_to_pay,

		        (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
		        WHERE receipt_day >= '$year-04-01'::DATE AND receipt_day <= '$year-04-30'::DATE) AS bills_to_receive
        ) AS bills")->result();
        $result['may'] = $this->db->query("SELECT bills.bills_to_receive - bills.bills_to_pay AS result ,
        CASE WHEN bills.bills_to_receive - bills.bills_to_pay >= CAST(0 AS money)  THEN true
        ELSE false
        end
        FROM (SELECT
		        (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                WHERE $field >= '$year-05-01'::DATE AND $field <= '$year-05-31'::DATE) AS bills_to_pay,

		        (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
		        WHERE receipt_day >= '$year-05-01'::DATE AND receipt_day <= '$year-05-31'::DATE) AS bills_to_receive
        ) AS bills")->result();
        $result['jun'] = $this->db->query("SELECT bills.bills_to_receive - bills.bills_to_pay AS result ,
        CASE WHEN bills.bills_to_receive - bills.bills_to_pay >= CAST(0 AS money)  THEN true
        ELSE false
        end
        FROM (SELECT
		        (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                WHERE $field >= '$year-06-01'::DATE AND $field <= '$year-06-30'::DATE) AS bills_to_pay,

		        (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
		        WHERE receipt_day >= '$year-06-01'::DATE AND receipt_day <= '$year-06-30'::DATE) AS bills_to_receive
        ) AS bills")->result();
        $result['jul'] = $this->db->query("SELECT bills.bills_to_receive - bills.bills_to_pay AS result ,
        CASE WHEN bills.bills_to_receive - bills.bills_to_pay >= CAST(0 AS money)  THEN true
        ELSE false
        end
        FROM (SELECT
		        (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                WHERE $field >= '$year-07-01'::DATE AND $field <= '$year-07-31'::DATE) AS bills_to_pay,

		        (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
		        WHERE receipt_day >= '$year-07-01'::DATE AND receipt_day <= '$year-07-31'::DATE) AS bills_to_receive
        ) AS bills")->result();
        $result['aug'] = $this->db->query("SELECT bills.bills_to_receive - bills.bills_to_pay AS result ,
        CASE WHEN bills.bills_to_receive - bills.bills_to_pay >= CAST(0 AS money)  THEN true
        ELSE false
        end
        FROM (SELECT
		        (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                WHERE $field >= '$year-08-01'::DATE AND $field <= '$year-08-31'::DATE) AS bills_to_pay,

		        (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
		        WHERE receipt_day >= '$year-08-01'::DATE AND receipt_day <= '$year-08-31'::DATE) AS bills_to_receive
        ) AS bills")->result();
        $result['sep'] = $this->db->query("SELECT bills.bills_to_receive - bills.bills_to_pay AS result ,
        CASE WHEN bills.bills_to_receive - bills.bills_to_pay >= CAST(0 AS money)  THEN true
        ELSE false
        end
        FROM (SELECT
		        (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                WHERE $field >= '$year-09-01'::DATE AND $field <= '$year-09-30'::DATE) AS bills_to_pay,

		        (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
		        WHERE receipt_day >= '$year-09-01'::DATE AND receipt_day <= '$year-09-30'::DATE) AS bills_to_receive
        ) AS bills")->result();
        $result['oct'] = $this->db->query("SELECT bills.bills_to_receive - bills.bills_to_pay AS result ,
        CASE WHEN bills.bills_to_receive - bills.bills_to_pay >= CAST(0 AS money)  THEN true
        ELSE false
        end
        FROM (SELECT
		        (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                WHERE $field >= '$year-10-01'::DATE AND $field <= '$year-10-31'::DATE) AS bills_to_pay,

		        (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
		        WHERE receipt_day >= '$year-10-01'::DATE AND receipt_day <= '$year-10-31'::DATE) AS bills_to_receive
        ) AS bills")->result();
        $result['nov'] = $this->db->query("SELECT bills.bills_to_receive - bills.bills_to_pay AS result ,
        CASE WHEN bills.bills_to_receive - bills.bills_to_pay >= CAST(0 AS money)  THEN true
        ELSE false
        end
        FROM (SELECT
		        (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                WHERE $field >= '$year-11-01'::DATE AND $field <= '$year-11-30'::DATE) AS bills_to_pay,

		        (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
		        WHERE receipt_day >= '$year-11-01'::DATE AND receipt_day <= '$year-11-30'::DATE) AS bills_to_receive
        ) AS bills")->result();
        $result['dec'] = $this->db->query("SELECT bills.bills_to_receive - bills.bills_to_pay AS result ,
        CASE WHEN bills.bills_to_receive - bills.bills_to_pay >= CAST(0 AS money)  THEN true
        ELSE false
        end
        FROM (SELECT
		        (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                WHERE $field >= '$year-12-01'::DATE AND $field <= '$year-12-31'::DATE) AS bills_to_pay,

		        (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
		        WHERE receipt_day >= '$year-12-01'::DATE AND receipt_day <= '$year-12-31'::DATE) AS bills_to_receive
        ) AS bills")->result();

        return $result;
    }

    function getDesiredValues( $year)
    {
        $result['jan'] = $this->db->query("SELECT value FROM desired_values WHERE month = 1 AND year = $year")->result();
        $result['feb'] = $this->db->query("SELECT value FROM desired_values WHERE month = 2 AND year = $year")->result();
        $result['mar'] = $this->db->query("SELECT value FROM desired_values WHERE month = 3 AND year = $year")->result();
        $result['apr'] = $this->db->query("SELECT value FROM desired_values WHERE month = 4 AND year = $year")->result();
        $result['may'] = $this->db->query("SELECT value FROM desired_values WHERE month = 5 AND year = $year")->result();
        $result['jun'] = $this->db->query("SELECT value FROM desired_values WHERE month = 6 AND year = $year")->result();
        $result['jul'] = $this->db->query("SELECT value FROM desired_values WHERE month = 7 AND year = $year")->result();
        $result['aug'] = $this->db->query("SELECT value FROM desired_values WHERE month = 8 AND year = $year")->result();
        $result['sep'] = $this->db->query("SELECT value FROM desired_values WHERE month = 9 AND year = $year")->result();
        $result['oct'] = $this->db->query("SELECT value FROM desired_values WHERE month = 10 AND year = $year")->result();
        $result['nov'] = $this->db->query("SELECT value FROM desired_values WHERE month = 11 AND year = $year")->result();
        $result['dec'] = $this->db->query("SELECT value FROM desired_values WHERE month = 12 AND year = $year")->result();

        return $result;
    }
    //salva os níveis desejados para cada mes no fluxo de caixa
    function saveDesiredValue($month, $year, $value)
    {
        //faz um select para ver se já existe dados para um determinado mes/ano no banco
        $result = $this->db->query("SELECT value FROM desired_values WHERE month = $month AND year = $year")->result();
        //se já tiver valor para o ano e mes em questão é update
        if(isset($result[0]->value))
        {
            $data = array(
                "value" => $value
            );
            $this->db->where('month', $month);
            $this->db->where('year', $year);
            $this->db->update('desired_values', $data);
            return true;
        }
        else //senão é um insert
        {
            $data = array(
                "month" => $month,
                "year"  => $year,
                "value" => $value
            );
            $this->db->insert("desired_values", $data);
            return true;
        }

    }

    function calculateFinalResult($year, $cashFlowType)
    {
        if($cashFlowType == 1)//fluxo de caixa planejado
        {
            $field = "due_date";
            $field2 = "due_date";
        } 
        elseif($cashFlowType == 2) //fluxo de caixa realizado
        {
            $field = "pay_day";
            $field2 = "receipt_day";
        }
            
        
        $result['jan'] = $this->db->query("SELECT CASE WHEN cumulative_availability > desired_value then 
        cumulative_availability - desired_value 
	    ELSE desired_value - cumulative_availability END AS final_result, 
	    CASE WHEN cumulative_availability  > desired_value then true else false end  
	    FROM (
	          SELECT 
	            ( SELECT value FROM desired_values WHERE month = 1 AND year = $year) AS desired_value, 

                (SELECT bills.bills_to_receive - bills.bills_to_pay AS cumulative_availability 
                  FROM 
                  (SELECT
		            (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                      WHERE $field >= '$year-01-01'::DATE AND $field <= '$year-01-30'::DATE) AS bills_to_pay,

		            (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
                  WHERE $field2 >= '$year-01-01'::DATE AND $field2 <= '$year-01-30'::DATE) AS bills_to_receive
                  )AS bills)) as final")->result();

        $result['feb'] = $this->db->query("SELECT CASE WHEN cumulative_availability > desired_value then 
        cumulative_availability - desired_value 
	    ELSE desired_value - cumulative_availability END AS final_result, 
	    CASE WHEN cumulative_availability  > desired_value then true else false end  
	    FROM (
	          SELECT 
	            ( SELECT value FROM desired_values WHERE month = 2 AND year = $year) AS desired_value, 

                (SELECT bills.bills_to_receive - bills.bills_to_pay AS cumulative_availability 
                  FROM 
                  (SELECT
		            (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                      WHERE $field >= '$year-02-01'::DATE AND $field <= '$year-01-28'::DATE) AS bills_to_pay,

		            (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
                  WHERE $field2 >= '$year-02-01'::DATE AND $field2 <= '$year-01-28'::DATE) AS bills_to_receive
                  )AS bills)) as final")->result();

        $result['mar'] = $this->db->query("SELECT CASE WHEN cumulative_availability > desired_value then 
        cumulative_availability - desired_value 
	    ELSE desired_value - cumulative_availability END AS final_result, 
	    CASE WHEN cumulative_availability  > desired_value then true else false end  
	    FROM (
	          SELECT 
	            ( SELECT value FROM desired_values WHERE month = 3 AND year = $year) AS desired_value, 

                (SELECT bills.bills_to_receive - bills.bills_to_pay AS cumulative_availability 
                  FROM 
                  (SELECT
		            (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                      WHERE $field >= '$year-03-01'::DATE AND $field <= '$year-03-31'::DATE) AS bills_to_pay,

		            (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
                  WHERE $field2 >= '$year-03-01'::DATE AND $field2 <= '$year-03-31'::DATE) AS bills_to_receive
                  )AS bills)) as final")->result();

        $result['apr'] = $this->db->query("SELECT CASE WHEN cumulative_availability > desired_value then 
        cumulative_availability - desired_value 
	    ELSE desired_value - cumulative_availability END AS final_result, 
	    CASE WHEN cumulative_availability  > desired_value then true else false end  
	    FROM (
	          SELECT 
	            ( SELECT value FROM desired_values WHERE month = 4 AND year = $year) AS desired_value, 

                (SELECT bills.bills_to_receive - bills.bills_to_pay AS cumulative_availability 
                  FROM 
                  (SELECT
		            (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                      WHERE $field >= '$year-04-01'::DATE AND $field <= '$year-04-30'::DATE) AS bills_to_pay,

		            (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
                  WHERE $field2 >= '$year-04-01'::DATE AND $field2 <= '$year-04-30'::DATE) AS bills_to_receive
                  )AS bills)) as final")->result();

        $result['may'] = $this->db->query("SELECT CASE WHEN cumulative_availability > desired_value then 
        cumulative_availability - desired_value 
	    ELSE desired_value - cumulative_availability END AS final_result, 
	    CASE WHEN cumulative_availability  > desired_value then true else false end  
	    FROM (
	          SELECT 
	            ( SELECT value FROM desired_values WHERE month = 5 AND year = $year) AS desired_value, 

                (SELECT bills.bills_to_receive - bills.bills_to_pay AS cumulative_availability 
                  FROM 
                  (SELECT
		            (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                      WHERE $field >= '$year-05-01'::DATE AND $field <= '$year-05-31'::DATE) AS bills_to_pay,

		            (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
                  WHERE $field2 >= '$year-05-01'::DATE AND $field2 <= '$year-05-31'::DATE) AS bills_to_receive
                  )AS bills)) as final")->result();

        $result['jun'] = $this->db->query("SELECT CASE WHEN cumulative_availability > desired_value then 
        cumulative_availability - desired_value 
	    ELSE desired_value - cumulative_availability END AS final_result, 
	    CASE WHEN cumulative_availability  > desired_value then true else false end  
	    FROM (
	          SELECT 
	            ( SELECT value FROM desired_values WHERE month = 6 AND year = $year) AS desired_value, 

                (SELECT bills.bills_to_receive - bills.bills_to_pay AS cumulative_availability 
                  FROM 
                  (SELECT
		            (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                      WHERE $field >= '$year-06-01'::DATE AND $field <= '$year-06-30'::DATE) AS bills_to_pay,

		            (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
                  WHERE $field2 >= '$year-06-01'::DATE AND $field2 <= '$year-06-30'::DATE) AS bills_to_receive
                  )AS bills)) as final")->result();

        $result['jul'] = $this->db->query("SELECT CASE WHEN cumulative_availability > desired_value then 
        cumulative_availability - desired_value 
	    ELSE desired_value - cumulative_availability END AS final_result, 
	    CASE WHEN cumulative_availability  > desired_value then true else false end  
	    FROM (
	          SELECT 
	            ( SELECT value FROM desired_values WHERE month = 7 AND year = $year) AS desired_value, 

                (SELECT bills.bills_to_receive - bills.bills_to_pay AS cumulative_availability 
                  FROM 
                  (SELECT
		            (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                      WHERE $field >= '$year-07-01'::DATE AND $field <= '$year-07-31'::DATE) AS bills_to_pay,

		            (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
                  WHERE $field2 >= '$year-07-01'::DATE AND $field2 <= '$year-07-31'::DATE) AS bills_to_receive
                  )AS bills)) as final")->result();

        $result['aug'] = $this->db->query("SELECT CASE WHEN cumulative_availability > desired_value then 
        cumulative_availability - desired_value 
	    ELSE desired_value - cumulative_availability END AS final_result, 
	    CASE WHEN cumulative_availability  > desired_value then true else false end  
	    FROM (
	          SELECT 
	            ( SELECT value FROM desired_values WHERE month = 8 AND year = $year) AS desired_value, 

                (SELECT bills.bills_to_receive - bills.bills_to_pay AS cumulative_availability 
                  FROM 
                  (SELECT
		            (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                      WHERE $field >= '$year-08-01'::DATE AND $field <= '$year-08-31'::DATE) AS bills_to_pay,

		            (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
                  WHERE $field2 >= '$year-08-01'::DATE AND $field2 <= '$year-08-31'::DATE) AS bills_to_receive
                  )AS bills)) as final")->result();

        $result['sep'] = $this->db->query("SELECT CASE WHEN cumulative_availability > desired_value then 
        cumulative_availability - desired_value 
	    ELSE desired_value - cumulative_availability END AS final_result, 
	    CASE WHEN cumulative_availability  > desired_value then true else false end  
	    FROM (
	          SELECT 
	            ( SELECT value FROM desired_values WHERE month = 9 AND year = $year) AS desired_value, 

                (SELECT bills.bills_to_receive - bills.bills_to_pay AS cumulative_availability 
                  FROM 
                  (SELECT
		            (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                      WHERE $field >= '$year-09-01'::DATE AND $field <= '$year-09-30'::DATE) AS bills_to_pay,

		            (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
                  WHERE $field2 >= '$year-09-01'::DATE AND $field2 <= '$year-09-30'::DATE) AS bills_to_receive
                  )AS bills)) as final")->result();

        $result['oct'] = $this->db->query("SELECT CASE WHEN cumulative_availability > desired_value then 
        cumulative_availability - desired_value 
	    ELSE desired_value - cumulative_availability END AS final_result, 
	    CASE WHEN cumulative_availability  > desired_value then true else false end  
	    FROM (
	          SELECT 
	            ( SELECT value FROM desired_values WHERE month = 10 AND year = $year) AS desired_value, 

                (SELECT bills.bills_to_receive - bills.bills_to_pay AS cumulative_availability 
                  FROM 
                  (SELECT
		            (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                      WHERE $field >= '$year-10-01'::DATE AND $field <= '$year-10-31'::DATE) AS bills_to_pay,

		            (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
                  WHERE $field2 >= '$year-10-01'::DATE AND $field2 <= '$year-10-31'::DATE) AS bills_to_receive
                  )AS bills)) as final")->result();

        $result['nov'] = $this->db->query("SELECT CASE WHEN cumulative_availability > desired_value then 
        cumulative_availability - desired_value 
	    ELSE desired_value - cumulative_availability END AS final_result, 
	    CASE WHEN cumulative_availability  > desired_value then true else false end  
	    FROM (
	          SELECT 
	            ( SELECT value FROM desired_values WHERE month = 11 AND year = $year) AS desired_value, 

                (SELECT bills.bills_to_receive - bills.bills_to_pay AS cumulative_availability 
                  FROM 
                  (SELECT
		            (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                      WHERE $field >= '$year-11-01'::DATE AND $field <= '$year-11-30'::DATE) AS bills_to_pay,

		            (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
                  WHERE $field2 >= '$year-11-01'::DATE AND $field2 <= '$year-11-30'::DATE) AS bills_to_receive
                  )AS bills)) as final")->result();

        $result['dec'] = $this->db->query("SELECT CASE WHEN cumulative_availability > desired_value then 
        cumulative_availability - desired_value 
	    ELSE desired_value - cumulative_availability END AS final_result, 
	    CASE WHEN cumulative_availability  > desired_value then true else false end  
	    FROM (
	          SELECT 
	            ( SELECT value FROM desired_values WHERE month = 12 AND year = $year) AS desired_value, 

                (SELECT bills.bills_to_receive - bills.bills_to_pay AS cumulative_availability 
                  FROM 
                  (SELECT
		            (SELECT COALESCE(sum(paid_amount), CAST(0 AS money)) FROM bills_to_pay 
                      WHERE $field >= '$year-12-01'::DATE AND $field <= '$year-12-31'::DATE) AS bills_to_pay,

		            (SELECT COALESCE(sum(received_amount), CAST(0 AS money)) FROM bills_to_receive 
                  WHERE $field2 >= '$year-12-01'::DATE AND $field2 <= '$year-12-31'::DATE) AS bills_to_receive
                  )AS bills)) as final")->result();

        return $result;

    }


}