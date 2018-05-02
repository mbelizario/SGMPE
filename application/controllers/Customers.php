<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {
    /*
    * VARIÁVEIS GLOBAIS
    * $layout -> Define qual o layout será renderizado para as views
    *             do controller em questão.
    * $title  -> Define o título que será mostrado no navegador para
    *             as views do controller em questão
    */
    public $layout = 'default';
    public $title = 'SGMPE - Clientes';

    /**************************************************/
    //  Lista todos os clientes
    /**************************************************/
    public function index()
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
        {
            $this->load->model('Customer');
            $customer = new Customer();
            $result['customers'] = $customer->getAll();
            $this->load->view('pages/customer/index', $result);
        }
        else//se não estiver logado
        {
            redirect(base_url('login'));
        }

    }

    /**************************************************/
    //  Adiciona um cliente
    /**************************************************/
    public function add()
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1){
            try
            {
                $this->load->model('Customer');
                $this->load->helper('unmask');
                $this->load->helper('states');
                $customer = new Customer();
                if($this->input->post())
                {
                    $customer->person_name = $this->input->post('personName');
                    $customer->cpf = $this->input->post('cpf');
                    $customer->address_zip_code = $this->input->post('addressZipCode');
                    $customer->address_street = $this->input->post('addressStreet');
                    $customer->address_number = $this->input->post('addressNumber');
                    $customer->address_comp = $this->input->post('addressComp');
                    $customer->address_neighborhood = $this->input->post('addressNeighborhood');
                    $customer->address_city = $this->input->post('addressCity');
                    $customer->address_state = $this->input->post('addressState');
                    $customer->email = $this->input->post('email');
                    $customer->phone = $this->input->post('phone');
                    $customer->cell_phone = $this->input->post('cellPhone');

                    $regex_email = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
                    $regex_cpf = '/^[0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}$/';
                    $regex_zip_code = '/^[0-9]{2}.[0-9]{3}-[0-9]{3}$/';
                    $regex_phone = '/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/';
                    //lançamento das exceções
                    if (!$customer->person_name)
                        throw new Exception("Por favor, preencha a Razão Social!", 1);
                    elseif(!$customer->cpf)
                        throw new Exception("Por favor, preencha o CPF!", 2);
                    elseif(!preg_match($regex_cpf, $customer->cpf))
                        throw new Exception("CPF inválido, por favor corrija!", 3);
                    elseif(!$customer->address_zip_code)
                        throw new Exception("Por favor, preencha o CEP!", 4);
                    elseif(!preg_match($regex_zip_code, $customer->address_zip_code))
                        throw new Exception("CEP inválido, por favor corrija!", 5);
                    elseif(!$customer->address_street)
                        throw new Exception("Por favor, preencha a Rua!", 6);
                    elseif(!$customer->address_number)
                        throw new Exception("Por favor, preencha o Número", 7);
                    elseif(!$customer->address_neighborhood)
                        throw new Exception("Por favor, preencha o Bairro!", 8);
                    elseif(!$customer->address_city)
                        throw new Exception("Por favor, preencha a Cidade!", 9);
                    elseif(!$customer->address_state)
                        throw new Exception("Por favor, preencha o Estado!", 10);
                    if($customer->email)
                        if(!preg_match($regex_email, $customer->email))
                            throw new Exception("E-mail inválido, por favor corrija!", 11);
                    if(!$customer->phone)
                        throw new Exception("Por favor, preencha o Telefone!", 12);
                    if(!preg_match($regex_phone,$customer->phone))
                        throw new Exception("Telefone inválido, por favor corrija!", 13);
                    //tirando as mascaras para add no banco
                    $customer->cpf = unmaskCnpj($customer->cpf);
                    $customer->address_zip_code = unmaskZipCode($customer->address_zip_code);
                    $customer->cell_phone = unmaskphone($customer->cell_phone);
                    $customer->phone = unmaskphone($customer->phone);
                    if(!$customer->add())
                        throw new Exception("Falha ao inserir o cliente!", 14);
                    $data['response'] = true;
                    $data['msg'] = "Cliente adicionado com sucesso!";
                    echo json_encode($data);
                    exit();
                }


            }
            catch (Exception $e)
            {
                $data['response'] = false;
                $data['msg'] = $e->getMessage();
                $data['code'] = $e->getCode();
                echo json_encode($data);
                exit();
            }
            $result_to_display['states'] = getStates();
            $this->load->view('pages/customer/add', $result_to_display);
        }
        else
        {
            redirect(base_url('login'));
        }

    }
    /**************************************************/
    //  Atualiza um cliente
    /**************************************************/
    public function edit($lang = null)
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
        {
            $this->load->model('Customer');
            $this->load->helper('unmask');
            $this->load->helper('states');

            try
            {
                if($this->input->post())// caso receba um post
                {
                    $customer = new Customer(); //instanciando o objeto Customer
                    $customer->id= $this->input->post('id');
                    $customer->person_name = $this->input->post('personName');
                    $customer->cpf = $this->input->post('cpf');
                    $customer->address_zip_code = $this->input->post('addressZipCode');
                    $customer->address_street = $this->input->post('addressStreet');
                    $customer->address_number = $this->input->post('addressNumber');
                    $customer->address_comp = $this->input->post('addressComp');
                    $customer->address_neighborhood = $this->input->post('addressNeighborhood');
                    $customer->address_city = $this->input->post('addressCity');
                    $customer->address_state = $this->input->post('addressState');
                    $customer->email = $this->input->post('email');
                    $customer->phone = $this->input->post('phone');
                    $customer->cell_phone = $this->input->post('cellPhone');

                    $regex_email = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
                    $regex_cpf = '/^[0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}$/';
                    $regex_zip_code = '/^[0-9]{2}.[0-9]{3}-[0-9]{3}$/';
                    $regex_phone = '/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/';
                    //lançamento das exceções
                    if (!$customer->person_name)
                        throw new Exception("Por favor, preencha a Razão Social!", 1);
                    elseif(!$customer->cpf)
                        throw new Exception("Por favor, preencha o CPF!", 2);
                    elseif(!preg_match($regex_cpf, $customer->cpf))
                        throw new Exception("CPF inválido, por favor corrija!", 3);
                    elseif(!$customer->address_zip_code)
                        throw new Exception("Por favor, preencha o CEP!", 4);
                    elseif(!preg_match($regex_zip_code, $customer->address_zip_code))
                        throw new Exception("CEP inválido, por favor corrija!", 5);
                    elseif(!$customer->address_street)
                        throw new Exception("Por favor, preencha a Rua!", 6);
                    elseif(!$customer->address_number)
                        throw new Exception("Por favor, preencha o Número", 7);
                    elseif(!$customer->address_neighborhood)
                        throw new Exception("Por favor, preencha o Bairro!", 8);
                    elseif(!$customer->address_city)
                        throw new Exception("Por favor, preencha a Cidade!", 9);
                    elseif(!$customer->address_state)
                        throw new Exception("Por favor, preencha o Estado!", 10);
                    if($customer->email)
                        if(!preg_match($regex_email, $customer->email))
                            throw new Exception("E-mail inválido, por favor corrija!", 11);
                    if(!$customer->phone)
                        throw new Exception("Por favor, preencha o Telefone!", 12);
                    if(!preg_match($regex_phone,$customer->phone))
                        throw new Exception("Telefone inválido, por favor corrija!", 13);
                    //tirando as mascaras para add no banco
                    $customer->cpf = unmaskCnpj($customer->cpf);
                    $customer->address_zip_code = unmaskZipCode($customer->address_zip_code);
                    $customer->cell_phone = unmaskphone($customer->cell_phone);
                    $customer->phone = unmaskphone($customer->phone);

                    if(!$customer->update())// atualiza o cliente em questão
                        throw new Exception("Falha ao atualizar o cliente!", 14);
                    $data['response'] = true;
                    $data['msg'] = "Cliente atualizado com sucesso!";
                    echo json_encode($data);
                    exit();
                }
            }catch (Exception $e)// caso caia nas exceções
            {
                $data['response'] = false;
                $data['msg'] = $e->getMessage();
                $data['code'] = $e->getCode();
                echo json_encode($data);
                exit();
            }
            //para preencher os campos da view com os dados já cadastrados
            $customer = new Customer();
            $customer->id = $lang;
            $result = $customer->getOne();
            foreach ($result as $r)
            {
                $result_to_display['id'] = $r->id;
                $result_to_display['person_name'] = $r->person_name;
                $result_to_display['cpf'] = $r->cpf;
                $result_to_display['address_zip_code'] = $r->address_zip_code;
                $result_to_display['address_street'] = $r->address_street;
                $result_to_display['address_number'] = $r->address_number;
                $result_to_display['address_comp'] = $r->address_comp;
                $result_to_display['address_neighborhood'] = $r->address_neighborhood;
                $result_to_display['address_city'] = $r->address_city;
                $result_to_display['address_state'] = $r->address_state;
                $result_to_display['email'] = $r->email;
                $result_to_display['phone'] = $r->phone;
                $result_to_display['cell_phone'] = $r->cell_phone;
            }
            //pegando os estados através da função na helper
            $result_to_display['states'] = getStates();
            $this->load->view('pages/customer/edit', $result_to_display);
        }else//se não estiver logado
        {
            redirect(base_url('login'));
        }


    }

    public function delete()
    {
        $this->load->model('Customer');
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)
        {
            try
            {
                $customer = new Customer();
                $customer->id = $this->input->post('id');
                $customer->delete();
                $data['response'] = true;
                $data['msg'] = "Cliente removido com sucesso!";
                echo json_encode($data);
                exit();
            } catch (Exception $e)
            {
                $data['response'] = false;
                $data['msg'] = "Erro ao remover cliente!";
                echo json_encode($data);
                exit();
            }
        }else
        {
            redirect(base_url('login'));
        }


    }
}
