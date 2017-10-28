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

		$this->load->view('pages/home/home');
	}
}
