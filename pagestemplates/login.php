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
                    <h2>Entrar</h2>
                    <form action="usuarios/logar_usuarios" method="post">

                        <div class="form-group">
                            <label for="username">Nome de Usuário</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-danger">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
