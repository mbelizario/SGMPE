<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdv extends CI_Controller
{
    /*
* VARIÁVEIS GLOBAIS
* $layout -> Define qual o layout será renderizado para as views
*             do controller em questão.
* $title  -> Define o título que será mostrado no navegador para
*             as views do controller em questão
*/
    public $layout = 'pdv';
    public $title = 'SGMPE - Ponto de venda';

    //lista todas as contas a pagar
    function index()
    {
        if ($this->session->userdata('isUser'))//se estiver logado
        {
            $this->load->view('pages/pdv/index');
        }
        else
        {
            redirect(base_url('login'));
        }
    }

    function searchProduct()
    {
        if($this->input->post())
        {
            $this->load->model('Product');
            $product = new Product();
            $product->internal_code = $this->input->post('internalCode');
            $result = $product->getOneByInternalCode();
            if($result)
            {
                $data['response'] = true;
                $data['result'] = $result;
                echo json_encode($data);
                exit();
            }
            else
            {
                $data['response'] = false;
                $data['result'] = "Produto não encontrado, tente novamente!";
                echo json_encode($data);
                exit();
            }


        }
    }

    function add()
    {
        if($this->input->post())
        {
            date_default_timezone_set('America/Sao_Paulo');
            $this->load->model('BillToReceive');
            $this->load->model('Pdv1');
            $bill = new BillToReceive();
            $products = $this->input->post('products');
            $total_payable = $this->input->post('totalPayable');
            $payment_type = $this->input->post('paymentType');
            $today = date ("Y-m-d");
            $bill->customer_id = 2;
            $bill->amount = $total_payable;
            $bill->payment_type_id = $payment_type;
            $bill->received_amount = $total_payable;
            $bill->due_date = $today;
            $bill->issue_date = $today;
            $bill->receipt_day = $today;

            $id = $bill->add();
            $pdv = new Pdv1();
            foreach ($products as $p)
            {
                $pdv->product_id = $p['id'];
                $pdv->bill_to_receive_id = $id;
                $pdv->unit_price = $p['price'];
                $pdv->quantity = $p['quantity'];
                $pdv->saveBillProducts();

            }
        }
    }
}