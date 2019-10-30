<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	public function index()	{

		$dados['titulo'] = 'Categorias - Projeto Base';

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/categorias', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js');

	}

}
