<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/menu_dieimes.css">
    <link rel="stylesheet" href="css/dieimes.css">
    <title>PIX</title>
</head>
<body>
<?php
        include("menu.php");
    ?>
    <br>
    <div class="pix_card">
        <h1>Pagamento PIX</h1>
        <form action="" method="POST">
            <label for="chave_pix">Chave PIX:</label>
            <input class="ldc" type="text" name="chave_pix"  required maxlength="80"><br /><br />

            <label for="valor">Valor:</label>
        <input class="ldc" type="text" name="valor" required><br><br>

            <button id="butão" class="but-cart" type="submit">Comprar</button>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
        include('rodape.php');
    ?>
    <script src="zere.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
