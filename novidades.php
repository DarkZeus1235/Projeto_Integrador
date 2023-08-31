<?php
    include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Novidades de Valhalla</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <?php
        include('menu.php');
    ?>
    <div class="container">
        <h1>Confira as nossas atualizações! ! !</h1>
    <div class="card w-75 mb-3">
    <div class="card-body">
        <h5 class="card-title">Novas marcas de vinho, whisky e vodka disponíveis!!</h5>
        <p class="card-text">Adicionados novos lotes de vinho Caballo Loco e Zuccardi, whisky Johnny Walker e Buffalo Trace, e vodka Absolute e Smirnoff</p>
    </div>
    </div>

    <div class="card w-75 mb-3">
    <div class="card-body">
        <h5 class="card-title">Nova página de novidades!!</h5>
        <p class="card-text">Adicionada uma página para informar de novas informações de possíveis promoções e novos produtos!!(Necessita adicionar as seguintes coisas no banco de dados: ID atualização, título, conteúdo)</p>
    </div>
    </div>
  </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>