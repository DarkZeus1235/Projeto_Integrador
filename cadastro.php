<?php
include('conexao.php');

if (isset($_POST['bt_nome'])) {
  /*----------------------------------*/
  $email = $_POST['bt_email'];
  $senha = $_POST['bt_senha'];
  // $senha = password_hash ($_POST['bt_senha'], PASSWORD_DEFAULT);
  $nome = $_POST['bt_nome'];
  $username = $_POST['bt_username'];
  $cpf = $_POST['bt_cpf'];
  $endereco = $_POST['bt_endereco'];
  /*----------------------------------*/
  $mysqli->query("INSERT INTO cadastro (email, senha, nome, username, cpf, endereco ) values('$email', '$senha', '$nome','$username' ,'$cpf', '$endereco')") or
    die($mysqlierrno);

    var_dump($mysqli);
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" href="Imagens/icon.png">
</head>

<body>
  <?php
  include('menu.php');
  ?>
  <div id="container" class="container">
    <div class="signup-container">
      <h2>Cadastro de Clientes</h2>
      <form id="cadatro" action="#" method="post">
        <input type="text" name="bt_nome" placeholder="Nome Completo" required>
        <input type="text" name="bt_username" placeholder="Nome de Usuário" required>
        <input type="text" name="bt_cpf" placeholder="CPF" required>
        <input type="tel" name="bt_telefone" placeholder="Telefone" required>
        <input type="text" name="bt_endereco" placeholder="Endereço" required>
        <input type="email" name="bt_email" placeholder="Email" required>
        <input type="password" name="bt_senha" placeholder="Senha" required>
        <input type="submit" name="cadastrar" value="Cadastrar" onclick="return validateFields()">
      </form>
      <script>
        function validateFields() {
          /*
          var inputs = document.querySelectorAll('input[type="text"], input[type="password"]');
          var controle = false;

          for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].value.trim() !== '') {
              controle = true;
              break;
            }
          }

          if (controle) {
            showAlert();
            return false; // Impede o envio do formulário
          } else {
            controle = false;
            inputs = false;
            return true; // Permite o envio do formulário
          }
        }

        
        function showAlert() {
          Swal.fire({
            text: 'Sucesso ao cadastrar.',
            icon: 'success',
            title: 'Sucesso',
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = "cadastro.php";
            }
          });
          */
        }
        
      </script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
    </div>
  </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>