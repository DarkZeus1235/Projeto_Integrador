<?php
include('../static/conexao.php');

if(!isset($_SESSION)){
  session_start();
}

if (isset($_GET["id"])) {
  $id_bebida = $_GET["id"];

  $consultar_banco = "SELECT * FROM cadastro_bebidas WHERE id_bebida = $id_bebida";
}

$retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
$quantidade_pedidos = $retorno_consulta->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dieimes.css">
  <link rel="stylesheet" href="../css/menu_dieimes.css">
  <link rel="icon" href="../Imagens/Icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taverna de Valhalla</title>
</head>

<body>

  <?php
  include('../static/menu.php');
  ?>
  <div id="coontainer" class="container">
    <?php
    while ($bebidas = $retorno_consulta->fetch_assoc()) {

    ?>
      <br>
      <br>
      <br>
      <main class="product">
        <div class="product-image">
          <img src="../<?php echo $bebidas['arquivo_caminho']; ?>" alt="Produto Exemplo">
        </div>
        <div class="product-info">
          <h2><?php echo $bebidas['nome_bebida']; ?></h2>
          <p class="product-description"><?php echo $bebidas['descricao']; ?></p>
          <p class="product-price"><?php echo $bebidas['valor']; ?></p>
          <p class="product-price">Estoque Disponível: <?php echo $bebidas['quantidade']; ?></p>
          <div class="product-actions">
            <a href="metodo_pag.php" class="custom-btn" class="buy-now">Comprar Agora</a>
            <span class="favorite">&#9733;</span> <!-- Ícone de estrela para favoritar -->
          </div>
        </div>
      <?php
    }
      ?>
      </main>
  </div>
  <?php
  include('../static/espacamento.php');
  ?>
  <?php
  include('../static/rodape.php');
  ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>