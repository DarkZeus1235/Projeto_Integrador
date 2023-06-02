<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0){
    echo("Preencha seu email");

    }elseif(strlen($_POST['senha']) == 0){
        echo("Preencha sua senha");
    }else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id_login'] = $usuario['id_login'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['senha'] = $usuario['senha'];


            header("Location: index.php");   

        }else{
            echo "Falha ao logar!Email ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
<link rel="stylesheet" href="css/login.css">
<link rel="icon" href="img/hamburguer-queijo-com-ilustracao-do-icone-do-vetor-dos-desenhos-animados-do-fogo-conceito-de-icone-de-objeto-de-comida-isolado-premium_138676-5539.avif">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<title>Página de Login</title>
</head>
<body>

    <header class="header">
        <nav class="nav">
            <a href="#">Início</a>
            <a href="#">Contato</a>
            <a href="#">Sobre nós</a>
            <a href="#">Promoções</a>
        </nav>

        <form action="#" class="search-bar">
            <input type="text" placeholder="Pesquisar...">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>
    </header>

  <div class="login-container">
  <img id="viking" src="Imagens/vikingpinguço.png" alt="" width="100">
    <h2>Faça login</h2>
    <form action="login.php" method="post">
      <div class='inputbox'>
      <ion-icon name="mail-outline"></ion-icon>
      <input type="text" name="email" placeholder="Email" required>
      </div>
      <div class="inputbox">
        <ion-icon name="lock-closed-outline"></ion-icon>
        <input type="password" name="senha" placeholder="Senha" required>
      </div>
      <input type="submit" value="Entrar">
    </form>
    <div class='register'>
    <p id="plv">Não tem uma conta?</p>
    <p><a id="registro" href="cadastro.php">Registre-se</a></p>
    </div>
  </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>