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

        if (($_POST['nome']) == 1) {
            echo ("Parabéns você está logado");

            if (($_POST['endereco']) == 1) {
                echo ("Parabéns você está logado");
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <div class="signup-container">
        <img class="viking" src="Imagens/vikingpinguço.png" alt="" width="100">
        <h2>Cadastro Taverna de Valhalla</h2>
        <form action="cadastro.php" method="post">
            <input type="email" name="bt_email" placeholder="Email" required>
            <input type="password" name="bt_senha" placeholder="Senha" required>
            <input type="text" name="bt_nome" placeholder="Nome completo" required>
            <input type="text" name="bt_username" placeholder="Crie um nome de Usuário" required>
            <input type="text" name="bt_cpf" placeholder="CPF" required>
            <input type="text" name="bt_endereco" placeholder="Endereço" required>
            <input type="submit" value="Cadastrar" onclick="return validateFields()">
            <p class="plv">Já tem uma conta?</p>
            <p><a id="entrar" href="login.php">Entrar</a></p>
            <div>
            </div>
        </form>
    </div>
</body>

</html>