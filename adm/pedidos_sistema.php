<?php
include('conexao.php');
require('protect/protect_adm.php');

if (!isset($_SESSION)) {
    session_start();
}

$consultar_banco = "SELECT * FROM pedidos";

$retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
$quantidade_cadastros = $retorno_consulta->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dieimes.css">
    <link rel="stylesheet" href="css/menu_dieimes.css">
    <link rel="icon" href="Imagens/icon.png">
    <title>Pedidos</title>
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div id="alinhar_dashboard" class="table-responsive"> <!-- Adicione a classe 'table-responsive' para tornar a tabela responsiva -->
                <h2>Pedidos feitos no Sistema:</h2>
                <div class="table-responsive">
                    <table id="table" class="table table-striped">
                        <thead> <!-- Adicione um cabeçalho de tabela -->
                            <tr>
                                <th>ID do Pedido:</th>
                                <th>Nome:</th>
                                <th>Email:</th>
                                <th>Pedido:</th>
                                <th>Valor:</th>
                                <th>Funcionalidades:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($logins = $retorno_consulta->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $logins['id_pedido']; ?></td>
                                    <td><?php echo $logins['nome']; ?> </td>
                                    <td><?php echo $logins['email']; ?> </td>
                                    <td><?php echo $logins['pedido']; ?></td>
                                    <td><?php echo $logins['valor']; ?></td>
                                    <td class="text-center">
                                        <a id="butao-adm" class="btn btn-danger" href="deletar.php?codigo_cadastro=<?php echo $logins['id_mensagem']; ?>">Deletar</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
        include('rodape.php');
        ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>