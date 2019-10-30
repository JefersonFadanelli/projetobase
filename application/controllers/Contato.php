<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function index()	{

		$dados['titulo'] = 'Home - Projeto Base';

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/contato', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js');

	}

}
