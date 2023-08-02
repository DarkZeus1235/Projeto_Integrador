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
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="container" class="container">
        <div class="signup-container">
            <h2>Cadastro</h2>
            <form action="cadastro.php" method="post">
                <input type="text" name="bt_nome" placeholder="Nome Completo" required>
                <input type="text" name="bt_username" placeholder="Nome de Usuário" required>
                <input type="text" name="bt_cpf" placeholder="CPF" required>
                <input type="tel" name="bt_telefone" placeholder="Telefone" required>
                <input type="text" name="bt_endereco" placeholder="Endereço" required>
                <input type="email" name="bt_email" placeholder="Email" required>
                <input type="password" name="bt_senha" placeholder="Senha" required>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
</body>
</html>
