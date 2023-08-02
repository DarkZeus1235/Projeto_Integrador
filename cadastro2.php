<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo">Logo</div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="signup-container">
            <h2>Cadastro</h2>
            <form action="cadastro.php" method="post">
                <input type="text" name="nome" placeholder="Nome Completo" required>
                <input type="tel" name="telefone" placeholder="Telefone" required>
                <input type="text" name="endereco" placeholder="Endereço" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
    <script src="script/script_cadastro.js"></script>
</body>
</html>
