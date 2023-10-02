<?php
    include('conexao.php');

    require('protect/protect_adm.php');

    if(!isset($_SESSION)){
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dieimes.css">
    <link rel="stylesheet" href="css/menu_dieimes.css">
    <link rel="icon" href="Imagens/icon.png">
</head>
<body>
    <?php
        include('menu_dashboard.php');
    ?>
    <br>
    <br>
    <div class="container">
    <main>
        <h2>Bem-vindo ao Dashboard de Administradores!</h2>
</div>
        <h2 id="alinhar_dashboard">Contas cadastradas no Sistema: </h2>
        <table class="table table-striped">
            <tr>
                <th>ID da Conta:</th>
                <th>Nome:</th>
                <th>Email:</th>
                <th>Senha:</th>
                <th>Usuário:</th>
                <th>Funcionalidades:</th>
                <th>Funcionalidades:</th>

            </tr>
            <?php
                        while($logins = $retorno_consulta -> fetch_assoc()){
                       ?>
                        <tr>
                        <td><?php echo $logins['id_login'];?></td>
                        <td><?php echo $logins['nome'];?> </td>
                        <td><?php echo $logins['email'];?> </td>
                        <td><?php echo $logins['senha'];?> </td>
                        <td><?php echo $logins['username'];?></td>  
                        <td><a id="butao-adm" class="btn btn-danger" href="deletar.php?codigo_cadastro=<?php echo $logins['id_login'];?>">Deletar</a></td>
                        <td><a id="butao-adm" class="btn btn-primary" href="alterar.php">Alterar</a>
                    </tr>
                    <?php
                    }


                    ?>
        </table>
    </main>
    <?php
        include('rodape.php');
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
