    <?php
        
        $hostname = "localhost";
        $bancodedados = "lucas_teste";
        $usuario = "PI";
        $senha = "projeto_integrador";

        $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
        if ($mysqli->connect_errno){
            echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }else


    ?>