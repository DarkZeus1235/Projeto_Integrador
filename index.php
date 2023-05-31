<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taverna de Valhalla</title>
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

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>