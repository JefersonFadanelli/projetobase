<?php
/**
 * Created by PhpStorm.
 * User: lucas genari
 * Date: 29/08/2018
 * Time: 11:35
 */
?>

<section class="contato">
    <div class="container">
        <div class="banner">
            <img src="assets/images/bannercontato.png" alt="" style="width: 100%;">
        </div>

        <div class="contato-titulo">
            <h1>Fale Conosco</h1>
            <hr class="contato-hr">
            <p class="descricao-contato">Para entrar em contato, utilize o formulário abaixo:</p>
        </div>

        <div class="contato-form">
            <div class="row clearfix">
                <div class="col-md-7">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nome" class="descricao-contato">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                        <div class="form-group">
                            <label for="email" class="descricao-contato">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="mensagem" class="descricao-contato">Mensagem</label>
                            <textarea name="mensagem" id="mensagem" cols="20" rows="7" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-danger">Enviar Mensagem</button>
                    </form>
                </div>
                <div class="col-md-5">
                    <img src="assets/images/contatoform.png" alt="" style="width: 100%";>
                </div>
            </div>
        </div>
    </div>
</section>