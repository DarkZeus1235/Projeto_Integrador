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
