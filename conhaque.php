<?php
include("conexao.php");

if (!isset($_SESSION)) {
    session_start();
}

$consultar_banco = "SELECT * FROM cadastro_conhaque";

$retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
$quantidade_pedidos = $retorno_consulta->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="icon" href="Imagens/vikingpinguço.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Taverna de Valhala</title>
</head>

<body>
    <div class="menu-bar">
        <img src="Imagens/vikingpinguço.png" alt="" width="90px">
        <h1 class="logo">𝓣𝓪𝓿𝓮𝓻𝓷𝓪 𝓭𝓮 <span>𝓥𝓪𝓵𝓱𝓪𝓵𝓵𝓪</span></h1>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="#">Promoções</a></li>
            <li><a href="#">Novidades</a>
            <li><a href="#">+ Vendidos <i class="bi bi-caret-down"></i></a>

                <?php
                /* Aqui precisa colocar uma condição (Tela de adm) */
                ?>


                <div class="dropdown-menu">
                    <ul>
                        <li><a href="vinhos.php">Vinhos</a></li>
                        <li><a href="whisky.php">Uísque</a></li>
                        <li>
                            <a href="#">Outros <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg></a>

                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="conhaque.php">Conhaque</a></li>
                                    <li><a href="rum.php">Rum</a></li>
                                    <li><a href="champ.php">Champanhe</a></li>
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
        <!-- Onde vai aparecer as pedidas após cadastradas no banco de dados -->
        <div class="row">
            <?php

            while ($bebidas = $retorno_consulta->fetch_assoc()) {
                //var_dump($bebidas);
                ?>

                <!-- Card -->
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $bebidas['arquivo_caminho'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $bebidas['nome_bebida'] ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $bebidas['descricao'] ?>
                        </p>
                        <h5 class="card-text">
                            <?php echo $bebidas['valor']; ?>
                        </h5>
                        <a href="#" class="btn btn-primary">Comprar Agora</a>
                    </div>
                </div>
                <!-- Fim do card -->

                <?php
            }


            ?>
        </div> <!-- Fim do row -->
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

</html>