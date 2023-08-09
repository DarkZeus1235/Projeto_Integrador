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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg></i>
                            Minha conta</a>
                        <ul class="dropdown-menu">
                            <?php
                            if (!isset($_SESSION['nome'])) {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Entrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cadastro.php">Cadastrar</a>
                                </li>
                            <?php
                            } else {
                            ?>
                                <!-- <a class="nav-link" id="logout" href="logout.php">Sair</a> -->
                            <?php
                            }
                            ?>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promoções</a>
                    </li>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                        <input type="submit" value="Pesquisar" class="btn custom-btn">
                    </form>
            </div>
        </div>
    </nav>
</header>