<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function login()	{

		$dados['titulo'] = 'Usuários - Projeto Base';

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/login', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js');

	}

	public function cadastrar()	{

		$dados['titulo'] = 'Cadastro - Projeto Base';

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/cadastrar', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js');

	}

	public function novo(){

		$usuario = array(
			"nome" => $this->input->post("nome"),
			"email" => $this->input->post("email"),
			"username" => $this->input->post("username"),
			"senha" => md5($this->input->post("senha"))
		);

		$this->load->model("usuarios_model");
		$this->usuarios_model->cadastra_usuario($usuario);
		$this->session->set_flashdata("success", "cadastrado com sucesso");

		redirect('usuarios/cadastrar');
	}

	public function logar_usuarios() {

		$this->load->model("Usuarios_model");

		$username = $this->input->post("username");
		$senha = md5($this->input->post("senha"));

		$usuario = $this->Usuarios_model->logarUsuario( $username, $senha );

		if($usuario){
			$this->session->set_userdata("usuario_logado", $usuario);
			redirect("/");
		} else {
			$this->session->set_flashdata("danger", "Usuário ou Senha inválidos");
			redirect("usuarios/login");
		}

	}

	public function logout(){
		//session_destroy();
		$this->session->unset_userdata("usuario_logado");
		redirect("/");
	}

}
