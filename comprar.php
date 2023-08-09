<?php
  include("conexao.php");

  if(isset($_GET["id"])){
    $id_bebida = $_GET["id"];
  
    $consultar_banco = "SELECT * FROM cadastro_bebidas WHERE id_bebida = $id_bebida";
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
    include('menu.php');
  ?>
  </div>
        <?php
        while($bebidas = $retorno_consulta -> fetch_assoc()){

        ?>
    <div id="quad"> 
        <h2 class="pedi">Informações do Produto</h2>
        <img id="img-pedi" src="<?php echo $bebidas['arquivo_caminho'];?>" alt="">
        <h3 class="text-pedi"><?php echo $bebidas['nome_bebida'];?></h3>
        <h4><span class="span-comp">Descrição:</span> <?php echo $bebidas['descricao']; ?></h4>
        <h4><span class="span-comp">Estoque Disponível:</span> <?php echo $bebidas['quantidade'];?></h4>
        <h4><span class="span-comp">Valor:</span> <?php echo $bebidas['valor'];?></h4>
        <button type="button" id="botao-comp" class="btn btn-success">Comprar</button>
        <button type="button" id="botao-car" class="btn btn-primary">Adicionar ao carrinho</button>
        <div id="quad2"></div>
        <h2 class="pedi">Formas de Pagamento</h2>
        <a href="#"><img src="Imagens/iconepix.png" alt="" width="100"></a>
        <a class="text-pedi" href="#"><h3 class="text-pedi">PIX</h3></a>
        <div id="boleto-icon">
          <a href="#"><img src="Imagens/boletoicon.png" alt="" width="100"></a>
          <a class="text-pedi" href="#"><h3 class="text-pedi">Boleto</h3></a>
        </div>
        <div id="mastericon">
          <a href="#"><img src="Imagens/mastercardicon.png" alt="" width="100"></a>
          <a class="text-pedi" href="#"><h3 class="text-pedi">Débito</h3></a>
        </div>
        <div id="visaicon">
          <a href="#"><img src="Imagens/visaicon.png" alt="" width="100"></a>
          <a class="text-pedi" href="#"><h3 class="text-pedi">Crédito</h3></a>
        </div>
    </div>
<?php
  }
?>

    <!--
      <h3 class="aviso-compra">A compra só será realizada quando o pagamento for confirmado.</h3>
    -->
    
  
    </body>
</html>