<<<<<<< HEAD
<div class="menu-bar">
    <img src="Imagens/vikingpinguço.png" alt="">
    <div class="container">
        <h1 class="logo">𝓣𝓪𝓿𝓮𝓻𝓷𝓪 𝓭𝓮 <span>𝓥𝓪𝓵𝓱𝓪𝓵𝓵𝓪</span></h1>
    </div>

    <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="#">Promoções</a></li> <!-- Sem link -->
        <li><a href="#">Novidades</a> <!-- Sem link -->
        <li><a href="#">+ Vendidos <i class="bi bi-caret-down"></i></a> <!-- Sem link -->
            <div class="dropdown-menu">
                <ul>
                    <li><a href="vinhos.php">Vinhos</a></li>
                    <li><a href="whisky.php">Uísque</a></li>
                    <li>
                        <a href="#">Outros <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg></a>

                        <div class="dropdown-menu-1">
                            <ul>
                                <li><a href="conhaque.php">Conhaque</a></li>
                                <li><a href="rum.php">Rum</a></li>
                                <li><a href="champ.php">Champanhe</a></li>
                                <li><a href="vodka.php">Vodka</a></li>
                            </ul>
                        </div>

                    </li>
                </ul>
            </div>
        </li>
<<<<<<< HEAD
        <li><a href="#">Fale Conosco</a></li>
            <?php
            if (isset($_SESSION['nome'])) {
            ?>
        <li><a href="#" class="log__Conta"> <i class="fa fa-user"></i><?php echo $_SESSION['nome']; ?> </a>
                <div class="dropdown-menu">
                <ul>
                    <li><a href="conta.php" class=""><i class="fa fa-user"></i>Minha Conta</a></li>
                    <li><a href="logout.php">Sair</a></li>
            
                <?php

            }
                ?>
                <?php
                if (!isset($_SESSION['nome'])) {

                ?>
                    <li><a id="entrar-cadastrar" href="login.php">Entrar |</a> <a href="cadastro.php">Cadastrar</a></li>
                <?php
                }
                ?>
                </ul>
                </div>
        </li>
                
                
              
=======
        <li><a href="contato.php">Fale Conosco</a></li>
        <?php
            if (isset($_SESSION['nome'])) {
        ?>
        <li><a href="#" class="log__Conta"> <i class="fa fa-user"></i><?php echo $_SESSION['nome']; ?> </a>
            <div class="dropdown-menu">
                <ul>
                    <li><a href="conta.php" class=""><i class="fa fa-user"></i>Minha Conta</a></li>
                    <li><a href="logout.php">Sair</a></li>
                    <?php

                        }
                    ?>
                    <?php
                         if (!isset($_SESSION['nome'])) {

                    ?>
                    <li><a id="entrar-cadastrar" href="login.php">Entrar |</a> <a href="cadastro.php">Cadastrar</a></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </li>
    </ul>
>>>>>>> f50b4d1880984a812fc61ff4b81e3dd6beef6360
=======
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<?php
    include('conexao.php');
?>
<header class="header">
    <nav class="nav">
        <a href="index.php">Início</a>
        <a href="#">Contato</a>
        <a href="#">Sobre nós</a>
        <a href="#">Promoções</a>
        <?php
        if (!isset($_SESSION['nome'])) {
        ?>

            <a href="login.php">Entrar</a><a href="cadastro.php">Cadastrar</a>
        <?php

        }
        ?>
        <div class="sair">
            <?php
            if (isset($_SESSION['nome'])) {
            ?>

                <a id="logout" href="logout.php">Sair</a>
            <?php

            }
            ?>
    </nav>

    <form action="#" class="search-bar">
        <input type="text" placeholder="Pesquisar...">
        <button type="submit"><i class='bx bx-search'></i></button>
    </form>
</header>
>>>>>>> main
</div>