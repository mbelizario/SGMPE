<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
  /*
  * VARIÁVEIS GLOBAIS
  * $layout -> Define qual o layout será renderizado para as views
  *             do controller em questão.
  * $title  -> Define o título que será mostrado no navegador para
  *             as views do controller em questão
  */
	 public $layout = 'default';
	 public $title = 'SGMPE - Usuários';
	 //Lista todos os usuarios
	public function index()
	{
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
		{
			$this->load->model('User');

			$users = new User();
			$result['users'] = $users->getAll();
			$this->load->view('pages/user/index', $result);
		}
		else // se nao estiver logado
		{
			redirect(base_url('login'));
		}

	}

	public function add()
	{
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)//se estiver logado
		{
			try
			{
				$this->load->model('User');
				if($this->input->post()) //se receber um post
				{
				// 	//instancia um objeto User
					$user = new User();
				// 	//setando os valores
				// 	// $user->id					= $this->input->post('id');
					$user->firstname 				= $this->input->post('firstname');
					$user->lastname 				= $this->input->post('lastname');
					$user->username 				= $this->input->post('username');
					$user->email 				    = $this->input->post('email');
					$user->pass 					= $this->input->post('pass');
					$user->confirmPass 			    = $this->input->post('confirmPass');
                    $user->user_type_id 			= $this->input->post('userType');
					$regex = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
					//lançamento das exceções
					if(!$user->firstname)
						throw new Exception("Por favor preencha o nome!",1);
					else if(!$user->lastname)
						throw new Exception("Por favor preencha o sobrenome!",2);
                    else if(!$user->user_type_id)
                        throw new Exception("Por favor selecione o tipo de usuário!",3);
					else if(!$user->username)
						throw new Exception("Por favor preencha o nome de usuário!",4);
					else if(!$user->usernameIsUnique())
						throw new Exception("Nome de usuário já em uso!",5);
					else if(!$user->email)
						throw new Exception("Por favor preencha o e-mail!",6);
					else if(!preg_match($regex, $user->email))
						throw new Exception("E-mail inválido, por favor corrija!",7);
					else if(!$user->pass)
						throw new Exception("Por favor preencha a senha!",8);
					else if(!$user->confirmPass)
						throw new Exception("Por favor preencha a confirmação de senha!",9);
					else if($user->pass != $user->confirmPass)
						throw new Exception("'Senha' e 'Confirmar senha' diferentes, por favor corrija!",10);
					//caso nao caia em nenhuma exceção, salva o usuario e retorna true;
					$user->add();
					$data['response'] = true;
					$data['msg'] = "Usuário adicionado com sucesso!";
					echo json_encode($data);
					exit();
				}//if
			}//try
			catch(Exception $e)
			{
					$data['response'] = false;
					$data['msg'] = $e->getMessage();
					$data['code'] = $e->getCode();
					echo json_encode($data);
					exit();
			}
			$this->load->view('pages/user/add' );
		}else // se não estiver logado
		{
			redirect(base_url('login'));
		}

	}

	public function edit($lang = null)
	{
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)
		{
			try
			{
				$this->load->model('User');
				if($this->input->post()) //se receber um post
				{
					// //instancia um objeto User
					$user = new User();
					//setando os valores
					$user->id								= $this->input->post('id');
					$user->firstname 				= $this->input->post('firstname');
					$user->lastname 				= $this->input->post('lastname');
					$user->username 				= $this->input->post('username');
					$user->email 						= $this->input->post('email');
                    $user->user_type_id 			= $this->input->post('userType');
					$regex = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
					//lançamento das exceções
					if(!$user->firstname)
						throw new Exception("Por favor preencha o nome!",1);
					else if(!$user->lastname)
						throw new Exception("Por favor preencha o sobrenome!",2);
                    else if(!$user->user_type_id)
                        throw new Exception("Por favor selecione o tipo de usuário!",3);
					else if(!$user->username)
						throw new Exception("Por favor preencha o nome de usuário!",4);
					else if(!$user->usernameIsUnique())
						throw new Exception("Nome de usuário já em uso!",5);
					else if(!$user->email)
						throw new Exception("Por favor preencha o e-mail!",6);
					else if(!preg_match($regex, $user->email))
						throw new Exception("E-mail inválido, por favor corrija!",7);
					// caso nao caia em nenhuma exceção, salva o usuario e retorna true;
					$user->update();
					$data['response'] = true;
					$data['msg'] = "Usuário atualizado com sucesso!";
					echo json_encode($data);
					exit();
				}
			}
			catch(Exception $e)
			{
				// if($e->getCode()==1)
				// {
					$data['response'] = false;
					$data['msg'] = $e->getMessage();
					$data['code'] = $e->getCode();
					echo json_encode($data);
					exit();
				// }
			}

			//caso não seja post tem que pegar os valores de um determinado usuário
			//para mostrar no formulario
			$user = new User();
			$user->id = $lang;
			$result = $user->getOne();
			foreach($result as $r)
			{
				$result_to_display['id'] = $lang;
				$result_to_display['firstname'] = $r->firstname;
				$result_to_display['lastname'] = $r->lastname;
                $result_to_display['user_type_id'] = $r->user_type_id;
				$result_to_display['email'] = $r->email;
				$result_to_display['username'] = $r->username;
			}
			$this->load->view('pages/user/edit',$result_to_display);
		}
		else
		{
			redirect(base_url('login'));
		}
	}

	public function delete()
	{
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)
        {
            $this->load->model('User');
            $user = new User();
            $user->id = $this->input->post('id');
            try
            {
                $user->delete();
                $data['response'] = true;
                $data['msg'] = "Usuário removido com sucesso!";
                echo json_encode($data);
                exit();
            }
            catch(Exception $e)
            {
                $data['response'] = false;
                $data['msg'] = "Erro ao remover usuário!";
                echo json_encode($data);
                exit();
            }
        }
        else
        {
            redirect(base_url('login'));
        }

    }
	// verifica se o username digitado é unico (está disponivel) ou não.
	// retorna true caso esteja disponivel, e false caso não esteja
	public function checkUsername()
	{
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)
		{
			$this->load->model('User');
			// error_log(print_r($this->input->post(),true));
			if($this->input->post()) // se for um post
			{
				$user = new User();
				$user->username = $this->input->post('username');
				// error_log(print_r($user,true));
				if($user->usernameIsUnique())// se o username estiver disponivel
				{
					$data['response'] = true; //retorna true
					echo json_encode($data);
					exit();
				}
				else // caso o username não esteja disponivel
				{
					$data['response'] = false; // retorna false
					echo json_encode($data);
					exit();
				}
			}
		}
		else
		{
			redirect(base_url('login'));
		}
	}
}
