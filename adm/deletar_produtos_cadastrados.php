<?php
include("../static/conexao.php"); // Arquivo php referente ao banco de dados   

require("../protect/protect_adm.php");

if(!isset($_SESSION)){
    session_start();
}

if (isset($_GET['codigo_bebida'])) {
    $id_bebida = $_GET['codigo_bebida'];
    $sql_consultar = "SELECT * FROM cadastro_bebidas WHERE id_bebida = '$id_bebida'";
    $comando_sql = $mysqli->query($sql_consultar) or die($mysqli->error);
    $logins = $comando_sql->fetch_assoc();

    if (isset($_POST['btn_deletar'])) {

        $sql_deletar = "DELETE FROM cadastro_bebidas WHERE id_bebida = '$id_bebida'";

        $deu_certo = $mysqli->query($sql_deletar) or die($mysqli->error);

        header("location: ../index.php");
        // var_dump($mysqli);
    }
} else {
    echo "Não tem código de consulta disponível";
}
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/dieimes.css">
    <link rel="stylesheet" href="../css/menu_dieimes.css">
    <link rel="icon" href="../Imagens/icon.png">
</head>

<body>
    <?php
        include('../static/menu.php');
    ?>
    <div class="container">
        <br>
        <h1>Tela de Exclusão de Bebidas</h1>
        <h1>ID da Bebida:
            <?php echo $logins['id_bebida']?>
        </h1>
        <h2>Nome Cadastrado:
            <?php echo $logins['nome_bebida']?>
</h2>
        <h2>Quantidade Cadastrada:
            <?php echo $logins['quantidade']?>
</h2>
        <h2>Descrição do Produto:
            <?php echo $logins['descricao']?>
</h2>
        <h2>Valor Cadastrado:
            <?php echo $logins['valor'] ?>
</h2>

        <form action="" method="post">
            <input name="btn_deletar" id="butao-adm" class="btn btn-danger" type="submit" value="DELETAR">
            <a id="butao-adm" class="btn btn-warning" href="produtos_cadastrados.php">Voltar</a>
        </form>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
        include('../static/espacamento.php');
    ?>
    <?php
        include('../static/rodape.php');
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</html>