<?php
        include('conexao.php');

        if(isset($_POST['Nome'])){
            /*----------------------------------*/
            $nome = $_POST['Nome'];
            $data_de_nascimento = $_POST['data_de_nascimento'];
            $cpf = $_POST['cpf'];
            $endereco = $_POST['endereco'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            /*----------------------------------*/
            $mysqli -> query("INSERT INTO teste (nome, data_de_nascimento, cpf, endereco, email, senha) values('$nome','$data_de_nascimento', '$cpf ',$endereco','$email', '$senha',)") or
            die ($mysqli->error);

            
            if(($_POST['nome']) == 1){
                echo("Parabéns você está logado");

            if(($_POST['endereco']) == 1){
                echo("Parabéns você está logado");
            }
        }
        }
        ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="Imagens\vikingpinguço.png">
        <title>Cadastro - Taverna</title>
    </head>
    <body>
        <div class="container">
            <div class="centralizar">
                <h3>Cadastro na Taverna de Valhalla</h3>
                <form action="" method="post">
                    <div id="central" class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nome Completo:</label>
                        <input name="nome" type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div id="central2" class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Data de Nascimento:</label>
                        <input name="data_de_nascimento" type="date" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div id="central3" class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">CPF:</label>
                        <input name="cpf" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div id="central4" class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Endereço:</label>
                        <input name="endereco" type="text" placeholder="Endereço da sua casa" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div id="central5" class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Endereço de e-mail:</label>
                        <input name="email" type="email" placeholder="Seu email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div id="central6" class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Senha:</label>
                        <input name="senha" type="password"placeholder="Sua senha pessoal"  class="form-control" id="exampleInputPassword1">
                    </div>
            </form>
            </div>
            <a href="" id="centralizar" type="submit" class="btn btn-primary">Cadastrar</a>
        </div>
    </body>
</html>