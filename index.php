<?php
include("conexao.php");

if (!isset($_SESSION)) {
  session_start();
}

$consultar_banco = "SELECT * FROM cadastro_bebidas";

$retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
$quantidade_pedidos = $retorno_consulta->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" href="Imagens/vikingpinguço.png">
  <title>Taverna de Valhalla</title>
</head>

<body>
  <?php
  include('menu.php');
  ?>
  <div class="container">
    <h1 id="h1-index">Produtos em Destaque</h1>
    <?php
    if (isset($_SESSION['nome'])) {
    ?>
      <div class="bem-vindo">
        <h1>Bem-Vindo à Taverna de Valhalla
          <?php echo $_SESSION['nome']; ?>
        </h1>
      <?php

    }
      ?>

      </div>

      <!-- Onde vai aparecer as pedidas após cadastradas no banco de dados -->
      <div id="rowtest" class="row">
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
              <a href="comprar.php?id=<?php echo $bebidas['id_bebida'] ?>" id="textc" class="btn custom-btn"> Comprar Agora</a>
            </div>
          </div>
          <!-- Fim do card -->

        <?php
        }


        ?>

      </div>

  </div> <!-- Fim do row -->
  </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>