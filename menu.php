<header>
    <nav>
        <a href="index.php">Início</a>
        <a href="contato.php">Contato</a>
        <a href="#">Sobre nós</a>
        <a href="#">Promoções</a>
        <?php
        if (!isset($_SESSION['nome'])) {
        ?>

            <a href="login.php">Entrar</a><a href="cadastro.php">Cadastrar</a>
        <?php

        }
        ?>

        <?php
        if (isset($_SESSION['nome'])) {
        ?>

            <a id="logout" href="logout.php">Sair</a>
        <?php

        }
        ?>
    </nav>

    <!-- A barra de pesquisa está funcionando ? -->
    <form action="#">
        <input type="text" placeholder="Pesquisar...">
        <input type="submit" value="Pesquisar">
        
    </form>
</header>