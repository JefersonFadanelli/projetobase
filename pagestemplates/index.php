<?php
/**
 * Created by PhpStorm.
 * User: lucas genari
 * Date: 28/08/2018
 * Time: 16:56
 */
?>

<section class="page-content">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <img src="assets/images/background.jpg" style="width: 100%;">
            </div>

            <hr>

            <div class="col-md-12" style="margin-top: 35px; color: #86817D">

                <?php if($this->session->flashdata("success")) : ?>
                    <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
                <?php endif ?>

                <?php if($this->session->flashdata("danger")) : ?>
                    <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
                <?php endif ?>

                <div class="jumbotron" style="background-color: #1B1D1D;">
                    <h1 class="display-4">Hello, pessoas!</h1>
                    <p class="lead">Esta é uma simples página apenas para treinar as habilidades do desenvolvimento web. Estamos utilizando HTML5, Bootstrap 4, Framework CodeIgniter e PHP.</p>
                    <hr class="my-4" style="background-color: #e6e6e6">
                    <p>Todas informações imagens usadas aqui são de direitos dos criadores do Dota 2.</p>
                    <a class="btn btn-danger btn-lg" href="herois" role="button">Todos Heróis</a>
                </div>
            </div>

            <hr>

            <div class="col-md-12">
                <h1 style="text-align: center; margin-bottom: 30px; color: #86817D">Últimos Personagens</h1>
                <div class="row clearfix" style="text-align: justify">
                    <?php foreach ($destaques as $destaque) : ?>
                    <div class="col-md-3" style="margin-bottom: 20px;">
                        <div class="card personagem" style="background-color: #1B1D1D; color: #86817D">
                            <img class="card-img-top" src="assets/images/herois/<?= $destaque['nome_imagem'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $destaque['nome'] ?></h5>
                                <p class="card-text"><?= character_limiter($destaque['biografia'], 100) ?></p>
                                <a href="#" class="btn btn-danger">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>