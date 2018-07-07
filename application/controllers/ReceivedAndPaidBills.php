<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReceivedAndPaidBills extends CI_Controller {
    /*
* VARIÁVEIS GLOBAIS
* $layout -> Define qual o layout será renderizado para as views
*             do controller em questão.
* $title  -> Define o título que será mostrado no navegador para
*             as views do controller em questão
*/
    public $layout = 'default';
    public $title = 'SGMPE - Contas recebidas e pagas';

    /**************************************************/
    //  Lista todos os Produtos
    /**************************************************/
    public function received()
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
        {
            if($this->input->post())
            {
                $this->load->model('ReceivedAndPaidBill');
                $bill = new ReceivedAndPaidBill();
                $beginDate = $this->input->post('beginDate');
                $endDate = $this->input->post('endDate');
                $result['bills'] = $bill->received($beginDate, $endDate);

                $data['response'] = true;
                $data['result'] = $result;
                echo json_encode($data);
                exit();

            }

            $this->load->view('pages/received_and_paid_bill/received');
        }
        else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }

    public function paid()
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
        {
            if($this->input->post())
            {
                $this->load->model('ReceivedAndPaidBill');
                $bill = new ReceivedAndPaidBill();
                $beginDate = $this->input->post('beginDate');
                $endDate = $this->input->post('endDate');
                $result['bills'] = $bill->paid($beginDate, $endDate);

                $data['response'] = true;
                $data['result'] = $result;
                echo json_encode($data);
                exit();

            }

            $this->load->view('pages/received_and_paid_bill/paid');
        }
        else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }
}