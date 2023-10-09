<?php
include('conexao.php');

if (isset($_POST['bt_nome'])) {
    $email = $_POST['bt_email'];
    $senha = password_hash($_POST['bt_senha'], PASSWORD_DEFAULT);
    $nome = $_POST['bt_nome'];
    $telefone = $_POST['bt_telefone'];
    $username = $_POST['bt_username'];
    $cpf = $_POST['bt_cpf'];
    $endereco = $_POST['bt_endereco'];

    // Verifique se o email já está cadastrado
    $verificar_email = "SELECT * FROM cadastro WHERE email = ?";
    $stmt_verificar = $mysqli->prepare($verificar_email);
    $stmt_verificar->bind_param("s", $email);
    $stmt_verificar->execute();
    $result = $stmt_verificar->get_result();

    if ($result->num_rows > 0) {
        // Email já cadastrado, retorne uma mensagem de erro
        echo "error_email_exists"; // Ou outra mensagem de erro adequada
    } else {
        // Insira os dados no banco de dados
        $query = "INSERT INTO cadastro (email, senha, nome, telefone, username, cpf, endereco) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("sssssss", $email, $senha, $nome, $telefone, $username, $cpf, $endereco);

        if ($stmt->execute()) {
            // Cadastro bem-sucedido
            echo "success"; // Resposta correta para sucesso
        } else {
            // Erro no cadastro
            echo "error"; // Resposta correta para erro
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cadastro</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/menu_dieimes.css">
    <link rel="stylesheet" href="css/dieimes.css">
    <link rel="icon" href="Imagens/icon.png">
    <style>
        /* Estilo para a notificação */
        .notification {
            display: none;
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px;
            width: 300px;
            border-radius: 5px;
            z-index: 1000;
        }
    </style>
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <div id="container" class="container">
        <div class="signup-container">
            <img src="Imagens/logo_cadastro.png" class="img-fluid" id="img-cadastro" alt="">
            <form id="cadastro" action="processa_cadastro.php" method="post">
                <h2 id="cadastro-text">Cadastro de Clientes</h2>
                <input type="text" name="bt_nome" placeholder="Nome Completo" required>
                <input type="text" name="bt_username" placeholder="Nome de Usuário" required>
                <input type="text" id="cpfInput" name="bt_cpf" placeholder="CPF" maxlength="14" oninput="formatarCPF()" required>
                <input type="tel" id="telefoneInput" name="bt_telefone" placeholder="Telefone" maxlength="15" oninput="formatarTelefone()" required>
                <input type="text" name="bt_endereco" placeholder="Endereço" required>
                <input type="email" name="bt_email" placeholder="Email" required>
                <input type="password" name="bt_senha" placeholder="Senha" required>
                <input type="submit" name="cadastrar" value="Cadastrar">
            </form>
            <!-- Adicione a div para exibir a notificação -->
            <div id="notification" class="notification">
                <?php echo $mensagem; ?>
            </div>
        </div>
    </div>
    <?php
    include('rodape.php');
    ?>
    <script src="script/zere.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>
