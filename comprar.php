<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="Imagens/vikingpinguço.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taverna de Valhalla</title>
    </head>
    <body>

    <div class="menu-bar">
    <img src="img/vikingpinguço.png" alt="" width="90px">
    <h1 class="logo">𝓣𝓪𝓿𝓮𝓻𝓷𝓪 𝓭𝓮 <span>𝓥𝓪𝓵𝓱𝓪𝓵𝓵𝓪</span></h1>
    <ul>
      <li><a href="#">Início</a></li>
      <li><a href="#">Promoções</a></li>
      <li><a href="#">Novidades</a>
      <li><a href="#">+ Vendidos <i class="bi bi-caret-down"></i></a>

        <?php
        /* Aqui precisa colocar uma condição (Tela de adm) */
        ?>


        <div class="dropdown-menu">
          <ul>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Portfolio</a></li>
            <li>
              <a href="#">Outros <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                </svg></a>

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
      <li><a href="#">Fale Conosco</a></li>
      <?php
      if (!isset($_SESSION['nome'])) {
      ?>

        <li><a href="login.php">Entrar | </a><a href="cadastro.php">Cadastrar</a></li>
      <?php

      }
      ?>
      <div class="sair">
        <?php
        if (isset($_SESSION['nome'])) {
        ?>

          <li><a id="logout" href="logout.php">Sair</a></li>
        <?php

        }
        ?>
      </div>
      </li>

    </ul>
  </div>

    <div id="quad">
        <h2 class="pedi">Informações do seu pedido</h2>
        <img id="img-pedi" src="img/vikingpinguço.png" alt="">
        <h3 class="text-pedi">Aqui aparecerá as informações do pedido do cliente.</h3>
        <div id="quad2"></div>
        <h2 class="pedi">Formas de Pagamento</h2>
        <img src="img/iconepix.png" alt="" width="100">
        <h3 class="text-pedi">PIX</h3>
        <div id="boleto-icon">
          <img src="img/boletoicon.png" alt="" width="100">
          <h3 class="text-pedi">Boleto</h3>
        </div>
        <img src="img/mastercardicon.png" alt="" width="100">
        <h3 class="text-pedi">Débito</h3>
        <img src="img/visaicon.png" alt="" width="100">
        <h3 class="text-pedi">Crédito</h3>

        
    </div>
        
    </body>
</html>