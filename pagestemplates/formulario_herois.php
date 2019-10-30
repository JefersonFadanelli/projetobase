<?php
/**
 * Created by PhpStorm.
 * User: lucas genari
 * Date: 30/08/2018
 * Time: 09:32
 */
?>

<section class="herois">
    <div class="container">
        <div class="banner">
            <img src="assets/images/bannerherois.jpg" alt="" style="width: 100%;">
        </div>

        <div class="contato-titulo">
            <h1>Novo Herói</h1>
            <hr class="contato-hr">
            <p class="descricao-contato">Formulário de Cadastro de Heróis.</p>
        </div>

        <?php if($this->session->flashdata("success")) : ?>
            <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
        <?php endif ?>

        <?php if($this->session->flashdata("danger")) : ?>
            <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
        <?php endif ?>

        <div class="heroi-page">
            <div class="jumbotron" style="background-color: #1B1D1D;">
                <?= form_open_multipart('herois/novo') ?>

                    <div class="form-group">
                        <label for="nome">Nome do Herói</label>
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="categoria_id">Categoria</label>
                        <select class="form-control" name="categoria_id" id="categoria_id" required>
                            <option value="">Selecione uma opção</option>
                            <?php foreach ($categorias as $categoria) : ?>
                            <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="biografia">Biografia</label>
                        <textarea name="biografia" id="biografia" cols="30" rows="5" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="nome_imagem">Foto</label>
                        <input type="file" class="form-control" name="nome_imagem" id="nome_imagem" required>
                    </div>

                    <input type="hidden" name="usuario_id" id="usuario_id" value="<?= $this->session->userdata('usuario_logado')['id'] ?>">
                    <button class="btn btn-danger">Cadastrar Herói</button>

                <?= form_close(); ?>
            </div>
        </div>
    </div>
</section>
