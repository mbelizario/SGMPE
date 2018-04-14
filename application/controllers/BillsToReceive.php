<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class BillsToReceive extends CI_Controller
{
    /*
* VARIÁVEIS GLOBAIS
* $layout -> Define qual o layout será renderizado para as views
*             do controller em questão.
* $title  -> Define o título que será mostrado no navegador para
*             as views do controller em questão
*/
    public $layout = 'default';
    public $title = 'SGMPE - Contas a receber';

    //lista todas as contas a pagar
    function index()
    {
        if ($this->session->userdata('isUser'))//se estiver logado
        {
            $this->load->model('BillToReceive');
            $bills = new BillToReceive();
            $result['bills'] = $bills->getAll();

            $this->load->view('pages/bill_to_receive/index', $result);
        } else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }
    //adiciona uma nova conta a pagar
    function add()
    {
        if ($this->session->userdata('isUser'))//se estiver logado
        {
            $this->load->model('BillToReceive');
            $this->load->model('Customer');
            if($this->input->post()) //se receber um post
            {
                $bill = new BillToReceive(); // instancia o objeto
                try
                {
                    //monta o objeto com as informações recebidas via post
                    $bill->document_number              = $this->input->post('documentNumber');
                    $bill->customer_id                  = $this->input->post('customer');
                    $bill->issue_date                   = $this->input->post('issueDate');
                    $bill->due_date                     = $this->input->post('dueDate');
                    $bill->amount                       = $this->input->post('amount');
                    $bill->received_amount              = $this->input->post('receivedAmount');
                    $bill->receipt_day                  = $this->input->post('receiptDay');
//                    $bill->bill_to_pay_type_id          = $this->input->post('type');
                    $bill->complementary_information    = $this->input->post('complementaryInformation');

                    if(!$bill->document_number)
                        throw  new Exception("Por favor, preencha o Nº do documento!", 1);
                    elseif(!$bill->customer_id)
                        //add o code 2 que é uma verificação se o n do doc é unico
                        throw  new Exception("Por favor, selecione o cliente!", 3);
                    elseif(!$bill->issue_date)
                        throw  new Exception("Por favor, preencha a data de emissão!", 4);
                    elseif(!$bill->due_date)
                        throw  new Exception("Por favor, preencha a data de vencimento!", 5);
                    elseif(!$bill->amount)
                        throw  new Exception("Por favor, preencha o valor!", 6);
                    elseif(!$bill->add())
                        throw  new Exception("Falha ao cadastrar conta", 8);
                    $data['response'] = true;
                    $data['msg'] = "Conta adicionada com sucesso!";
                    echo json_encode($data);
                    exit();
                }
                catch (Exception $e)// caso caia em alguma exceção
                {
                    $data['response'] = false;
                    $data['msg'] = $e->getMessage();
                    $data['code'] = $e->getCode();
                    echo json_encode($data);
                    exit();
                }


            }
            //para buscar os tipos de conta e clientes para os selects
//            $types = new BillToReceive();
            $customer = new Customer();

//            $result['types'] = $types->getTypes();
            $result['customers'] = $customer->getAll();
            $this->load->view('pages/bill_to_receive/add', $result);
        } else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }

    //edita uma conta a pagar já existente, o lang é passado pela url
    //pode ser null em caso de posts
    function edit($lang = null)
    {
        if ($this->session->userdata('isUser'))//se estiver logado
        {
            $this->load->model('BillToReceive');
            $this->load->model('Customer');
            $bill = new BillToReceive();
            $customer = new Customer();
            if($this->input->post())//se receber um post
            {
                $bill = new BillToReceive();
                try
                {
                    $bill->id                           = $this->input->post('id');
                    $bill->document_number              = $this->input->post('documentNumber');
                    $bill->customer_id                  = $this->input->post('customer');
                    $bill->issue_date                   = $this->input->post('issueDate');
                    $bill->due_date                     = $this->input->post('dueDate');
                    $bill->amount                       = $this->input->post('amount');
                    $bill->receivedAmount               = $this->input->post('receivedAmount');
                    $bill->receipt_day                  = $this->input->post('receiptDay');
                    $bill->bill_to_pay_type_id          = $this->input->post('type');
                    $bill->complementary_information    = $this->input->post('complementaryInformation');
                    if(!$bill->document_number)
                        throw  new Exception("Por favor, preencha o Nº do documento!", 1);
                    elseif(!$bill->customer_id)
                        //add o code 2 que é uma verificação se o n do doc é unico
                        throw  new Exception("Por favor, selecione o cliente!", 3);
                    elseif(!$bill->issue_date)
                        throw  new Exception("Por favor, preencha a data de emissão!", 4);
                    elseif(!$bill->due_date)
                        throw  new Exception("Por favor, preencha a data de vencimento!", 5);
                    elseif(!$bill->amount)
                        throw  new Exception("Por favor, preencha o valor!", 6);
/*                    elseif(!$bill->bill_to_pay_type_id)
                        throw  new Exception("Por favor, selecione o tipo de conta!", 7);*/
                    elseif(!$bill->update())
                        throw  new Exception("Falha ao atualizar conta", 8);
                    $data['response'] = true;
                    $data['msg'] = "Conta atualizada com sucesso!";
                    echo json_encode($data);
                    exit();
                }
                catch (Exception $e)
                {
                    $data['response'] = false;
                    $data['msg'] = $e->getMessage();
                    $data['code'] = $e->getCode();
                    echo json_encode($data);
                    exit();
                }


            }
            $bill->id = $lang;
            $result = $bill->getOne();
            foreach ($result as $r) ///preparando o vetor para mandar para a view
            {
                $result_to_display['id']                        = $r->id;
                $result_to_display['customer_id']               = $r->customer_id;
                $result_to_display['document_number']           = $r->document_number;
                $result_to_display['complementary_information'] = $r->complementary_information;
                $result_to_display['issue_date']                = $r->issue_date;
                $result_to_display['due_date']                  = $r->due_date;
                $result_to_display['amount']                    = $r->amount;
                $result_to_display['received_amount']           = $r->received_amount;
                $result_to_display['receipt_day']               = $r->receipt_day;
//                $result_to_display['bill_to_pay_type_id']       = $r->bill_to_pay_type_id;
            }
            $result_to_display['customers'] = $customer->getAll();
            $result_to_display['types'] = $bill->getTypes();
            $this->load->view('pages/bill_to_receive/edit', $result_to_display);

        }
        else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }

    function delete()
    {
        if ($this->session->userdata('isUser'))//se estiver logado
        {
            try
            {
                $this->load->model('BillToReceive');
                $bill = new BillToReceive();
                $bill->id = $this->input->post('id');
                $bill->delete();
                $data['response'] = true;
                $data['msg'] = "Conta removida com sucesso!";
                echo json_encode($data);
                exit();
            }
            catch (Exception $e)
            {
                $data['response'] = false;
                $data['msg'] = "Erro ao remover conta!";
                echo json_encode($data);
                exit();
            }
        }
        else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }
}