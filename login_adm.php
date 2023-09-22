<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

  if (strlen($_POST['email']) == 0) {
    echo ("Preencha seu email");
  } elseif (strlen($_POST['senha']) == 0) {
    echo ("Preencha sua senha");
  } else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM cadastro_adm WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {

      $adm = $sql_query->fetch_assoc();

      if (!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['id_login_adm'] = $adm['id_login_adm'];
      $_SESSION['nome'] = $adm['nome'];
      $_SESSION['funcao'] = $adm['funcao'];
      $_SESSION['email'] = $adm['email'];
      $_SESSION['senha'] = $adm['senha'];


      header("Location: index.php");
    } else {
      echo "<script>alert('login ou senha incorreto!!');</script>";
    }
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
      <form id="cadatro" action="login.php" method="post">
      <h2 id="login-text">Login</h2>
        <input type="email" name="email" placeholder="Email de Administrador" required>
        <input type="password" name="senha" placeholder="Senha de Administrador" required>
        <input type="submit" value="Entrar">
      </form>
    </div>
  </div>
  <?php
        include('rodape.php')
      ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>