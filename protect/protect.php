    <?php
    if(!isset($_SESSION)){
    session_start();
    }

    if(!isset($_SESSION['id_login'])) {
        die("Voce não pode acessar está página porque não está logado. <p><a href=\"login.php\">Entrar</p>");
    }
    ?>