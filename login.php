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
            $_SESSION['username'] = $usuario['username'];
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
<link rel="icon" href="img/hamburguer-queijo-com-ilustracao-do-icone-do-vetor-dos-desenhos-animados-do-fogo-conceito-de-icone-de-objeto-de-comida-isolado-premium_138676-5539.avif">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<title>Página de Login</title>
</head>
<body>
<?php
    include('menu.php');
   ?> 
<div class="container">
<div class="login-container">
  <img class="viking" src="Imagens/vikingpinguço.png" alt="" width="100">
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
      <input id="entrar" type="submit" value="Entrar">
    </form>
    <div class='register'>
    <p class="plv">Não tem uma conta?</p>
    <p><a id="registro" href="cadastro.php">Registre-se</a></p>
    </div>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>