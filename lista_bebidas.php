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
    <?php
      include('menu.php');
    ?>
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