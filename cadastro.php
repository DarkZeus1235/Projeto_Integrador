<?php
include('conexao.php');

if (isset($_POST['bt_nome'])) {
  /*----------------------------------*/
  $email = $_POST['bt_email'];
  $senha = password_hash ($_POST['bt_senha'], PASSWORD_DEFAULT);
  $nome = $_POST['bt_nome'];
  $telefone = $_POST['bt_telefone'];
  $username = $_POST['bt_username'];
  $cpf = $_POST['bt_cpf'];
  $endereco = $_POST['bt_endereco'];
  /*----------------------------------*/
  $mysqli->query("INSERT INTO cadastro (email, senha, nome, telefone, username, cpf, endereco ) values('$email', '$senha', '$nome', '$telefone', '$username' ,'$cpf', '$endereco')") or
    die($mysqlierrno);

    //var_dump($mysqli);
<<<<<<< HEAD
}
=======

        // Verifique se o email já existe
        $sql = "SELECT * FROM cadastro WHERE email = '$email'";
        $result = $mysqli->query($sql);
    
        if ($result->num_rows > 0) {
            // Email já existe, exiba um alerta
            echo '<script>alert("O email já está em uso. Por favor, escolha outro.")</script>';
        } else {
            // Email é único, você pode inseri-lo no banco de dados aqui
            $sql = "INSERT INTO cadastro (email, senha, nome, username, cpf, endereco) VALUES ('$email', '$senha', '$nome', '$username', '$cpf', '$endereco')";
            if ($mysqli->query($sql) === TRUE) {
                echo '<script>alert("Cadastro realizado com sucesso!")</script>';
            } else {
                echo "Erro ao cadastrar: " . $mysqli->error;
            }
        }
    }
>>>>>>> main
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cadastro</title>
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
          <img src="Imagens/logo_cadastro.png" class="img-fluid" id="img-cadastro" alt="">
            <form id="cadatro"action="#" method="post">
            <h2 id="cadastro-text">Cadastro de Clientes</h2>
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
<<<<<<< HEAD
=======
  <script src="script/zere.js"></script>
>>>>>>> main
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>