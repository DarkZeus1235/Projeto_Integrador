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
  <link rel="icon" href="Imagens/vikingpinguço.png">
  <title>Taverna de Valhalla</title>
</head>

<body>
  <?php
  include('menu.php');
  ?>
  <div class="container">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <?php
    if (isset($_SESSION['nome'])) {
    ?>

      <h1>Bem-Vindo à Taverna de Valhalla
        <?php echo $_SESSION['nome']; ?>
      </h1>
    <?php

    }
    ?>



    <h1 id="h1-index">Produtos em Destaque</h1>

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
            <a href="comprar.php?id=<?php echo $bebidas['id_bebida'] ?>" id="textc" class="btn custom-btn"> Comprar Agora</a>
          </div>
        </div>

        <!-- Fim do card -->

      <?php
      }


      ?>

    </div>

    <?php include("rodape.php") ?>
  </div> <!-- Fim do Container -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>