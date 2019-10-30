  <?php

  class Herois_model extends CI_Model {

    public function destaques(){

      $this->db->limit(8);
      $this->db->order_by("data_cadastro", "DESC");
      return $this->db->get("herois_tb")->result_array();

    }

    public function listarHerois(){

      return $this->db->get("herois_tb")->result_array();

    }

    public function cadastrar_herois($params){

      $dados["nome"] = $params["nome"];
      $dados["categoria_id"] = $params["categoria_id"];
      $dados["biografia"] = $params["biografia"];
      $dados["usuario_id"] = $params["usuario_id"];

      $config["upload_path"] = "./assets/images/herois";
      $config["allowed_type"] = "gif|jpg|jpeg|png";
      $config["remove_spaces"] = true;

      $this->load->library("upload", $config);

      if( !$this->upload->do_upload("nome_imagem") ){
        $error = array("error" => $this->upload->display_errors());
        $this->load->view("pages/formulario_herois", $error);
      }

      $dados["nome_imagem"] = $this->upload->data("file_name");

      return $this->db->insert("herois_tb", $dados);

    }

  }
