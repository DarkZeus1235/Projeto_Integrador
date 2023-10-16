<?php
include('conexao.php');

// Inicialize a variável para armazenar o status da mensagem
$status = '';

if (isset($_POST['nome'])) {
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    $query = "INSERT INTO mensagem_formulario_contato (nome, email, mensagem) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        $stmt->bind_param("sss", $nome, $email, $mensagem);

        if ($stmt->execute()) {
            // A inserção no banco de dados foi bem-sucedida
            $status = 'success';
        } else {
            // Ocorreu um erro ao inserir no banco de dados
            $status = 'error';
        }

        $stmt->close(); // Feche a instrução preparada
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menu_dieimes.css">
    <link rel="stylesheet" href="css/dieimes.css">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="icon" href="Imagens/Icon.png">
    <title>Contato</title>


</head>

<body>
    <?php
    include('menu.php');
    ?>
    <div id="container" class="container">
        <header>
            <center>
                <h1 class="text1">Contato</h1>
                <p class="text1">Entre em contato conosco para mais informações.</p>
            </center>
        </header>
        <section class="contact-info">
            <div class="info-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
                <h2>Localização</h2>
                <p>Rua Rio Grande, 1187</p>
                <p>Ivaiporã, Paraná</p>
            </div>
            <div class="info-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-telephone-plus" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    <path fill-rule="evenodd" d="M12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5z" />
                </svg>
                <h2>Telefone</h2>
                <p>(43) 99650-6831</p>
            </div>
            <div class="info-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                </svg>
                <h2>Email</h2>
                <p>tavernadevalhalla@gmail.com</p>
            </div>
        </section>
        <section class="contact-form">
            <h2>Envie-nos uma mensagem</h2>
            <form id="contato" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for "email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
        <button type="submit">Enviar</button>
    </form>

    <!-- Alerta -->
    <div id="alert-container" style="display: none;"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.js"></script>
    <script>
        // Verifique o status e exiba o alerta apropriado
        <?php if ($status === 'success') : ?>
            Swal.fire({
                title: 'Sucesso',
                text: 'Mensagem enviada com Sucesso!',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirecione para a página desejada após o envio bem-sucedido
                    window.location.href = 'contato.php'; // Substitua 'contato.php' pela página desejada
                }
            });
        <?php elseif ($status === 'error') : ?>
            Swal.fire({
                title: 'Erro',
                text: 'Erro ao enviar a mensagem!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        <?php endif; ?>
    </script>

        </section>
    </div>
    <?php
    include('rodape.php');
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>''
</html>