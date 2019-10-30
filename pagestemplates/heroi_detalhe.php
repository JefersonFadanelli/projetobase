<?php
/**
 * Created by PhpStorm.
 * User: lucas genari
 * Date: 29/08/2018
 * Time: 11:58
 */
?>

<section class="herois">
    <div class="container">
        <div class="banner">
            <img src="assets/images/bannerherois.jpg" alt="" style="width: 100%;">
        </div>

        <h1 class="heroiH1 text-center">Detalhe de herói</h1>

        <div class="heroi-page">
            <div class="row clearfix">
                <div class="col-md-2">
                    <h4 class="heroi-name"><?= $heroi['nome'] ?></h4>
                    <img src="assets/images/herois/<?= $heroi['nome_imagem'] ?>" alt="" style="width: 100%"><br>
                    <small>Foto: Site DotaBuff</small>
                </div>
                <div class="col-md-10">
                    <h4 class="heroi-bio">Biografia</h4>
                    <p><?= $heroi['biografia'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
