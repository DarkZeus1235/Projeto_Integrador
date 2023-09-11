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

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu_dieimes.css">
    <link rel="stylesheet" href="css/dieimes.css">
    <title>Cadastro de Champagne</title>

</head>

<body>
    <?php
    include("menu.php");
    ?>

    <div class="continer">
        <h2>Selecione um Meio de Pagamento</h2>
        <div class="divo">
            <form method="post" action="opcao_esc.php">
                <div class="payment-option">
                    <input type="radio" id="credit-card" name="metodo" value="cartao">
                    <img src="https://i.ibb.co/vdbBkgT/mastercard.jpg" alt="">
                    <label for="credit-card">Débito</label>

                </div>
        </div>
        <div class="divo">
            <div class="payment-option">
                <input type="radio" id="pix" name="metodo" value="pix">
                <img src="imagens/logo-pix-png-icone-520x520.png" alt="" width="25px">
                <label for="Pix">Pix</label>

            </div>
        </div>
        <div class="divo">
            <div class="payment-option">
                <input type="radio" id="bolet" name="metodo" value="boleto">
                <img src="imagens/boleto.png" alt="">
                <label for="bank-transfer">Boleto</label>

            </div>
        </div>
        <button class="but" type="submit">Continuar</button>
        </form>
    </div>
    <?php
        include('espacamento.php')
    ?>
    <?php
    include("rodape.php");
    ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>