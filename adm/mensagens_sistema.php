<?php
include('../static/conexao.php');

require('../protect/protect_adm.php');

if (!isset($_SESSION)) {
    session_start();
}

$consultar_banco = "SELECT * FROM mensagem_formulario_contato";

$retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
$quantidade_cadastros = $retorno_consulta->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Solicitações de Ajuda</title>
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
    </main>
    <div id="contaaiiner" class="container-fluid">
    <div class="row-fluid">
        <div id="alinhar_dashboard" class="table-responsive"> <!-- Adicione a classe 'table-responsive' para tornar a tabela responsiva -->
            <h2>Mensagens Enviadas pelo Sistema:</h2>
            <div class="table-responsive">
            <table id="table" class="table table-striped">
                <thead> <!-- Adicione um cabeçalho de tabela -->
                    <tr>
                        <th>ID da Mensagem:</th>
                        <th>Nome:</th>
                        <th>Email:</th>
                        <th>Mensagem:</th>
                        <th>Funcionalidades:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($logins = $retorno_consulta->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $logins['id_mensagem']; ?></td>
                            <td><?php echo $logins['nome']; ?> </td>
                            <td><?php echo $logins['email']; ?> </td>
                            <td><?php echo $logins['mensagem']; ?></td>
                            <td class="text-center">
                                <a id="butao-adm" class="btn btn-danger" href="../user/deletar_mensagem.php?codigo_mensagem=<?php echo $logins['id_mensagem']; ?>">Deletar</a>
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
    </div>
    <?php
    include('../static/rodape.php');
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>