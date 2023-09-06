<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "zere";
$password = "1234";
$dbname = "cadastro_cartao_credito";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}



// Verifique se os dados do formulário foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titular = $_POST['titular'];
    $numero_cartao = $_POST['numero_cartao'];
    $data_validade = $_POST['data_validade'];
    $cvv = $_POST['cvv'];

    // Inserir os dados na tabela
    $sql = "INSERT INTO cartoes (titular, numero_cartao, data_validade, cvv)
            VALUES ('$titular', '$numero_cartao', '$data_validade', '$cvv')";

    if ($conn->query($sql) === TRUE) {
        $mensagem = "Cadastro realizado com sucesso!";
    } else {
        $mensagem = "Erro ao cadastrar o cartão: " . $conn->error;
    }
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/menu_dieimes.css">
    <link rel="stylesheet" href="css/dieimes.css">
    <title>Adicionar Cartão de Crédito</title>
</head>
<body>
<?php
        include("menu.php");
    ?>
    <br>
    <div class="cad_cart">
        <h1>Adicionar Cartão de Crédito</h1>
        <form action="" method="POST">
            <label for="nome">Nome no Cartão:</label>
            <input class="ldc" type="text" name="titular"  required maxlength="80"><br /><br />


            <label for="numero">Número do Cartão:</label>
            <input class="ldc"  type="text" name="numero_cartao" id="ndcInput" maxlength="22" oninput="formatarNDC()" required> <br><br>

            <label for="validade">Validade:</label>
            <input class="ldc" type="text" name="data_validade" id="valInput" maxlength="5" oninput="formatarVAL()"  required> <br><br>
        

            <label for="cvv">CVV:</label>
            <input class="ldc"  type="password" name="cvv"  id="cvvInput" oninput="formatarCVV()" required maxlength="3"> <br /><br />
            

            <label for="cpf">CPF do Titular:</label>
            <input class="ldc" type="text" name="cpf" id="cpfInput" maxlength="14" oninput="formatarCPF()" placeholder="CPF" required> <br><br>

            <label for="bandeira">Bandeira:</label>
            <select id="bandeira" name="bandeira" required>
                <option  class="butao-cor" value="visa">Visa</option>
                <option  class="butao-cor" value="mastercard">MasterCard</option>
                <option  class="butao-cor" value="amex">American Express</option>
            </select>

            <button id="butão" class="but-cart" type="submit">Adicionar Cartão</button>
        </form>
    </div>
    <br>
    <?php
        include('rodape.php');
    ?>
    <script src="zere.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
