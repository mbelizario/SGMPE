<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  /*
  * VARIÁVEIS GLOBAIS
  * $layout -> Define qual o layout será renderizado para as views
  *             do controller em questão.
  * $title  -> Define o título que será mostrado no navegador para
  *             as views do controller em questão
  */
   public $layout = 'login';
   public $title = 'SGMPE - Entrar';

   public function index()
   {

   }

   public function isUser()
   {
     if($this->input->post())
     {
       try
       {
         $this->load->model('User');
         $user = new User();
         $user->username = $this->input->post('username');
         $user->pass = $this->input->post('pass');
         if($user->authenticate())
         {
           $this->session->set_userdata('isUser', true);
           $this->session->set_userData('username', $user->username);
           $data['response'] = true;
           echo json_encode($data);
           exit();
         }
         else
         {
           throw new Exception("Nome de usuário ou senha inválidos!",1);
         }

       }
       catch(Exception $e)
       {
         $data['response'] = false;
         $data['msg'] = $e->getMessage();
         echo json_encode($data);
         exit();
       }
     }
   }

   public function logout()
   {
     $this->session->sess_destroy();
     redirect(base_url('login'));
   }
}
