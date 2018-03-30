<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CI_Controller {
  /*
  * VARIÁVEIS GLOBAIS
  * $layout -> Define qual o layout será renderizado para as views
  *             do controller em questão.
  * $title  -> Define o título que será mostrado no navegador para
  *             as views do controller em questão
  */
	 public $layout = 'default';
	 public $title = 'SGMPE - Fornecedores';

   /**************************************************/
   //  Lista todos os fornecedores
   /**************************************************/
   public function index()
   {
       if($this->session->userdata('isUser'))//se estiver logado
       {
           $this->load->model('Supplier');
           $supplier = new Supplier();
           $result['suppliers'] = $supplier->getAll();
           $this->load->view('pages/supplier/index', $result);
       }
       else//se não estiver logado
       {
           redirect(base_url('login'));
       }

   }

   /**************************************************/
   //  Adiciona um fornecedor
   /**************************************************/
   public function add()
   {
       if($this->session->userdata('isUser')){
           try
           {
               $this->load->model('Supplier');
               $this->load->helper('unmask');
               $this->load->helper('states');
               $supplier = new Supplier();
               if($this->input->post())
               {
                   $supplier->company_name = $this->input->post('companyName');
                   $supplier->cnpj = $this->input->post('cnpj');
                   $supplier->address_zip_code = $this->input->post('addressZipCode');
                   $supplier->address_street = $this->input->post('addressStreet');
                   $supplier->address_number = $this->input->post('addressNumber');
                   $supplier->address_comp = $this->input->post('addressComp');
                   $supplier->address_neighborhood = $this->input->post('addressNeighborhood');
                   $supplier->address_city = $this->input->post('addressCity');
                   $supplier->address_state = $this->input->post('addressState');
                   $supplier->email = $this->input->post('email');
                   $supplier->phone = $this->input->post('phone');
                   $supplier->cell_phone = $this->input->post('cellPhone');

                   $regex_email = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
                   $regex_cnpj = '/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/';
                   $regex_zip_code = '/^[0-9]{2}.[0-9]{3}-[0-9]{3}$/';
                   $regex_phone = '/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/';
                   //lançamento das exceções
                   if (!$supplier->company_name)
                       throw new Exception("Por favor, preencha a Razão Social!", 1);
                   elseif(!$supplier->cnpj)
                        throw new Exception("Por favor, preencha o CNPJ!", 2);
                   elseif(!preg_match($regex_cnpj, $supplier->cnpj))
                       throw new Exception("CNPJ inválido, por favor corrija!", 3);
                   elseif(!$supplier->address_zip_code)
                       throw new Exception("Por favor, preencha o CEP!", 4);
                   elseif(!preg_match($regex_zip_code, $supplier->address_zip_code))
                       throw new Exception("CEP inválido, por favor corrija!", 5);
                   elseif(!$supplier->address_street)
                       throw new Exception("Por favor, preencha a Rua!", 6);
                   elseif(!$supplier->address_number)
                       throw new Exception("Por favor, preencha o Número", 7);
                   elseif(!$supplier->address_neighborhood)
                       throw new Exception("Por favor, preencha o Bairro!", 8);
                   elseif(!$supplier->address_city)
                       throw new Exception("Por favor, preencha a Cidade!", 9);
                   elseif(!$supplier->address_state)
                       throw new Exception("Por favor, preencha o Estado!", 10);
                   if($supplier->email)
                       if(!preg_match($regex_email, $supplier->email))
                           throw new Exception("E-mail inválido, por favor corrija!", 11);
                   if(!$supplier->phone)
                       throw new Exception("Por favor, preencha o Telefone!", 12);
                   if(!preg_match($regex_phone,$supplier->phone))
                       throw new Exception("Telefone inválido, por favor corrija!", 13);
                   //tirando as mascaras para add no banco
                   $supplier->cnpj = unmaskCnpj($supplier->cnpj);
                   $supplier->address_zip_code = unmaskZipCode($supplier->address_zip_code);
                   $supplier->cell_phone = unmaskphone($supplier->cell_phone);
                   $supplier->phone = unmaskphone($supplier->phone);
                   if(!$supplier->add())
                       throw new Exception("Falha ao inserir o fornecedor!", 14);
                   $data['response'] = true;
                   $data['msg'] = "Fornecedor adicionado com sucesso!";
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
           $this->load->view('pages/supplier/add', $result_to_display);
       }
       else
       {
           redirect(base_url('login'));
       }

   }
    /**************************************************/
    //  Atualiza um fornecedor
    /**************************************************/
   public function edit($lang = null)
   {
       if($this->session->userdata('isUser'))//se estiver logado
       {
           $this->load->model('Supplier');
           $this->load->helper('unmask');
           $this->load->helper('states');

           try
           {
               if($this->input->post())// caso receba um post
               {
                   $supplier = new Supplier(); //instanciando o objeto Supplier
                   $supplier->id= $this->input->post('id');
                   $supplier->company_name = $this->input->post('companyName');
                   $supplier->cnpj = $this->input->post('cnpj');
                   $supplier->address_zip_code = $this->input->post('addressZipCode');
                   $supplier->address_street = $this->input->post('addressStreet');
                   $supplier->address_number = $this->input->post('addressNumber');
                   $supplier->address_comp = $this->input->post('addressComp');
                   $supplier->address_neighborhood = $this->input->post('addressNeighborhood');
                   $supplier->address_city = $this->input->post('addressCity');
                   $supplier->address_state = $this->input->post('addressState');
                   $supplier->email = $this->input->post('email');
                   $supplier->phone = $this->input->post('phone');
                   $supplier->cell_phone = $this->input->post('cellPhone');

                   $regex_email = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
                   $regex_cnpj = '/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/';
                   $regex_zip_code = '/^[0-9]{2}.[0-9]{3}-[0-9]{3}$/';
                   $regex_phone = '/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/';
                   //lançamento das exceções
                   if (!$supplier->company_name)
                       throw new Exception("Por favor, preencha a Razão Social!", 1);
                   elseif(!$supplier->cnpj)
                       throw new Exception("Por favor, preencha o CNPJ!", 2);
                   elseif(!preg_match($regex_cnpj, $supplier->cnpj))
                       throw new Exception("CNPJ inválido, por favor corrija!", 3);
                   elseif(!$supplier->address_zip_code)
                       throw new Exception("Por favor, preencha o CEP!", 4);
                   elseif(!preg_match($regex_zip_code, $supplier->address_zip_code))
                       throw new Exception("CEP inválido, por favor corrija!", 5);
                   elseif(!$supplier->address_street)
                       throw new Exception("Por favor, preencha a Rua!", 6);
                   elseif(!$supplier->address_number)
                       throw new Exception("Por favor, preencha o Número", 7);
                   elseif(!$supplier->address_neighborhood)
                       throw new Exception("Por favor, preencha o Bairro!", 8);
                   elseif(!$supplier->address_city)
                       throw new Exception("Por favor, preencha a Cidade!", 9);
                   elseif(!$supplier->address_state)
                       throw new Exception("Por favor, preencha o Estado!", 10);
                   if($supplier->email)
                       if(!preg_match($regex_email, $supplier->email))
                           throw new Exception("E-mail inválido, por favor corrija!", 11);
                   if(!$supplier->phone)
                       throw new Exception("Por favor, preencha o Telefone!", 12);
                   if(!preg_match($regex_phone,$supplier->phone))
                       throw new Exception("Telefone inválido, por favor corrija!", 13);
                   //tirando as mascaras para add no banco
                   $supplier->cnpj = unmaskCnpj($supplier->cnpj);
                   $supplier->address_zip_code = unmaskZipCode($supplier->address_zip_code);
                   $supplier->cell_phone = unmaskphone($supplier->cell_phone);
                   $supplier->phone = unmaskphone($supplier->phone);

                   if(!$supplier->update())// atualiza o fornecedor em questão
                       throw new Exception("Falha ao atualizar o fornecedor!", 14);
                   $data['response'] = true;
                   $data['msg'] = "Fornecedor atualizado com sucesso!";
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
           $supplier = new Supplier();
           $supplier->id = $lang;
           $result = $supplier->getOne();
           foreach ($result as $r)
           {
               $result_to_display['id'] = $r->id;
               $result_to_display['company_name'] = $r->company_name;
               $result_to_display['cnpj'] = $r->cnpj;
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
           $this->load->view('pages/supplier/edit', $result_to_display);
       }else//se não estiver logado
       {
           redirect(base_url('login'));
       }


   }

   public function delete()
   {
       $this->load->model('Supplier');
       if($this->session->userdata('isUser'))
       {
           try
           {
               $supplier = new Supplier();
               $supplier->id = $this->input->post('id');
               $supplier->delete();
               $data['response'] = true;
               $data['msg'] = "Fornecedor removido com sucesso!";
               echo json_encode($data);
               exit();
           } catch (Exception $e)
           {
               $data['response'] = false;
               $data['msg'] = "Erro ao remover fornecedor!";
               echo json_encode($data);
               exit();
           }
       }else
       {
           redirect(base_url('login'));
       }


   }
 }
