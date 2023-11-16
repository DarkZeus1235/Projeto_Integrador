<?php
include("../static/conexao.php");
require("../protect/protect.php");

/* Iniciar a sessão se não estiver iniciada */
if (!isset($_SESSION)) {
    session_start();
}

/* Adicione o seguinte trecho para exibir mensagens de erro */
error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_POST['bt_email'])) {
    // Verifique se 'bt_id_alterar' está definido antes de usá-lo
    $id_cadastro_alterar = isset($_POST['bt_id_alterar']) ? $_POST['bt_id_alterar'] : null;

    // Restante do código permanece o mesmo
    $email = $_POST['bt_email'];
    $senha = $_POST['bt_senha'];
    $nome = $_POST['bt_nome'];
    $username = $_POST['bt_username'];
    $endereco = $_POST['bt_endereco'];

    // Adicione mensagens de depuração
    var_dump($id_cadastro_alterar, $email, $senha, $nome, $username, $endereco);

    // Use instruções preparadas para evitar SQL Injection
    $stmt = $mysqli->prepare("UPDATE cadastro
        SET email = ?, senha = ?, nome = ?, username = ?, endereco = ?
        WHERE id_login = ?");
    $stmt->bind_param("sssssi", $email, $senha, $nome, $username, $endereco, $id_cadastro_alterar);

    // Verifique o retorno do execute
    if (!$stmt->execute()) {
        die("Erro ao executar a consulta: " . $stmt->error);
    }
    $stmt->close();

    // Atualizar as variáveis de sessão
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['nome'] = $nome;
    $_SESSION['username'] = $username;
    $_SESSION['endereco'] = $endereco;
}

if (isset($_POST['bt_id'])) {
    $id_cadastro = $_POST['bt_id'];
    $sql_consultar = "SELECT * FROM cadastro WHERE id_login = '$id_cadastro'";
    $mysqli_consultar = $mysqli->query($sql_consultar) or die($mysqli->error);
    $consultar = $mysqli_consultar->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu_dieimes.css">
    <link rel="stylesheet" href="../css/dieimes.css">
    <title>Tela de Cadastro</title>
</head>

<body>
    <?php
    include('../static/menu_conta.php');
    ?>
    <div class="container-fluid" id="container">
        <div class="signup-container">
            <h2 id="h2-alterar">Alterar Cadastro</h2>
            <form action="" method="POST">
                <label for="">ID</label>
                <input type="text" name="bt_id_alterar" value="<?php
                                                                echo $_SESSION['id_login'];
                                                                ?>" disabled>
                <label>Email</label>
                <input class="form-control" type="email" name="bt_email" placeholder="Sem valor" value="<?php
                                                                                                        echo $_SESSION['email'];
                                                                                                        ?>">
                <label for="">Senha</label>
                <input class="form-control" type="password" name="bt_senha" placeholder="Sem valor" value="<?php
                                                                                                            echo $_SESSION['senha'];
                                                                                                            ?>">
                <label for="">Nome</label>
                <input type="text" name="bt_nome" placeholder="Sem valor" required value="<?php
                                                                                            echo $_SESSION['nome'];
                                                                                            ?>">
                <label for="">Usuário:</label>
                <input type="text" name="bt_username" placeholder="Sem valor" required value="<?php
                                                                                                echo isset($_SESSION['username']) ? $_SESSION['username'] : '';
                                                                                                ?>">
                <label for="">Endereço</label>
                <input type="text" name="bt_endereco" placeholder="Sem valor" required value="<?php
                                                                                                echo $_SESSION['endereco'];
                                                                                                ?>">
                <input type="submit" value="Cadastrar" onclick="return validateFields()">
                <input type="reset" id="btn-alterarr" class="custom-btn" value="Redefinir">
            </form>
        </div>
    </div>
    <?php
    include('../static/rodape.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>