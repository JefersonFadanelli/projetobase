  <?php

  class Usuarios_model extends CI_Model {

    public function cadastra_usuario($usuario){

      $this->db->insert("usuarios_tb", $usuario);

    }

    public function logarUsuario( $username, $senha ){
      $this->db->where("username", $username);
      $this->db->where("senha", $senha);
      $usuario = $this->db->get("usuarios_tb")->row_array();
      return $usuario;
    }
  }
