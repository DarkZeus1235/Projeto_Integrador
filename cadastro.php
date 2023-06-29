<?php
include('conexao.php');

if (isset($_POST['bt_nome'])) {
    /*----------------------------------*/
    $email = $_POST['bt_email'];
    $senha = $_POST['bt_senha'];
    $nome = $_POST['bt_nome'];
    $username = $_POST['bt_username'];
    $cpf = $_POST['bt_cpf'];
    $endereco = $_POST['bt_endereco'];
    /*----------------------------------*/
    $mysqli->query("INSERT INTO cadastro (email, senha, nome, username, cpf, endereco ) values('$email', '$senha', '$nome','$username' ,'$cpf', '$endereco')") or
        die($mysqlierrno);

    $senha_nova = password_hash($_POST['bt_senha'], PASSWORD_DEFAULT);

    if (isset($_POST['nome']) || isset($_POST['endereco'])) {

        
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<html>

<head>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon"
        href="img/hamburguer-queijo-com-ilustracao-do-icone-do-vetor-dos-desenhos-animados-do-fogo-conceito-de-icone-de-objeto-de-comida-isolado-premium_138676-5539.avif">
    <title>Página de Cadastro</title>
</head>

<body>

    <header class="header">
        <nav class="nav">
            <a href="index.php">Início</a>
            <a href="#">Contato</a>
            <a href="#">Sobre nós</a>
            <a href="#">Promoções</a>
        </nav>

        <form action="#" class="search-bar">
            <input type="text" placeholder="Pesquisar...">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>
    </header>
    <div class="signup-container">
        <img class="viking" src="Imagens/vikingpinguço.png" alt="" width="100">
        <h2>Cadastro Taverna de Valhalla</h2>
        <form action="cadastro.php" method="post">
            <input class="input-register-email" type="email" name="bt_email" placeholder="Email" required>
            <input class="input-register-password" type="password" name="bt_senha" placeholder="Senha" required>
            <input class="input-register-name" type="text" name="bt_nome" placeholder="Nome completo" required>
            <input class="input-register-username" type="text" name="bt_username" placeholder="Crie um nome de Usuário" required>
            <input class="input-register-cpf" type="text" name="bt_cpf" placeholder="CPF" required>
            <input class="input-type-address" type="text" name="bt_endereco" placeholder="Endereço" required>
            <input class="input-register-confirm" type="submit" value="Cadastrar">
            <p class="plv">Já tem uma conta?</p>
            <p><a id="entrar" href="login.php">Entrar</a></p>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="script/script_cadastro.js"></script>

</html>