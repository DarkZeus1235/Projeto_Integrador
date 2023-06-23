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
    <link rel="icon" href="Imagens/vikingpinguço.png">
  <title>Rum - Taverna de Valhalla</title>
</head>
<body>
<div class="menu-bar">
        <img src="Imagens/vikingpinguço.png" alt="" width="90px">
        <h1 class="logo">𝓣𝓪𝓿𝓮𝓻𝓷𝓪 𝓭𝓮 <span>𝓥𝓪𝓵𝓱𝓪𝓵𝓵𝓪</span></h1>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="#">Promoções</a></li>
            <li><a href="#">Novidades</a>
            <li><a href="#">+ Vendidos <i class="bi bi-caret-down"></i></a>
<div class="dropdown-menu">
                    <ul>
                        <li><a href="vinhos.php">Vinhos</a></li>
                        <li><a href="whisky.php">Uísque</a></li>
                        <li>
                            <a href="#">Outros <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg></a>

                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="conhaque.php">Conhaque</a></li>
                                    <li><a href="rum.php">Rum</a></li>
                                    <li><a href="champ.php">Champanhe</a></li>
                                    <li><a href="vodka.php">Vodka</a></li>
                                </ul>
                            </div>
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