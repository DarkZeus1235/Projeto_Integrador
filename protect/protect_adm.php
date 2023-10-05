<?php
    if(!isset($_SESSION)){
    session_start();
    }

    /*$_SESSION['id_login_adm'] */
    
    if(!isset($_SESSION['id_login_adm'])) {
        die("Voce não pode acessar está página porque você não é um administrador. <p><a href=\"adm/login_adm.php\">Entrar</p>");
    }
?>