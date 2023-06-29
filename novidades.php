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
    <div class="menu-bar">
    <img src="img/vikingpinguço.png" alt="" width="90px">
    <h1 class="logo">𝓣𝓪𝓿𝓮𝓻𝓷𝓪 𝓭𝓮 <span>𝓥𝓪𝓵𝓱𝓪𝓵𝓵𝓪</span></h1>
    <ul>
      <li><a href="#">Início</a></li>
      <li><a href="#">Promoções</a></li>
      <li><a href="#">Novidades</a>
      <li><a href="carrinho.php"><i class="bi bi-basket"></i></a></li>
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
    <div class="container">
        <h1>Confira as nossas atualizações! ! !</h1>
    <div class="card w-75 mb-3">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    </div>
    </div>

    <div class="card w-75 mb-3">
    <div class="card-body">
        <h5 class="card-title">Novas marcas de vinho, whisky e vodka disponíveis!!</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    </div>
    </div>
  </div>
    </body>
</html>