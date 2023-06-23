<?php
    include("conexao.php");

    include("protect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="Imagens/vikingpinguço.png">
    <title>Minha Conta - Taverna de Valhalla</title>
</head>
<body>
<div class="menu-bar">
        <img src="Imagens/vikingpinguço.png" alt="" width="90px">
        <h1 class="logo">𝓣𝓪𝓿𝓮𝓻𝓷𝓪 𝓭𝓮 <span>𝓥𝓪𝓵𝓱𝓪𝓵𝓵𝓪</span></h1>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="#">Promoções</a></li>
            <li><a href="#">Novidades</a>
            <li><a href="#">+ Vendidos <i class="bi bi-caret-down"></i></a>

                <?php
                /* Aqui precisa colocar uma condição (Tela de adm) */
                ?>

<div class="dropdown-menu">
                    <ul>
                        <li><a href="vinhos.php">Vinhos</a></li>
                        <li><a href="whisky.php">Uísque</a></li>
                        <li>
                            <a href="#">Outros <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg></a>

                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="conhaque.php">Conhaque</a></li>
                                    <li><a href="rum.php">Rum</a></li>
                                    <li><a href="champ.php">Champanhe</a></li>
                                    <li><a href="vodka.php">Vodka</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Fale Conosco</a></li>
            <?php
            if (!isset($_SESSION['nome'])) {
            ?>

                <li><a href="login.php">Entrar | </a><a href="cadastro.php">Cadastrar</a></li>
            <?php

            }
            ?>
            <div class="sair">
                <?php
                if (isset($_SESSION['nome'])) {
                ?>

                    <li><a id="logout" href="logout.php">Sair</a></li>
                <?php

                }
                ?>
            </div>
            </li>

        </ul>
    </div>
<div class="container">
<div>
<h2 id="min-conta" class="text-center titMinhaConta">MINHA CONTA</h2>
</div>
<div class="wrap-page">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="wrap-central">
<div class="row">
<ul class="list-unstyled ctrl_opc row ctrl_opc_fade">
<li id="cardi1" class="col-lg-3 col-sm-4 col-xs-3">
<a href="/Central/MeuCadastro.obj" class="boxItensCentral">
<img src="https://img.terabyteshop.com.br/central/meu_cadastro.png" alt="Meu cadastro">
</a>
<p>Meu cadastro</p>
</li>
<li id="cardi2" class="col-lg-3 col-sm-4 col-xs-3">
<a data-toggle="modal" data-target="#trocarsenha" class="boxItensCentral" id="triggerTrocaSenha">
<img src="https://img.terabyteshop.com.br/central/trocar_senha.png" alt="Trocar senha">
</a>
<p>Trocar senha</p>
</li>
<li id="cardi3" class="col-lg-3 col-sm-4 col-xs-3">
<a href="/Central/MeusPedidos.obj" class="boxItensCentral">
 <img src="https://img.terabyteshop.com.br/central/meus_pedidos.png" alt="Meus pedidos">
</a>
<p>Meus pedidos</p>

<li class="col-lg-3 col-sm-4 col-xs-3">
<a id="cardi4" href="/Central/MeusEnderecos.obj">
<img src="https://img.terabyteshop.com.br/central/meus-enderecos.png" alt="Meus Endereços">
</a>
<p>Meus Endereços</p>
</li>
<li cardi5 class="col-lg-3 col-sm-4 col-xs-3">
<a href="logout.php" id="logout">
<img src="https://img.terabyteshop.com.br/central/sair.png" alt="Sair">
</a>
<p>Sair</p>
</li>
</ul>
</div>
</html>