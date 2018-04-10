<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BillsToPay extends CI_Controller
{
    /*
* VARIÁVEIS GLOBAIS
* $layout -> Define qual o layout será renderizado para as views
*             do controller em questão.
* $title  -> Define o título que será mostrado no navegador para
*             as views do controller em questão
*/
    public $layout = 'default';
    public $title = 'SGMPE - Contas a pagar';

    //lista todas as contas a pagar
    function index()
    {
        if ($this->session->userdata('isUser'))//se estiver logado
        {
            $this->load->model('BillToPay');
            $bills = new BillToPay();
            $result['bills'] = $bills->getAll();

            $this->load->view('pages/bill_to_pay/index', $result);
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
            $this->load->model('BillToPay');
            $this->load->model('Supplier');
            if($this->input->post()) //se receber um post
            {
                $bill = new BillToPay(); // instancia o objeto
                try
                {
                    //monta o objeto com as informações recebidas via post
                    $bill->document_number              = $this->input->post('documentNumber');
                    $bill->supplier_id                  = $this->input->post('supplier');
                    $bill->issue_date                   = $this->input->post('issueDate');
                    $bill->due_date                     = $this->input->post('dueDate');
                    $bill->amount                       = $this->input->post('amount');
                    $bill->paid_amount                  = $this->input->post('paidAmount');
                    $bill->pay_day                      = $this->input->post('payDay');
                    $bill->bill_to_pay_type_id          = $this->input->post('type');
                    $bill->complementary_information    = $this->input->post('complementaryInformation');
                    if(!$bill->document_number)
                        throw  new Exception("Por favor, preencha o Nº do documento!", 1);
                    elseif(!$bill->supplier_id)
                        //add o code 2 que é uma verificação se o n do doc é unico
                        throw  new Exception("Por favor, selecione o fornecedor!", 3);
                    elseif(!$bill->issue_date)
                        throw  new Exception("Por favor, preencha a data de emissão!", 4);
                    elseif(!$bill->due_date)
                        throw  new Exception("Por favor, preencha a data de vencimento!", 5);
                    elseif(!$bill->amount)
                        throw  new Exception("Por favor, preencha o valor!", 6);
                    elseif(!$bill->bill_to_pay_type_id)
                        throw  new Exception("Por favor, selecione o tipo de conta!", 7);
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
            //para buscar os tipos de conta e fornecedores para os selects
            $types = new BillToPay();
            $supplier = new Supplier();

            $result['types'] = $types->getTypes();
            $result['suppliers'] = $supplier->getAll();
            $this->load->view('pages/bill_to_pay/add', $result);
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
            $this->load->model('BillToPay');
            $this->load->model('Supplier');
            $bill = new BillToPay();
            $supplier = new Supplier();
            if($this->input->post())//se receber um post
            {
                $bill = new BillToPay();
                try
                {
                    $bill->id                           = $this->input->post('id');
                    $bill->document_number              = $this->input->post('documentNumber');
                    $bill->supplier_id                  = $this->input->post('supplier');
                    $bill->issue_date                   = $this->input->post('issueDate');
                    $bill->due_date                     = $this->input->post('dueDate');
                    $bill->amount                       = $this->input->post('amount');
                    $bill->paid_amount                  = $this->input->post('paidAmount');
                    $bill->pay_day                      = $this->input->post('payDay');
                    $bill->bill_to_pay_type_id          = $this->input->post('type');
                    $bill->complementary_information    = $this->input->post('complementaryInformation');
                    if(!$bill->document_number)
                        throw  new Exception("Por favor, preencha o Nº do documento!", 1);
                    elseif(!$bill->supplier_id)
                        //add o code 2 que é uma verificação se o n do doc é unico
                        throw  new Exception("Por favor, selecione o fornecedor!", 3);
                    elseif(!$bill->issue_date)
                        throw  new Exception("Por favor, preencha a data de emissão!", 4);
                    elseif(!$bill->due_date)
                        throw  new Exception("Por favor, preencha a data de vencimento!", 5);
                    elseif(!$bill->amount)
                        throw  new Exception("Por favor, preencha o valor!", 6);
                    elseif(!$bill->bill_to_pay_type_id)
                        throw  new Exception("Por favor, selecione o tipo de conta!", 7);
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
                $result_to_display['supplier_id']               = $r->supplier_id;
                $result_to_display['document_number']           = $r->document_number;
                $result_to_display['complementary_information'] = $r->complementary_information;
                $result_to_display['issue_date']                = $r->issue_date;
                $result_to_display['due_date']                  = $r->due_date;
                $result_to_display['amount']                    = $r->amount;
                $result_to_display['paid_amount']               = $r->paid_amount;
                $result_to_display['pay_day']                   = $r->pay_day;
                $result_to_display['bill_to_pay_type_id']       = $r->bill_to_pay_type_id;
            }
            $result_to_display['suppliers'] = $supplier->getAll();
            $result_to_display['types'] = $bill->getTypes();
            $this->load->view('pages/bill_to_pay/edit', $result_to_display);

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
                $this->load->model('BillToPay');
                $bill = new BillToPay();
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