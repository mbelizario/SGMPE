<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CashFlow extends CI_Controller
{
    /*
* VARIÁVEIS GLOBAIS
* $layout -> Define qual o layout será renderizado para as views
*             do controller em questão.
* $title  -> Define o título que será mostrado no navegador para
*             as views do controller em questão
*/
    public $layout = 'default';
    public $title = 'SGMPE - Fluxo de caixa';

    /*sumBillsToPayTypesPerMonth aceita 3 parametros:
    1- O ano em que deve ser feita a consulta
    2- O tipo das contas a serem buscadas (1 = gastos fixos / 2 = gastos variaveis)
    3- o tipo de fluxo de caixa em questão (1 = planejado / 2 = realizado)*/
    function accomplished()
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
        {
            $this->load->model('BillToPay');
            $this->load->model('BillToReceive');
            $this->load->model('CashFlow1');
            $billsToPay = new BillToPay();
            $billsToReceive = new BillToReceive();
            $cashFlow = new CashFlow1();

            $result['billsToPayTypeFix'] = $billsToPay->sumBillsToPayTypesPerMonth(2018,1,2);
            $result['billsToPayTypeVar'] = $billsToPay->sumBillsToPayTypesPerMonth(2018,2, 2);
            $result['billsToPay'] = $billsToPay->sumBillsToPayPerMonth(2018, 2);
            $result['billsToReceive'] = $billsToReceive->sumBillsToReceivePerMonth(2018, 2);
            $result['cumulativeAvailability'] = $cashFlow->calculateCumulativeAvailability(2018, 2);
            $result['desiredValues'] = $cashFlow->getDesiredValues(2018);
//            $result['finalResult'] = $cashFlow->calculateFinalResult(2018, 2);



            $this->load->view('pages/cash_flow/accomplished', $result);
        } else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }

    function planned()
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
        {
            $this->load->model('BillToPay');
            $this->load->model('BillToReceive');
            $this->load->model('CashFlow1');
            $billsToPay = new BillToPay();
            $billsToReceive = new BillToReceive();
            $cashFlow = new CashFlow1();

            $result['billsToPayTypeFix'] = $billsToPay->sumBillsToPayTypesPerMonth(2018,1,1);
            $result['billsToPayTypeVar'] = $billsToPay->sumBillsToPayTypesPerMonth(2018,2, 1);
            $result['billsToPay'] = $billsToPay->sumBillsToPayPerMonth(2018, 1);
            $result['billsToReceive'] = $billsToReceive->sumBillsToReceivePerMonth(2018, 1);
            $result['cumulativeAvailability'] = $cashFlow->calculateCumulativeAvailability(2018, 1);
            $result['desiredValues'] = $cashFlow->getDesiredValues(2018);
            $result['finalResult'] = $cashFlow->calculateFinalResult(2018, 1);
            $this->load->view('pages/cash_flow/planned', $result);
        }else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }

    function addDesiredValue()
    {
        if($this->input->post())
        {
            try
            {
                $this->load->model('CashFlow1');
                $month = $this->input->post('month');
                $year = $this->input->post('year');
                $value = $this->input->post('value');
                $cashFlow = new CashFlow1();
                $cashFlow->saveDesiredValue($month, $year, $value);
                $data['response'] = true;
                $data['msg'] = "Nível desejado salvo com sucesso!";
                echo json_encode($data);
                exit();
            }
            catch (Exception $e)
            {
                $data['response'] = false;
                $data['msg'] = "Erro ao salvar nível desejado!";
                echo json_encode($data);
                exit();
            }

        }
    }
}