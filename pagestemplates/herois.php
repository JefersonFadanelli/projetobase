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

        <div class="contato-titulo">
            <div class="row clearfix">
                <div class="col-md-6">
                    <h1>Heróis</h1>
                </div>
                <?php if($this->session->userdata("usuario_logado")) : ?>
                <div class="col-md-6">
                    <a href="herois/formulario"><button class="btn btn-danger" style="float: right">Cadastrar Novo Herói</button></a>
                </div>
                <?php endif; ?>
            </div>
            <hr class="contato-hr">
            <p class="descricao-contato">Listagem completa de heróis disponíveis no jogo.</p>
        </div>

        <div class="heroi-page">
            <div class="row clearfix">

                <?php foreach ($herois as $heroi) :

                    // Substituir nomes com espaços por traços -
                    $novoNome = preg_replace('/[ -]+/' , '-' , $heroi['nome']);

                    ?>

                <div class="col-md-2">
                    <img src="assets/images/herois/<?= $heroi['nome_imagem'] ?>" alt="" style="width: 100%"><br>
                    <a href="herois/visualizar/<?= $heroi['id']."/".$novoNome ?>"><?= $heroi['nome'] ?></a>
                </div>
                <?php endforeach ?>
                <!-- COL 6 // COL 6 // COL 6 // COL 6 // COL 6 // COL 6 //  -->
            </div>
        </div>
    </div>
</section>
