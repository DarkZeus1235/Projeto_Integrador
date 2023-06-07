<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>ZERE DELAS</title>
    
</head>
<body>
<div class="menu-bar">
    <img src="vikingpinguço.png" alt="" width="90px">
    <h1 class="logo">𝓣𝓪𝓿𝓮𝓻𝓷𝓪 𝓭𝓮 <span>𝓥𝓪𝓵𝓱𝓪𝓵𝓵𝓪</span></h1>
    <ul>
      <li><a href="#">Início</a></li>
      <li><a href="#">Promoções</a></li>
      <li><a href="#">Novidades</a>
      <li><a href="#">+ Vendidos <i class="bi bi-caret-down"></i></a>


        <div class="dropdown-menu">
          <ul>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Portfolio</a></li>
            <li>
              <a href="#">Team <i class="fas fa-caret-right"></i></a>

              <div class="dropdown-menu-1">
                <ul>
                  <li><a href="#">Team-1</a></li>
                  <li><a href="#">Team-2</a></li>
                  <li><a href="#">Team-3</a></li>
                  <li><a href="#">Team-4</a></li>
                </ul>
              </div>

            </li>
          </ul>
        </div>
      </li>
      <li><a href="#">Fale Conosco</a>
        <?php
        if (isset($_SESSION['nome'])) {
        ?>

      <li><a class="btn btn-danger" href="logout.php">Sair</a></li>
    <?php

        }
    ?>
    <li><a id="entrar-cadastrar" href="login.php">Entrar |</a> <a href="cadastro.php">Cadastrar</a>
    </li>

    </ul>
  </div>
  <div class="hero">
    &nbsp;
  </div>
    <div class="card" style="width: 18rem;">
        <img id="image"  src="vin/vinhocompenhage.jpg" class="card-img-top" alt="" width="90">
        <div class="card-body">
          <h5 class="card-title">Champagne Moët Impérial Brut 750ml</h5>
          <p class="card-text">430,00$</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    <div class="card" style="width: 18rem;">
        <img id="image"  src="vin/vinhocompenhagedom.jpg" class="card-img-top" alt="" width="90">
        <div class="card-body">
          <h5 class="card-title">Champagne Dom Pérignon Brut 750ml</h5>
          <p class="card-text">2.153,99$</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    <div class="card" style="width: 18rem;">
        <img id="image"  src="vin/champagneimperiobrut.jpg" class="card-img-top" alt="" width="90">
        <div class="card-body">
          <h5 class="card-title">Champagne Moët Impérial Brut 750ml</h5>
          <p class="card-text">399,99$</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>