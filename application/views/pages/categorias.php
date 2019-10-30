<?php
/**
 * Created by PhpStorm.
 * User: lucas genari
 * Date: 30/08/2018
 * Time: 10:11
 */
?>


<section class="herois">
    <div class="container">
        <div class="banner">
            <img src="assets/images/bannerherois.jpg" alt="" style="width: 100%;">
        </div>

        <div class="contato-titulo">
            <div class="row clearfix">
                <div class="col-md-6">
                    <h1>Categorias</h1>
                </div>
                <?php if($this->session->userdata("usuario_logado")) : ?>
                    <div class="col-md-6">
                        <a href="categorias/formulario"><button class="btn btn-danger" style="float: right">Cadastrar Nova Categoria</button></a>
                    </div>
                <?php endif; ?>
            </div>
            <hr class="contato-hr">
            <p class="descricao-contato">Listagem completa de categorias.</p>

            <?php if($this->session->flashdata("success")) : ?>
                <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
            <?php endif ?>

            <?php if($this->session->flashdata("danger")) : ?>
                <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
            <?php endif ?>
        </div>

        <div class="heroi-page">
            <table class="table table-dark">
                <tr>
                    <th>Nome da Categoria</th>
                </tr>
                <?php foreach ($categorias as $categoria) : ?>
                <tr>
                    <td><?= $categoria['nome'] ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</section>

