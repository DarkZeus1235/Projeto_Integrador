<header>
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="Imagens/vikingpinguço.png" alt="" class="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promoções</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                    <input type="submit" value="Pesquisar" class="btn custom-btn">
                </form>
                <?php
                if (!isset($_SESSION['nome'])) {
                ?>
                    <!-- <a class="nav-link" href="login.php">Entrar</a> --> 
                    <!-- <a class="nav-link" href="cadastro.php">Cadastrar</a> -->
                <?php
                } else {
                ?>
                    <!-- <a class="nav-link" id="logout" href="logout.php">Sair</a> -->
                <?php
                }
                ?>
            </div>
        </div>
    </nav>
</header>