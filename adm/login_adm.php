<?php
include("../conexao.php");

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $_mysqli->real_escape_string($_POST['senha']);

    if (empty($email) || empty($senha)) {
        echo 'Preencha todos os campos.';
    } else {
        $sql_code = "SELECT * FROM cadastro_adm WHERE email = '$email'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        if ($usuario !== null && password_verify($senha, $usuario['senha'])) {
            // Se as informações estiverem corretas, você pode prosseguir para o login
            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_login_adm'] = $usuario['id_login_adm'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['funcao'] = $usuario['funcao'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['senha'] = $usuario['senha'];
            echo 'success'; // Isso indica um login bem-sucedido
        } else {
            echo 'Login ou senha incorretos.';
        }
    }
}
?>




<!DOCTYPE html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="../css/menu_dieimes.css">
  <link rel="stylesheet" href="../css/dieimes.css">
  <link rel="icon" href="../Imagens/icon.png">
</head>

<body>
  <?php
  include('menu_adm.php');
  ?>
  <div id="container" class="container">
    <div class="signup-container">
      <img id="icon_login" src="../Imagens/icon.png" width="220px" height="250px" alt="">
      <!-- Formulário -->
      <form id="cadastro" action="#" method="post">
        <h1>Login de Administrador</h1>
        <!-- Campos do formulário aqui -->
        <input type="email" name="email" placeholder="Email de Administrador" required>
        <input type="password" name="senha" placeholder="Senha de Administrador" required>
        <input type="submit" value="Entrar">
      </form>
      <!-- Alerta -->
      <div id="alert-container" style="display: none;"></div>
    </div>
  </div>
  <?php
  include('../rodape.php')
  ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
<script>
  // Uma vez que a página esteja totalmente carregada, execute este código
  $(document).ready(function () {
    // Manipule o evento de envio do formulário
    $('#cadastro').on('submit', function (e) {
      e.preventDefault(); // Impede o envio padrão do formulário

      // Coleta os dados do formulário
      var formData = $(this).serialize();

      // Faça uma solicitação AJAX para verificar as informações no servidor
      $.ajax({
        type: 'POST',
        url: 'login_adm.php', // Substitua 'login.php' pelo nome do arquivo de processamento real
        data: formData,
        success: function (response) {
          if (response === 'success') {
            // Exiba um alerta de sucesso e redirecione
            Swal.fire({
              title: 'Sucesso',
              text: 'Logado com sucesso!',
              icon: 'success',
              confirmButtonText: 'OK'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecione para a página desejada após o login bem-sucedido
                window.location.href = '../index.php'; // Substitua 'index.php' pela página desejada
              }
            });
          } else {
            // Exiba um alerta de erro
            Swal.fire({
              title: 'Erro',
              text: 'Erro no Login!! Verifique as informações inseridas no formulário!!', // Exibe a mensagem de erro do PHP
              icon: 'error',
              confirmButtonText: 'OK'
            });
          }
        },
        error: function () {
          // Exiba um alerta de erro de comunicação com o servidor
          Swal.fire({
            title: 'Erro',
            text: 'Erro na comunicação com o servidor.',
            icon: 'error',
            confirmButtonText: 'OK'
          });
        }
      });
    });
  });
</script>
</html>