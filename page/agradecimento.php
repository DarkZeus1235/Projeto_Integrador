<?php

include('../static/conexao.php');


if(!isset($_SESSION)){
session_start();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu_dieimes.css">
    <link rel="stylesheet" href="../css/dieimes.css">
    <link rel="icon" href="Imagens/icon.png">
    <title>Agradecimento pela Compra</title>
</head>

<body>
    <?php
    include('../static/menu.php');
    ?>
    <?php
    include('../static/espacamento.php');
    ?>
    <main>
        <p>Obrigado por fazer sua compra na Taverna de Valhalla. Seu pedido foi processado com sucesso!</p>

        <h2>Detalhes do Pedido</h2>
        <h3>Nome do Produto: Whisky The Macallan David Carson Concept Nº3 - 700 ml</h3>
        <h3>Quantidade: 1</h3>
        <ul>
        </ul>
        <p><strong>Total da Compra: 3.180,90</strong> R$
        </p>
        <p>Os itens do seu pedido serão enviados para o endereço que você forneceu durante a criação de sua conta. Você
            receberá um e-mail de confirmação em breve com mais informações sobre o envio.</p>
    </main>
    <?php
    include('../static/espacamento.php');
    ?>
    <?php
    include('../static/rodape.php');
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</html>