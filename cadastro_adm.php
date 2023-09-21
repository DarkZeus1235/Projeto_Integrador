<?php
    include('conexao.php');

    if(!isset($_SESSION)){
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Administradores</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dieimes.css">
    <link rel="stylesheet" href="css/menu_dieimes.css">
</head>
<body>
<?php
        include('menu.php');
    ?>
    <div id="container" class="container">
        <div class="signup-container">
          <img src="Imagens/cadastro_adm_logo.png" class="img-fluid" id="img-cadastro" alt="">
            <form id="cadatro"action="#" method="post">
            <h2 id="cadastro-text">Cadastro de Administradores</h2>
                <input type="text" name="bt_nome" placeholder="Nome Completo" required>
                <input type="text" name="bt_username" placeholder="Nome de Usuário" required>
                <input type="text" id="cpfInput" name="bt_cpf" placeholder="CPF"  maxlength="14" oninput="formatarCPF()" required>
                <input type="tel" id="telefoneInput" name="bt_telefone" placeholder="Telefone" maxlength="15" oninput="formatarTelefone()" required>
                <input type="text" name="bt_endereco" placeholder="Endereço" required>
                <input type="email" name="bt_email" placeholder="Email" required>
                <input type="password" name="bt_senha" placeholder="Senha" required>
                <input type="submit" name="cadastrar" value="Cadastrar" onclick="return validateFields()">
            </form>
              </script>
        </div>
    </div>
  </div>
  </div>
  <?php
    include('rodape.php');
  ?>
  <script src="script/zere.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>