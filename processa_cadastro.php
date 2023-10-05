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

    // Insira os dados no banco de dados (substitua pelas suas consultas SQL reais)
    $query = "INSERT INTO cadastro (email, senha, nome, telefone, username, cpf, endereco ) values('$email', '$senha', '$nome', '$telefone', '$username' ,'$cpf', '$endereco')";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ss", $nome, $username);

    if ($stmt->execute()) {
        // Cadastro bem-sucedido
        echo "success"; // Resposta correta para sucesso
    } else {
        // Erro no cadastro
        echo "error"; // Resposta correta para erro
    }
} else {
    // Caso o formulário não tenha sido submetido corretamente
    echo "error";
}
?>