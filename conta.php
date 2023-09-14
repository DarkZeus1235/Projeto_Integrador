<?php
include("conexao.php");

include('protect.php');

if (!isset($_SESSION)) {
    session_start();
}

$consultar_banco = "SELECT * FROM cadastro";

$retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
$quantidade_pedidos = $retorno_consulta->num_rows;

$logins = $retorno_consulta->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dieimes.css">
    <link rel="stylesheet" href="css/menu_dieimes.css">
    <title>Minha Conta</title>
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <h1 id="central">Central do Cliente</h1>
    <?php
    if (isset($_SESSION['nome'])) {
        ?>
        <h1 id="central">Bem Vindo
            <?php echo $_SESSION['nome']; ?>
        </h1>
        <?php
    }
    ?>
    <div class="container">
        <li class="col-lg-3 col-sm-4 col-xs-3">
            <a href="meu_cadastro.php" class="boxItensCentral">
                <div class="borda_imagem">
                    <img class="img-fluid" id="cadastro_imagem" src="Imagens/cadastro.pnh.png" alt="Meu cadastro">
                </div>
            </a>
            <p class="texto_cadastro">Meu Cadastro</p>
            <a href="meus_pedidos.php" class="boxItensCentral">
                <div class="borda_imagem1">
                    <img class="img-fluid" id="pedidos_imagem" src="Imagens/meuspedidos.png" alt="">
                </div>
            </a>
            <p class="texto_pedidos">Pedidos</p>
            <a href="deletar.php?codigo_cadastro=<?php echo $logins['id_login']; ?>" class="boxItensCentral">
                <div class="borda_imagem2">
                    <img class="img-fluid" id="deletar_imagem" src="Imagens/deletar_conta.png" alt="">
                </div>
            </a>
            <p class="texto_deletar">Deletar conta</p>
        </li>
    </div>
    <?php
    include('espacamento.php');
    ?>
    <?php
    include('rodape.php');
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</html>