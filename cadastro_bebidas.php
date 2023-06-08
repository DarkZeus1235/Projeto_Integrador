<?php
include("conexao.php");

if (isset($_POST['bt_nome'])) {
    if (isset($_FILES['bt_arquivo'])) {
        $arquivo = $_FILES['bt_arquivo'];
        if ($arquivo['size'] > 15000000) {
            die("Arquivo muito grande!! Max: 15MB");
        }
        if ($arquivo['error']) {
            die("Falha ao enviar arquivo");
        }
    }

    $nome = $_POST['bt_nome'];
    $quantidade = $_POST['bt_quantidade'];
    $valor = $_POST['bt_valor'];
    $descricao = $_POST['bt_descricao'];

    $pasta = "recebidos/";
    $nome_arquivo = $arquivo['name'];
    $novo_nome_arquivo = uniqid();
    $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));



    $caminho = $pasta . $novo_nome_arquivo . "."  . $extensao;


    /*
            if($extensao != "jpg" and "png"){
            die("Tipo de arquivo não aceito");
        }
        */

    $deucerto = move_uploaded_file($arquivo["tmp_name"], $caminho);

    if ($deucerto) {
        $mysqli->query("INSERT INTO cadastro_bebidas (nome_bebida, quantidade, descricao,arquivo_caminho, valor) 
            values ('$nome', '$quantidade', '$descricao','$caminho', '$valor')") or die($mysqli->error);
    }
}
?>
    $nome = $_POST['bt_nome'];
    $quantidade = $_POST['bt_quantidade'];
    $valor = $_POST['bt_valor'];
    $descricao = $_POST['bt_descricao'];

    $pasta = "recebidos/";
    $nome_arquivo = $arquivo['name'];
    $novo_nome_arquivo = uniqid();
    $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));



    $caminho = $pasta . $novo_nome_arquivo . "."  . $extensao;


    /*
            if($extensao != "jpg" and "png"){
            die("Tipo de arquivo não aceito");
        }
        */

    $deucerto = move_uploaded_file($arquivo["tmp_name"], $caminho);

    if ($deucerto) {
        $mysqli->query("INSERT INTO cadastro_bebidas (nome_bebida, quantidade, descricao,arquivo_caminho, valor) 
            values ('$nome', '$quantidade', '$descricao','$caminho', '$valor')") or die($mysqli->error);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de Bebidas</title>
</head>

<body>
    <div class="menu-bar">
        <img src="Imagens/vikingpinguço.png" alt="" width="90px">
        <h1 class="logo">𝓣𝓪𝓿𝓮𝓻𝓷𝓪 𝓭𝓮 <span>𝓥𝓪𝓵𝓱𝓪𝓵𝓵𝓪</span></h1>
        <ul>
            <li><a href="#">Início</a></li>
            <li><a href="#">Promoções</a></li>
            <li><a href="#">Novidades</a>
            <li><a href="#">+ Vendidos <i class="bi bi-caret-down"></i></a>


                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li>
                            <a href="#">Team <i class="fas fa-caret-right"></i></a>

                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="#">Team-1</a></li>
                                    <li><a href="#">Team-2</a></li>
                                    <li><a href="#">Team-3</a></li>
                                    <li><a href="#">Team-4</a></li>
                                </ul>
                            </div>

                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Fale Conosco</a></li>
            <?php
            if (!isset($_SESSION['nome'])) {
            ?>

                <li><a href="login.php">Entrar | </a><a href="cadastro.php">Cadastrar</a></li>
            <?php

            }
            ?>
            <div class="sair">
                <?php
                if (isset($_SESSION['nome'])) {
                ?>

                    <li><a id="logout" href="logout.php">Sair</a></li>
                <?php

                }
                ?>
            </div>
            </li>

        </ul>
    </div>
    <div class="container">
    <h1>Cadastro de Bebidas - Taverna de Valhalla</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome da Bebida:</label>
                <input name="bt_nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Coloque o nome da bebida</div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Quantidade de Bebidas disponíveis</label>
                <input name="bt_quantidade" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Valor da Bebida:</label>
                <input name="bt_valor" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descrição da Bebida:</label>
                <input name="bt_descricao" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Imagem da Bebida:</label>
                <input type="file" name="bt_arquivo" class="form-control" id="exampleInputPassword1">
            </div>
            <?php
            if (isset($_SESSION['Sucesso'])) {
                echo $_SESSION['Sucesso'];
                unset($_SESSION['Sucesso']);
            }
            ?>
            <input class="btn btn-success" type="submit" value="Cadastrar Bebida">
            <a class="btn btn-danger" href="index.php">Cancelar</a>
            <a class="btn btn-primary" href="lista_bebidas.php">Bebidas</a>

        </form>
    </div>
    </form>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>