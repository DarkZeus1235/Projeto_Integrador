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
            <input type="submit" value="Cadastrar" onclick="return validateFields()">
            <p class="plv">Já tem uma conta?</p>
            <p><a id="entrar" href="login.php">Entrar</a></p>
        </form>
        <script>
    function validateFields() {
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
          window.location.href = "login.php";
        }
      });
    }
  </script>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>  

</html>