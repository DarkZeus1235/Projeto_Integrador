<?php
include('../static/conexao.php');

if (!isset($_SESSION)) {
    session_start();
}

$consultar_banco = "SELECT * FROM cadastro_bebidas WHERE id_bebida = 35";
$retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
$quantidade_pedidos = $retorno_consulta->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu_dieimes.css">
    <link rel="stylesheet" href="../css/dieimes.css">
    <link rel="icon" href="Imagens/icon.png">
    <title>Somente Cartão</title>
</head>

<body>
    <?php
    include('../static/menu.php');
    ?>
        <?php
            include('../static/espacamento.php');
        ?>
        <center>
  <h1>No momento nosso sistema só aceita cartões de crédito em uma parceria com uma empresa financeira terceirizada...</h1>

  <button class="btn btn-warning"><a id="botao-aviso" href="../user/metodo_pag.php">Voltar para metódo de Pagamento</a></button>
  </center>
  <br>
  <br>
  <br>
  <br>
    <?php
            include('../static/espacamento.php');
        ?>
    <?php
    include('../static/rodape.php');
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>