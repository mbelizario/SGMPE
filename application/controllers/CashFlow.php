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


    function index()
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
        {
            $this->load->model('BillToPay');
            $this->load->model('BillToReceive');
            $billsToPay = new BillToPay();
            $billsToReceive = new BillToReceive();
            $result['billsToPayTypeFix'] = $billsToPay->sumBillsToPayTypesPerMonth(2018,1);
            $result['billsToPayTypeVar'] = $billsToPay->sumBillsToPayTypesPerMonth(2018,2);
            $result['billsToPay'] = $billsToPay->sumBillsToPayPerMonth(2018);
            $result['billsToReceive'] = $billsToReceive->sumBillsToReceivePerMonth(2018);
            $this->load->view('pages/cash_flow/index', $result);
        } else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }
}