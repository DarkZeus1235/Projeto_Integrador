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
        .container {
            margin-left: -760px;
            margin-top: -220px;
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
    <?php
        include("menu.php");
    ?>
    <div class="tit">
        <h1>Como você deseja pagar?</h1>
    </div>
    <div class="container">
        <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush">
                <label class="lis"><input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="CONSUMER_CREDITS" required="" aria-invalid="false">
                    <img src="img/credit-card.svg" width="20px">
                    <h7>Crédito</h7>
                </label>
                <label class="lis"><input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="CONSUMER_CREDITS" required="" aria-invalid="false">
                    <img src="img/logo-pix-png-icone-520x520.png" width="20px">
                    <h7>Pix</h7>
                </label>
                <label class="lis"><input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="CONSUMER_CREDITS" required="" aria-invalid="false">
                    <img src="img/credit-card.svg" width="20px">
                    <h7>Débito</h7>
                </label>
                <label class="lis"><input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="CONSUMER_CREDITS" required="" aria-invalid="false">
                    <img src="img/boleto.png" width="20px">
                    <h7>Boleto</h7>
                </label>
        </div>
    </div>
    <div class="bot">
        <button type="button" class="btn btn-primary">Continuar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
        </div>
    
    <div class="quadr">
        <h2>Informações do Produto</h2>
        <img id="img-pedi" src="" alt="">
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>