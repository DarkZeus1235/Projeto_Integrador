<?php
include('conexao.php');

if (isset($_POST['email']) && isset($_POST['senha'])) {
  $email = $mysqli->real_escape_string($_POST['email']);
  $senha = $mysqli->real_escape_string($_POST['senha']);

  $sql_code = "SELECT * FROM cadastro WHERE email = '$email'";
  $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

  $usuario = $sql_query->fetch_assoc();

  if ($usuario && password_verify($senha, $usuario['senha'])) {
    if (!isset($_SESSION)) {
      session_start();
    }

    $_SESSION['id_login_adm'] = $usuario['id_login_adm'];
    $_SESSION['nome'] = $usuario['nome'];
    $_SESSION['funcao'] = $usuario['funcao'];
    $_SESSION['email'] = $usuario['email'];
    $_SESSION['senha'] = $usuario['senha'];

    header("Location: index.php");
  } else {
    echo "<script>
                  Swal.fire({
                    title: 'Erro de Login',
                    text: 'Email ou senha incorretos!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                  });
                </script>";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/menu_dieimes.css">
  <link rel="stylesheet" href="css/dieimes.css">
  <link rel="icon" href="Imagens/icon.png">
</head>

<body>
  <?php
  include('menu.php');
  ?>
  <div id="container" class="container">
    <div class="signup-container">
      <img id="icon_login" src="Imagens/icon.png" width="220px" height="250px" alt="">
      <form id="cadastro" action="#" method="post">
        <h2 id="login-text">Login</h2>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="submit" value="Entrar">
      </form>
      <!-- Script para notificação de erro -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
      <?php

      if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $usuario = $sql_query->fetch_assoc();

        header("Location: index.php");
      } else {
        echo "<script>
                  Swal.fire({
                    title: 'Erro de Login',
                    text: 'Email ou senha incorretos!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                  });
                </script>";
      }
      ?>
    </div>
  </div>
  <?php
  include('rodape.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>