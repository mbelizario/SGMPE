<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Breakeven extends CI_Controller
{
    /*
* VARIÁVEIS GLOBAIS
* $layout -> Define qual o layout será renderizado para as views
*             do controller em questão.
* $title  -> Define o título que será mostrado no navegador para
*             as views do controller em questão
*/
    public $layout = 'default';
    public $title = 'SGMPE - Ponto de equilíbrio';

    function index()
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
        {
            $this->load->model("Product");
            $products = new Product();
            $result["products"] = $products->getByCategory(3);
            $this->load->view('pages/breakeven/index', $result);
        } else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }

    function productInformation()
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
        {
            if($this->input->post())
            {
                $this->load->model("Product");
                $this->load->model("Breakeven1");
                $billsToPay = new Breakeven1();
                $products = new Product();
                $products->id = $this->input->post("id");
                $begin_date = $this->input->post("beginDate");
                $end_date = $this->input->post("endDate");

                $data['response'] = true;
                $data['result'] = $products->getOne();
                //contas fixas do período pesquisado
                $data['result2'] = $billsToPay->sumBillsToPayFixCurrentMonth($begin_date, $end_date);
                //quantidade do produto vendida
                $data['result3'] = $billsToPay->soldQuantity($products->id, $begin_date, $end_date);
                //total em R$ das vendas em um período
                $data['result4'] = $billsToPay->soldTotalValue($begin_date, $end_date);
                //total em R$ das vendas do produto em questão em um período
                $data['result5'] = $billsToPay->soldValue($products->id, $begin_date, $end_date);
//                error_log(print_r($data['result3'], true));
                echo json_encode($data);
                exit();
            }
        }
    }
}