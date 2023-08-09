<?php
  include("conexao.php");

  if(isset($_GET["id"])){
    $id_bebida = $_GET["id"];
  
    $consultar_banco = "SELECT * FROM cadastro_uisque WHERE id_uisque = $id_bebida";
  }
  
  
  
  $retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
  $quantidade_pedidos = $retorno_consulta->num_rows;
  
?>
<!DOCTYPE html>
<html lang="pt-br">

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

<?php
        include("menu.php");
    ?>
  <?php
    while($bebidas = $retorno_consulta -> fetch_assoc()){
   ?>
  <div class="container">
    <h1><?php echo $bebidas['nome_bebida']; ?></h1>
        <img src=<?php echo $bebidas['arquivo_caminho'];?>>
  </div>
  <?php
      }
  ?>
      </body>
  </html>
    