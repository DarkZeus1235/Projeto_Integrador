<?php
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Cadastro</title>
</head>

<body>
<?php
        include("menu.php");
    ?>
    <div class="login">
        <h1 id="tit-cart">Cadastrando Cartão</h1>
        <form  id="cadastroForm">
            <input class="ldc" type="text" name="titular" placeholder="Titular" required maxlength="80"><br /><br />
            <input class="ldc"  type="text" name="numero_cartao" id="ndcInput" maxlength="22" oninput="formatarNDC()" placeholder="Numero do Cartão" required> <br><br>
            <input class="ldc" type="text" name="data_validade" id="valInput" maxlength="5" oninput="formatarVAL()" placeholder="Validade" required> <br><br>
            <input class="ldc"  type="password" name="cvv" placeholder="CVV" id="cvvInput" oninput="formatarCVV()" required maxlength="3"> <br /><br />
            <input id="confirm" class="btn btn-success" type="submit" name="btn-cadastrar" value="Confirmar">
            <input id="limpar"  class="btn btn-danger" type="reset" value="limpar">
        </form>
        <div id="resultado"></div>

        <script src="zere.js"></script>
    </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>