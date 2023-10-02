<?php
include('conexao.php');

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dieimes.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu_dieimes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="Imagens/icon.png">
    <title>Minha Conta</title>
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <h1 class="h1_text">Minha Conta</h1>

    <div class="contaaiiner">
        <!-- Profile Section -->
        <div class="account-section">
            <h2>Meu Perfil</h2>
            <div class="profile-info">
                <div class="info-item">
                    <?php
                    if (isset($_SESSION)) {
                    ?>
                        <h3>Nome: <?php echo $_SESSION['nome']; ?>
                        </h3>
                        <p>Email Cadastrado: <?php echo $_SESSION['email']; ?></p>
                        <p>Senha Cadastrada: <?php echo $_SESSION['senha'];?></p>
                </div>
                <div class="info-item">
                    <?php
                        if(isset($_SESSION['id_login_adm'])){
                    ?>
                    <h3>Função do Administrador:</h3>
                    <?php echo $_SESSION['funcao'];?>
                    <?php
                    }else{
                    ?>
                     <h3>Endereço:</h3>
                    <p><?php echo $_SESSION['endereco']; ?></p>
                    <?php
                    }
                    ?>
                </div>
            <?php
                    }
            ?>
            </div>
        </div>

        <!-- Orders Section -->
        <?php 

        $logins = $retorno_consulta -> fetch_assoc();
            if(isset($_SESSION['id_login_adm'])){
        ?>
        <div class="account-section">
            <h2>Solicitações de Ajuda</h2>
            <ul class="order-list">
                <li class="order-item">
                    <strong>Solicitação #68980</strong>
                    <p>Data da Solicitação: 10/09/2023 </p>
                    <p>Solicitação: Preciso de Ajuda para cadastrar uma conta, o meu endereço de email está dando erro.</p>
                </li>
                <li class="order-item">
                    <strong>Solicitação #67890</strong>
                    <p>Data da Solicitação: 18/09/2023</p>
                    <p>Solicitação: Não consigo efetuar a compra da bebida Whisky Malboro.</p>
                </li>
            </ul>
        </div>
        <?php
        }else{
        ?>
        <div class="account-section">
            <h2>Meus Pedidos</h2>
            <ul class="order-list">
                <li class="order-item">
                    <strong>Pedido #68980</strong>
                    <p>Data do Pedido: 10/09/2023 </p>
                    <p>Valor: R$ 1.500,43</p>
                </li>
                <li class="order-item">
                    <strong>Pedido #67890</strong>
                    <p>Data do Pedido: 18/09/2023</p>
                    <p>Valor: R$750.50</p>
                </li>
            </ul>
        </div>
        <?php
        }
        ?>

        <!-- Delete Account Section -->
        <?php
            if(isset($logins)){ 
            ?>
        <div class="account-section delete-account">
            <h2>Deletar Conta</h2>
            <p>Se você quiser deletar sua conta, clique no botão abaixo:</p>
            <button class="btn btn-danger"><a id="botao-aviso" href="deletar.php?codigo_cadastro=<?php echo $logins['id_login'];?>">Deletar Minha Conta</a></button>
        </div>
        <?php
        }
        ?>
    </div>
    <?php
    include('rodape.php');
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>