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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="css/menu_dieimes.css">
  <link rel="stylesheet" href="css/dieimes.css">
  
  <link rel="icon" href="Imagens/icon.png">
  <title>Taverna de Valhalla</title>


</head>

<body>
  <?php
  include('menu.php');
  ?>
  <div class="container my-5">
    <h1 class="text-center mb-5">Produtos em Destaque</h1>

    <?php if (isset($_SESSION['nome'])) : ?>
      <h2 class="text-center mb-4">Bem-Vindo à Taverna de Valhalla <?php echo $_SESSION['nome']; ?></h2>
    <?php endif; ?>

    <div class="row">
      <?php while ($bebidas = $retorno_consulta->fetch_assoc()) : ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="<?php echo $bebidas['arquivo_caminho'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $bebidas['nome_bebida'] ?></h5>
              <p class="card-text"><?php echo $bebidas['descricao'] ?></p>
              <h5 class="card-text"><?php echo $bebidas['valor']; ?></h5>
              <div class="text-center mt-4">
                <a href="comprar.php?id=<?php echo $bebidas['id_bebida'] ?>" class="btn custom-btn">Comprar Agora</a>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

  </div>
  <?php include 'rodape.php'; ?>

  


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>

</html>