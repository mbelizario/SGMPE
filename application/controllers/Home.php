<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  /*
  * VARIÁVEIS GLOBAIS
  * $layout -> Define qual o layout será renderizado para as views
  *             do controller em questão.
  * $title  -> Define o título que será mostrado no navegador para
  *             as views do controller em questão
  */
	 public $layout = 'default';
	 public $title = 'SGMPE - Página inicial';

	public function index()
	{
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)
        {
            $this->load->model('ManagerDashboard1');
            $md = new ManagerDashboard1();
            $result['billToPayNextSevenDays'] = $md->BillsToPayNextSevenDays();
            $result['overdueBP'] = $md->overdueBillsToPay();
		    $this->load->view('pages/home/manager_home', $result);
        }
        elseif ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 2)
        {
            $this->load->view('pages/home/home');
        }
        else
        {
            redirect(base_url('login'));
        }
	}
}
