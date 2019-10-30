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
            <h1>Nova Categoria</h1>
            <hr class="contato-hr">
            <p class="descricao-contato">Formulário de Cadastro de Categorias.</p>
        </div>

        <div class="heroi-page">
            <div class="jumbotron" style="background-color: #1B1D1D;">
                <form action="categorias/novo" enctype="multipart/form-data" method="post">

                    <div class="form-group">
                        <label for="nome">Nome da Categoria</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>

                    <button class="btn btn-danger">Cadastrar Categoria</button>

                </form>
            </div>
        </div>
    </div>
</section>
