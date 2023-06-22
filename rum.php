<?php
  include("conexao.php");

  if (!isset($_SESSION)) {
    session_start();
  }
  
  $consultar_banco = "SELECT * FROM cadastro_rum";
  
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
    <link rel="stylesheet" href="css/style.css">
    <title>Taverna de Valhala</title>
</head>
<body>
  <div class="container">
    <!-- Onde vai aparecer as pedidas após cadastradas no banco de dados -->
    <div class="row">
      <?php

      while ($bebidas = $retorno_consulta->fetch_assoc()) {
        //var_dump($bebidas);
      ?>

        <!-- Card -->
        <div id="testec" class="card" style="width: 18rem;">
          <img src="<?php echo $bebidas['arquivo_caminho'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $bebidas['nome_bebida'] ?></h5>
            <p class="card-text"><?php echo $bebidas['descricao'] ?></p>
            <h5 class="card-text"><?php echo $bebidas['valor']; ?></h5>
            <a id="textc" href="comprar_gin.php?id=<?php echo $bebidas['id_gin'];?>" class="btn btn-success">Comprar Agora</a>
          </div>
        </div>
        <!-- Fim do card -->

      <?php
      }


      ?>
    </div> <!-- Fim do row -->
  </div>
<div class="card" style="width: 18rem;">
  <img src="img/rum/zacapa.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rum Zacapa Solera Centenario Gran Reserva 750 ml</h5>
    <p class="card-text">R$ 495,90</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/rum/pyrat.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rum Pyrat Xo Reserve 750 ml</h5>
    <p class="card-text">R$ 296,01</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/rum/appleton.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rum Appleton Estate Reserve Blend 1000 ml</h5>
    <p class="card-text">R$ 329,00</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/rum/angostura.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rum Angostura Reserva 750 ml</h5>
    <p class="card-text">R$ 178,90</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/rum/wildtiger.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rum Wild Tiger India Spiced 700 ml</h5>
    <p class="card-text">R$ 318,00</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/rum/havana.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rum Havana Club Seleccion De Maestros 700 ml</h5>
    <p class="card-text">R$ 479,90</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/rum/kraken.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rum Kraken 750 ml com Kit Copo Kraken</h5>
    <p class="card-text">R$ 239,90</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/rum/bacardi8.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rum Bacardi 8 Anos 750 ml</h5>
    <p class="card-text">R$ 267,80</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/rum/maderas.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rum Dos Maderas 5+3 700 ml</h5>
    <p class="card-text">R$ 275,90</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/rum/captainmorgan.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rum Captain Morgan Dark The Original Jamaica 1000 ml</h5>
    <p class="card-text">R$ 216,39</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>