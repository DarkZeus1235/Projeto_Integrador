<?php
include("conexao.php");

if (isset($_POST['email']) || isset($_POST['senha'])) {

  if (strlen($_POST['email']) == 0) {
    echo ("Preencha seu email");
  } elseif (strlen($_POST['senha']) == 0) {
    echo ("Preencha sua senha");
  } else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM cadastro WHERE email = '$email'";

  
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

    $usuario = $sql_query->fetch_assoc();
    
    if ($usuario !== null && password_verify($senha, $usuario['senha'])) {
        /* Se a senha for verdadeira faça: */

        if (!isset($_SESSION)) {
          session_start();
        }

        $_SESSION['id_login'] = $usuario['id_login'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['endereco'] = $usuario['endereco'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['senha'] = $usuario['senha'];

        header("Location: index.php");
    } else {
      echo "<script>alert('Login ou senha incorretos!!');</script>";
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
<script>
$(document).ready(function() {
    $("#cadatro").submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.status === "error") {
                    // Mostrar notificação de erro com SweetAlert
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro de login',
                        text: response.message,
                        showConfirmButton: true, // Mostra o botão de confirmação
                        confirmButtonText: 'OK', // Texto do botão de confirmação
                        confirmButtonColor: '#d33', // Cor do botão de confirmação
                        customClass: {
                            confirmButton: 'btn btn-danger' // Classe CSS personalizada para o botão
                        }
                    });
                } else {
                    // Redirecionar para a página de sucesso (ou outra ação)
                    window.location.href = "index.php";
                }
            },
            error: function() {
                alert("Erro ao enviar o formulário.");
            }
        });
    });
});
</script>
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
      <!-- Script para notificação de erro -->
    </div>
  </div>
  <?php
  include('rodape.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>