  <?php

  class Categorias_model extends CI_Model {

    public function listarCategorias(){

      return $this->db->get("categorias_tb")->result_array();

    }

  }
