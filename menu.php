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
</div>