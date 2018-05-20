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
       if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)
       {

           $this->load->model('ManagerDashboard1');
           $md = new ManagerDashboard1();
           $result['billToPayNextSevenDays'] = $md->BillsToPayNextSevenDays();
           $result['overdueBP'] = $md->overdueBillsToPay();
           redirect(base_url('home'));
       }
       elseif ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 2)
       {
           redirect(base_url('home'));
       }
       /*else
       {
           redirect(base_url('login'));
       }*/
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
            $result = $user->getOneByUsernameAndPassword();
            $this->session->set_userdata('isUser', true);
            $this->session->set_userData('username', $user->username);
            $this->session->set_userData('firstname', $result[0]->firstname);
             $this->session->set_userData('user_type', $result[0]->user_type_id);
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
