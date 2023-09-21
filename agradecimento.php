<?php
include('conexao.php');

if (!isset($_SESSION)) {
    session_start();
}

$consultar_banco = "SELECT * FROM cadastro_bebidas WHERE id_bebida = 35";
$retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
$quantidade_pedidos = $retorno_consulta->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/menu_dieimes.css">
    <link rel="stylesheet" href="css/dieimes.css">
    <link rel="icon" href="Imagens/icon.png">
    <title>Agradecimento pela Compra</title>
</head>

<body>
    <?php
    include('menu.php');
    ?>
        <?php
            include('espacamento.php');
        ?>
    <main>
        <p>Obrigado por fazer sua compra na Taverna de Valhalla. Seu pedido foi processado com sucesso!</p>

        <h2>Detalhes do Pedido</h2>
        <ul>
        <?php while ($bebidas = $retorno_consulta->fetch_assoc()) : ?>  
            <li><strong>Número do Pedido:</strong> <?php echo $bebidas['id_bebida']; ?></li>
            <li><strong>Data da Compra:</strong> 14 de Setembro de 2023</li>
            <li><strong>Total da Compra:</strong> <?php echo $bebidas['valor'];?></li>
        </ul>
        <?php endwhile; ?>  

        <p>Os itens do seu pedido serão enviados para o endereço que você forneceu durante o processo de compra. Você receberá um e-mail de confirmação em breve com mais informações sobre o envio.</p>
    </main>
    <?php
            include('espacamento.php');
        ?>
    <?php
    include('rodape.php');
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>