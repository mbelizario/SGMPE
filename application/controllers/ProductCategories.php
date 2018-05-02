<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductCategories extends CI_Controller {
    /*
* VARIÁVEIS GLOBAIS
* $layout -> Define qual o layout será renderizado para as views
*             do controller em questão.
* $title  -> Define o título que será mostrado no navegador para
*             as views do controller em questão
*/
    public $layout = 'default';
    public $title = 'SGMPE - Categorias de produtos';

    function index()
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
        {
            $this->load->model('ProductCategory');
            $categories = new ProductCategory();
            $result['categories'] = $categories->getAll();
            $this->load->view('pages/product_category/index', $result);
        }
        else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }

    function add()
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
        {
            if($this->input->post())//se receber um post
            {
                $this->load->model('ProductCategory'); // carrega a model
                $category = new ProductCategory(); // instancia o novo objeto do tipo ProductCategory
                try
                {
                    //montando o objeto de acordo com as informações enviadas por post
                    $category->name = $this->input->post('name');
                    $category->description = $this->input->post('description');
                    //lançamento de exceções
                    if(!$category->name)
                        throw  new Exception("Por favor, preencha o nome!", 1);
                    else if(!$category->description)
                        throw  new Exception("Por favor, preencha a descrição!", 2);

                    if(!$category->add())
                        throw  new Exception("Falha ao cadastrar a categoria!", 3);

                    $data['response'] = true;
                    $data['msg'] = "Categoria adicionada com sucesso!";
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
            $this->load->view('pages/product_category/add'); // carrega a view
        }
        else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }

    function edit($lang = null)
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
        {

            if($this->input->post())//se receber um post
            {


                $this->load->model('ProductCategory'); // carrega a model
                $category = new ProductCategory(); // instancia o novo objeto do tipo ProductCategory
                try
                {
                    //montando o objeto de acordo com as informações enviadas por post
                    $category->id = $this->input->post('id');
                    $category->name = $this->input->post('name');
                    $category->description = $this->input->post('description');

                    //lançamento de exceções
                    if(!$category->name)
                        throw  new Exception("Por favor, preencha o nome!", 1);
                    else if(!$category->description)
                        throw  new Exception("Por favor, preencha a descrição!", 2);

                    if(!$category->update())
                        throw  new Exception("Falha ao atualizar a categoria!", 3);

                    $data['response'] = true;
                    $data['msg'] = "Categoria adicionada com sucesso!";
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
            $cat = new ProductCategory();
            $cat->id = $lang;
            $result = $cat->getOne();//busca as informações da categoria
            foreach ($result as $r)//prepara um vetor para mostrar na view
            {
                $result_to_display['id'] = $r->id;
                $result_to_display['name'] = $r->name;
                $result_to_display['description'] = $r->description;
            }
            $this->load->view('pages/product_category/edit', $result_to_display);
        }
        else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }

    function delete()
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
        {
            try
            {
                $this->load->model('ProductCategory');
                $category = new ProductCategory();
                $category->id = $this->input->post('id');
                if(!$category->delete())
                    throw  new Exception("Falha ao remover a categoria!", 1);
                $data['response'] = true;
                $data['msg'] = "Categoria removida com sucesso!";
                echo json_encode($data);
                exit();
            } catch (Exception $e)
            {
                $data['response'] = false;
                $data['msg'] = "Erro ao remover categoria!";
                echo json_encode($data);
                exit();
            }

        } else//se não estiver logado
        {
            redirect(base_url('login'));
        }
    }

}