<?php
session_start();

// Certifique-se de que a sessão do carrinho existe
if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
    // Você pode acessar os itens do carrinho aqui
    $itens_carrinho = $_SESSION['carrinho'];

    // Agora, você pode iterar sobre os itens do carrinho e calcular o valor total
    $total = 0;
    foreach ($itens_carrinho as $id_bebida => $quantidade) {
        // Consulte o banco de dados ou onde quer que você tenha as informações dos produtos
        $valor_unitario = obter_valor_unitario_do_banco($id_bebida);

        // Calcule o subtotal para este item
        $subtotal = $valor_unitario * $quantidade;

        // Adicione ao total
        $total += $subtotal;

        // Exiba os detalhes do pedido
        echo "Produto ID: $id_bebida, Quantidade: $quantidade, Valor Unitário: $valor_unitario, Subtotal: $subtotal<br>";
    }

    // Exiba o total da compra
    echo "Total da Compra: $total";
} else {
    // Carrinho vazio
    echo "Seu carrinho está vazio.";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu_dieimes.css">
    <link rel="stylesheet" href="../css/dieimes.css">
    <link rel="icon" href="Imagens/icon.png">
    <title>Agradecimento pela Compra</title>
</head>

<body>
    <?php
    include('../static/menu.php');
    ?>
    <?php
    include('../static/espacamento.php');
    ?>
    <main>
        <p>Obrigado por fazer sua compra na Taverna de Valhalla. Seu pedido foi processado com sucesso!</p>

        <h2>Detalhes do Pedido</h2>
        <ul>
            <?php
            $total = 0; // Variável para calcular o total da compra
            foreach ($itens_carrinho as $id_bebida => $quantidade) {
                // Consulta para obter informações do produto com base no ID
                $stmt = $mysqli->prepare("SELECT * FROM cadastro_bebidas WHERE id_bebida = ?");
                $stmt->bind_param("i", $id_bebida);
                $stmt->execute();
                $resultado = $stmt->get_result();
                $bebida = $resultado->fetch_assoc();

                echo "<li><strong>Produto:</strong> " . $bebida['nome_bebida'] . "</li>";
                echo "<li><strong>Quantidade:</strong> " . $quantidade . "</li>";
                echo "<li><strong>Valor Unitário:</strong> R$" . number_format((float) $bebida['valor'], 2, ',', '.') . "</li>";
                $subtotal = (float) $bebida['valor'] * (int) $quantidade; // Calcula o subtotal
                echo "<li><strong>Subtotal:</strong> R$" . number_format($subtotal, 2, ',', '.') . "</li>";
                $total += $subtotal; // Atualiza o total da compra
            }
            ?>
        </ul>
        <p><strong>Total da Compra:</strong> R$
            <?php echo number_format($total, 2, ',', '.'); ?>
        </p>
        <p>Os itens do seu pedido serão enviados para o endereço que você forneceu durante a criação de sua conta. Você
            receberá um e-mail de confirmação em breve com mais informações sobre o envio.</p>
    </main>
    <?php
    include('../static/espacamento.php');
    ?>
    <?php
    include('../static/rodape.php');
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</html>