<?php
include('../static/conexao.php');

require('../protect/protect_adm.php');

if (!isset($_SESSION)) {
    session_start();
}

$consultar_banco = "SELECT * FROM cadastro";

$retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
$quantidade_cadastros = $retorno_consulta->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard de Administradores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/dieimes.css">
    <link rel="stylesheet" href="../css/menu_dieimes.css">
    <link rel="icon" href="../Imagens/icon.png">
</head>

<body>
    <?php
    include('../static/menu.php');
    ?>
    <br>
    <br>
    <main>
        <h2>Bem-vindo ao Dashboard de Administradores!</h2>
        <h2 id="text-align"><?php echo $_SESSION['nome'];?></h2>
    </main>
    <div class="container-fluid">
        <div class="row-fluid">
        <div class="card-group">
  <div class="card">
    <img href="contas_sistema.php" src="../Imagens/Viking_conta_resized.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Contas Cadastradas no Sistema.</h5>
      <p class="card-text">Verificar todas as contas cadastradas no sistema.</p>
      <button id="butao" class="custom-btn"><a id="contas" href="contas_sistema.php">Contas no Sistema</a></button>
    </div>
    
  </div>
  <div class="card">
    <img href="mensagens_sistema.php" src="../Imagens/Viking_contato.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mensagens de Contato</h5>
      <p class="card-text">Verificar todas as mensagens de contato enviadas pelo formulário.</p>
      <button id="butao" class="custom-btn"><a id="contas" href="mensagens_sistema.php">Mensagens de Contato</a></button>
    </div>
    
  </div>
  <div class="card">
    <img href="pedidos_sistema.php" src="../Imagens/Viking_compra.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pedidos</h5>
      <p class="card-text">Ver todos os pedidos realizados.</p>
      <button id="butao2" class="custom-btn"><a id="contas" href="pedidos_sistema.php">Pedidos</a></button>
    </div>
   
  </div>
</div>
        </div>
    </div>
    <?php 
        include('../static/espacamento.php');
    ?>
    <?php
    include('../static/rodape.php');
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>