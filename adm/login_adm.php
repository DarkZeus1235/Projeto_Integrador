<?php
include('../conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

  if (strlen($_POST['email']) == 0) {
    echo ("Preencha seu email");
  } elseif (strlen($_POST['senha']) == 0) {
    echo ("Preencha sua senha");
  } else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM cadastro_adm WHERE email = '$email'";

  
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

    $adm = $sql_query->fetch_assoc();
    if (password_verify($senha, $adm['senha'])) { /* Vou comparar a senha do usuário com a senha do banco de dados */
        /* Se a senha for verdadeira faça: */

        if (!isset($_SESSION)) {
          session_start();
        }

        $_SESSION['id_login_adm'] = $adm['id_login_adm']; /* Logado */
        $_SESSION['nome'] = $adm['nome'];
        $_SESSION['funcao'] = $adm['funcao'];
        $_SESSION['email'] = $adm['email'];
        $_SESSION['senha'] = $adm['senha'];

        header("Location: ../index.php"); /* pag do adm */
    }else{
      echo "<script>alert('login ou senha incorreto!!');</script>";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu_dieimes.css">
    <link rel="stylesheet" href="../css/dieimes.css">
    <link rel="icon" href="../Imagens/icon.png">
    <style>
        /* Estilo para a notificação */
        .notification {
            display: none;
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px;
            width: 300px;
            border-radius: 5px;
            z-index: 1000;
        }
    </style>
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
    <!-- Campos do formulário aqui -->
    <input type="email" name="email" placeholder="Email de Administrador" required>
    <input type="password" name="senha" placeholder="Senha de Administrador" required>
    <input type="submit" value="Entrar">
</form>

<!-- Alerta -->
<div id="alert-container" style="display: none;"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.js"></script>
<script>
    // Manipule o evento de envio do formulário
    $('#cadastro').on('submit', function (e) {
        e.preventDefault(); // Impede o envio padrão do formulário

        // Coleta os dados do formulário
        var formData = $(this).serialize();

        // Faça uma solicitação AJAX para enviar os dados ao servidor
        $.ajax({
            type: 'POST',
            url: 'login.php', // Substitua 'login.php' pelo nome do arquivo de processamento real
            data: formData,
            success: function (response) {
                if (response === 'success') {
                    // Exiba um alerta de erro
                    Swal.fire({
                        title: 'Erro',
                        text: 'Erro no login!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                } else {
                    // Exiba um alerta de sucesso
                    Swal.fire({
                        title: 'Sucesso',
                        text: 'Logado com sucesso!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirecione para a página desejada após o login bem-sucedido
                            window.location.href = 'index.php'; // Substitua 'index.php' pela página desejada
                        }
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
</script>
</div>
    </div>
  </div>
  <?php
        include('../rodape.php')
      ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>