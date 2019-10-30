<?php
/**
 * Created by PhpStorm.
 * User: lucas genari
 * Date: 28/08/2018
 * Time: 16:52
 */
?>

<section class="nav-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-image: linear-gradient( to top, #171717, #111111, #040404, #010101 );">
        <div class="container">
        <a class="navbar-brand" href="home"><img src="assets/images/logodota.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home" style="color: #86817D">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="herois" style="color: #86817D">Heróis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categorias" style="color: #86817D">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato" style="color: #86817D">Contato</a>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-1" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-danger" type="submit">Pesquisar</button>
            </form>
            <?php if($this->session->userdata("usuario_logado")) : ?>
                <a href="usuarios/logout" class="btn btn-defalut" style="color: #86817D;">Sair</a>
            <?php else : ?>
                <a href="usuarios/login" class="btn btn-defalut" style="color: #86817D;">Login</a>    <a href="usuarios/cadastrar" class="btn btn-defalut" style="color: #86817D;">Cadastrar</a>
            <?php endif ?>
        </div>
        </div>
    </nav>
</section>
