<?php
include("conexao.php");

if (isset($_POST['bt_nome'])) {
    if (isset($_FILES['bt_arquivo'])) {
        $arquivo = $_FILES['bt_arquivo'];
        if ($arquivo['size'] > 15000000) {
            die("Arquivo muito grande!! Max: 15MB");
        }
        if ($arquivo['error']) {
            die("Falha ao enviar arquivo");
        }
    }

    var_dump($arquivo);

    $nome = $_POST['bt_nome'];

    $pasta = "recebidos/";
    $nome_arquivo = $arquivo['name'];
    $novo_nome_arquivo = uniqid();
    $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));



    $caminho = $pasta . $novo_nome_arquivo . "."  . $extensao;


    /*
        if($extensao != "jpg"){
            die("Tipo de arquivo não aceito");
        }
        */

    $nome = $_POST['bt_nome'];
    $quantidade = $_POST['bt_quantidade'];
    $valor = $_POST['bt_valor'];
    $descricao = $_POST['bt_descricao'];

    $deucerto = move_uploaded_file($arquivo["tmp_name"], $caminho);

    if ($deucerto) {
        $mysqli->query("INSERT INTO cadastro_champ (nome_bebida, quantidade, descricao,arquivo_caminho, valor) 
                values ('$nome', '$quantidade', '$descricao','$caminho', '$valor')") or die($mysqli->error);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de Champagne</title>
    <style>
        /*
        .pag {
            background-color: rgba(255, 255, 255, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -40%);
            padding: 40px;
            
            border-radius: 5px;
            color: white;
            border: 2px solid black;
            padding-inline-start: 500px;
        }
        .cax {
            background-color: rgba(255, 255, 255, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 50%);
            padding: 40px;
            padding-inline-start: 500px;
            
            color: white;
            border: 2px solid black;
        }
        .coc {
            background-color: rgba(255, 255, 255, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 140%);
            padding: 40px;
            padding-inline-start: 500px;
            
            color: white;
            border: 2px solid black;
        }
        .cup {
            background-color: rgba(255, 255, 255, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 50%);
            padding: 40px;
            padding-inline-start: 500px;
            
            color: white;
            border: 2px solid black;
        }
        */
        .card {
            background-color: rgba(255, 255, 255, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 5px;
            color: white;

        }

        .lis {
            border: 1px solid silver;
            padding: 20px;

        }

        .lis:hover {
            background-color: silver;
            color: silver;
        }

        h7 {
            color: black;
        }
/*
        .container {
           display: flex;
           width: 100%;
           justify-content: space-around;
        }
        @media screen and(max-widht:728px){
            .container{
                width: 100%;
                flex-direction: column;
            }
            
        }
        */
        .tit {
            margin-top: -2px;
            margin-left: 50px;
        }
        .bot {
            margin-top: 300px;
            margin-left: 60px;
        }
    </style>
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


                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li>
                            <a href="#">Team <i class="fas fa-caret-right"></i></a>

                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="#">Team-1</a></li>
                                    <li><a href="#">Team-2</a></li>
                                    <li><a href="#">Team-3</a></li>
                                    <li><a href="#">Team-4</a></li>
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
    <div class="tit">
        <h1>Como você deseja pagar?</h1>
    </div>
    <div class="container">
        <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush">
                <label class="lis"><input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="CONSUMER_CREDITS" required="" aria-invalid="false">
                    <img src="imagens/credit-card.svg" width="20px">
                    <h7>Crédito</h7>
                </label>
                <label class="lis"><input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="CONSUMER_CREDITS" required="" aria-invalid="false">
                    <img src="imagens/logo-pix-png-icone-520x520.png" width="20px">
                    <h7>Pix</h7>
                </label>
                <label class="lis"><input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="CONSUMER_CREDITS" required="" aria-invalid="false">
                    <img src="imagens/credit-card.svg" width="20px">
                    <h7>Débito</h7>
                </label>
                <label class="lis"><input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="CONSUMER_CREDITS" required="" aria-invalid="false">
                    <img src="imagens/boleto.png" width="20px">
                    <h7>Boleto</h7>
                </label>
        </div>
    </div>
    <div class="bot">
        <button type="button" class="btn btn-primary">continuar</button>
        </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>