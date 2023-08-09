<?php
        include("conexao.php");

        include("protect.php");

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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="Imagens/vikingpinguço.png">
        <title>Lista de Bebidas</title>
    </head>

    <body>
    <div class="menu-bar">
    <img src="Imagens/vikingpinguço.png" alt="" width="90px">
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
        <div class="container">
            <h1>Lista de Bebidas - Taverna de Valhalla</h1>
            <table class="table table-striped">
                <tr>
                    <th>Nome da Bebida:</th>
                    <th>Quantidade</th>
                    <th>Descricao:</th>
                    <th>Arquivo</th>
                    <th>Valor</th>
                    <th>Funcionalidades:</th>
                </tr>
                <tr>
                    <?php
                        while($bebidas = $retorno_consulta -> fetch_assoc()){
                       ?>
                       <tr>
                        <td><?php echo $bebidas['nome_bebida'];?> </td>
                        <td><?php echo $bebidas['quantidade'];?> </td>
                        <td><?php echo $bebidas['descricao'];?> </td>
                        <td><?php echo $bebidas['arquivo_caminho'];?> </td>
                        <td><?php echo $bebidas ['valor'];?></td>
                        <td><a class="btn btn-danger" href="deletar.php?codigo_bebida=<?php echo $bebidas['id_bebida']; ?>">Deletar</a></td>
                    </tr>
                    <?php
                    }


                    ?>
                </tr>
            </table>
            <a class="btn btn-warning" href="index.php">Voltar para Início</a>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>