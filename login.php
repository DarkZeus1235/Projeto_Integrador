<?php
include("conexao.php");

if (isset($_POST['email']) && isset($_POST['senha'])) {
  $email = $mysqli->real_escape_string($_POST['email']);
  $senha = $mysqli->real_escape_string($_POST['senha']);

  if (empty($email) || empty($senha)) {
    echo 'Preencha todos os campos.';
  } else {
    $sql_code = "SELECT * FROM cadastro WHERE email = '$email'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);
    $usuario = $sql_query->fetch_assoc();

    if ($usuario !== null && password_verify($senha, $usuario['senha'])) {
      if (!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['id_login'] = $usuario['id_login'];
      $_SESSION['nome'] = $usuario['nome'];
      $_SESSION['endereco'] = $usuario['endereco'];
      $_SESSION['telefone'] = $usuario['telefone'];
      $_SESSION['email'] = $usuario['email'];
      $_SESSION['senha'] = $usuario['senha'];

      echo 'success'; // Somente agora retorna 'success' se o login for bem-sucedido.
    } else {
      echo 'error'; // Retorna 'error' se o login falhar.
    }
  }
}
?>



<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/menu_dieimes.css">
  <link rel="stylesheet" href="css/dieimes.css">
  <link rel="icon" href="Imagens/icon.png">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>
  <?php
  include('menu.php');
  ?>
  <div id="container" class="container">
    <div class="signup-container">
      <img id="icon_login" src="Imagens/icon.png" width="220px" height="250px" alt="">
      <form id="cadastro" action="login.php" method="post">
        <h2 id="login-text">Login</h2>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="submit" value="Entrar">
      </form>
      <!-- Alerta -->
      <div id="alert-container" style="display: none;"></div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.js"></script>
      <script>
        // Manipule o evento de envio do formulário
        $('#cadastro').on('submit', function(e) {
          e.preventDefault(); // Impede o envio padrão do formulário

          // Coleta os dados do formulário
          var formData = $(this).serialize();

          // Faça uma solicitação AJAX para enviar os dados ao servidor
          $.ajax({
            type: 'POST',
            url: 'login.php',
            data: formData,
            success: function(response) {
              // Vamos verificar se a resposta contém "success" (pode haver espaços em branco extras)
              if (response.trim().indexOf('success') === 0) {
                // Exiba um alerta de sucesso
                Swal.fire({
                  title: 'Sucesso',
                  text: 'Logado com sucesso!',
                  icon: 'success',
                  confirmButtonText: 'OK'
                }).then((result) => {
                  if (result.isConfirmed) {
                    // Redirecione para a página desejada após o login bem-sucedido
                    window.location.href = 'index.php';
                  }
                });
              } else {
                // Exiba um alerta de erro
                Swal.fire({
                  title: 'Erro',
                  text: 'Erro no login! Informações incorretas!!',
                  icon: 'error',
                  confirmButtonText: 'OK'
                });
              }
            },
            error: function() {
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
      </script>


    </div>
  </div>
  <?php
  include('rodape.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>