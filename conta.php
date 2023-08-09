<?php
    include("conexao.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="Imagens/vikingpinguço.png">
    <title>Minha Conta - Taverna de Valhalla</title>
</head>
<body>
<?php
    include('menu.php');
?>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>