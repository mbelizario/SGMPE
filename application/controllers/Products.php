<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    /*
* VARIÁVEIS GLOBAIS
* $layout -> Define qual o layout será renderizado para as views
*             do controller em questão.
* $title  -> Define o título que será mostrado no navegador para
*             as views do controller em questão
*/
    public $layout = 'default';
    public $title = 'SGMPE - Produtos';

    /**************************************************/
    //  Lista todos os Produtos
    /**************************************************/
    public function index()
    {
        if($this->session->userdata('isUser'))//se estiver logado
        {
            $this->load->model('Product');
            $product = new Product();
            $result['products'] = $product->getAll();
            $this->load->view('pages/product/index', $result);
        }
        else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }

    public function add()
    {
        if($this->session->userdata('isUser'))//se estiver logado
        {
            if($this->input->post())
            {
                $this->load->model('Product');
                $product = new Product();//instanciando objeto
                try
                {
                    //montando o objeto
                    $product->internal_code = $this->input->post('internalCode');
                    $product->name = $this->input->post('name');
                    $product->cost = $this->input->post('cost');
                    $product->price = $this->input->post('price');
                    $product->profit = $this->input->post('profit');
                    $product->quantity = $this->input->post('quantity');
                    $product->product_category_id = $this->input->post('category');
                    //lançamento de exceções
                    if(!$product->internal_code)
                        throw  new Exception("Por favor, preencha o código interno!", 1);
                    else if(!$product->name)
                        throw  new Exception("Por favor, preencha o nome!", 2);
                    else if(!$product->cost)
                        throw  new Exception("Por favor, preencha o custo!", 3);
                    else if(!$product->price)
                        throw  new Exception("Por favor, preencha o preço!", 4);
                    else if(!$product->profit)
                        throw  new Exception("Erro ao calcular o lucro!", 5);
                    else if(!$product->quantity)
                        throw  new Exception("Por favor, preencha a quantidade!", 6);
                    else if(!$product->product_category_id)
                        throw  new Exception("Por favor, selecione a categoria!", 7);

                    if(!$product->add())
                        throw  new Exception("Falha ao cadastrar o produto!", 8);

                    $data['response'] = true;
                    $data['msg'] = "Produto adicionado com sucesso!";
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
            $this->load->model('ProductCategory');
            $categories = new ProductCategory();
            $result['categories'] = $categories->getAll();
            $this->load->view('pages/product/add', $result);
        }
        else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }

    public function edit($lang = null)
    {
        if($this->session->userdata('isUser'))//se estiver logado
        {
            if($this->input->post())
            {
                $this->load->model('Product');
                $product = new Product();//instanciando objeto
                try
                {
                    //montando o objeto
                    $product->id = $this->input->post('id');
                    $product->internal_code = $this->input->post('internalCode');
                    $product->name = $this->input->post('name');
                    $product->cost = $this->input->post('cost');
                    $product->price = $this->input->post('price');
                    $product->profit = $this->input->post('profit');
                    $product->quantity = $this->input->post('quantity');
                    $product->product_category_id = $this->input->post('category');
                    //lançamento de exceções
                    if(!$product->internal_code)
                        throw  new Exception("Por favor, preencha o código interno!", 1);
                    else if(!$product->name)
                        throw  new Exception("Por favor, preencha o nome!", 2);
                    else if(!$product->cost)
                        throw  new Exception("Por favor, preencha o custo!", 3);
                    else if(!$product->price)
                        throw  new Exception("Por favor, preencha o preço!", 4);
                    else if(!$product->profit)
                        throw  new Exception("Erro ao calcular o lucro!", 5);
                    else if(!$product->quantity)
                        throw  new Exception("Por favor, preencha a quantidade!", 6);
                    else if(!$product->product_category_id)
                        throw  new Exception("Por favor, selecione a categoria!", 7);

                    if(!$product->update())
                        throw  new Exception("Falha ao atualizar o produto!", 8);

                    $data['response'] = true;
                    $data['msg'] = "Produto adicionado com sucesso!";
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
            $this->load->model('ProductCategory');
            $this->load->model('Product');
            $p = new Product();
            $p->id = $lang;
            $category = $p->getOne();
            foreach ($category as $c)
            {
                $result['id'] = $lang;
                $result['internal_code'] = $c->internal_code;
                $result['name'] = $c->name;
                $result['cost'] = $c->cost;
                $result['price'] = $c->price;
                $result['profit'] = $c->profit;
                $result['quantity'] = $c->quantity;
                $result['category'] = $c->product_category_id;
            }
            $categories = new ProductCategory();
            $result['categories'] = $categories->getAll();
            $this->load->view('pages/product/edit', $result);
        }
        else//se não estiver logado
        {
            redirect(base_url('login'));
        }

    }

    public function delete()
    {
        if($this->session->userdata('isUser'))//se estiver logado
        {
            $this->load->model('Product');
            try
            {
                $product = new Product();
                $product->id = $this->input->post('id');
                $product->delete();
                $data['response'] = true;
                $data['msg'] = "Produto removido com sucesso!";
                echo json_encode($data);
                exit();
            } catch (Exception $e)
            {
                $data['response'] = false;
                $data['msg'] = "Erro ao remover produto!";
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