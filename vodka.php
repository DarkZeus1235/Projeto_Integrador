<?php
include("conexao.php");

if (!isset($_SESSION)) {
    session_start();
}

$consultar_banco = "SELECT * FROM cadastro_vodka";

$retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
$quantidade_pedidos = $retorno_consulta->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="icon" href="Imagens/vikingpinguço.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="Imagens/vikingpinguço.png">
  <title>Vodka - Taverna de Valhalla</title>
</head>

<body>
<?php
        include("menu.php");
    ?>
    <div class="container">
        <!-- Onde vai aparecer as pedidas após cadastradas no banco de dados -->
        <div class="row">
            <?php

            while ($bebidas = $retorno_consulta->fetch_assoc()) {
                //var_dump($bebidas);
                ?>

                <!-- Card -->
                <div class="card" id="testec" style="width: 18rem;">
                    <img src="<?php echo $bebidas['arquivo_caminho'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $bebidas['nome_bebida'] ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $bebidas['descricao'] ?>
                        </p>
                        <h5 id="card-text" class="card-text">
                            <?php echo $bebidas['valor']; ?>
                        </h5>
                        <a href="comprar_vodka.php?id=<?php echo $bebidas['id_vodka'];?>" id="textc" class="btn btn-success">Comprar Agora</a>
                    </div>
                </div>
                <!-- Fim do card -->

                <?php
            }


            ?>
        </div> <!-- Fim do row -->
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

</html>