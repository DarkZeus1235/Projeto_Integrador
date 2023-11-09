<?php
include("../static/conexao.php");

if (!isset($_SESSION)) {
    require('../protect/protect.php');
}
if (!isset($_SESSION)) {
    session_start();
}
$itens_carrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : array();

$total = 0; // Inicialize a variável $total com zero

if (isset($_POST['confirmarPedido'])) {
    // Aqui você pegaria os itens da sessão e os inseriria no banco
    foreach ($_SESSION['carrinho'] as $id_bebida => $quantidade) {
        // Preparar uma consulta SQL segura
        $stmt = $mysqli->prepare("SELECT valor FROM cadastro_bebidas WHERE id_bebida = ?");
        $stmt->bind_param("i", $id_bebida);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($produto = $resultado->fetch_assoc()) {
            $subtotal = floatval($produto['valor']) * $quantidade;
            $total += $subtotal;
        }
        $stmt->close();
    }
}

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/menu_dieimes.css">
    <link rel="stylesheet" href="../css/dieimes.css">
    <link rel="icon" href="../Imagens/Icon.png">
    <title>Taverna de Valhalla - Carrinho</title>
</head>


<body>
    <?php
    include('../static/menu_conta.php');
    ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div id="alinhar_dashboard" class="table-responsive-md">
                <!-- Adicione a classe 'table-responsive' para tornar a tabela responsiva -->
                <br>
                <h2>
                    <center>Pedidos feitos no Sistema:</center>
                </h2>
                <div class="table-responsive">
                    <table id="table" class="table align-middle">
                        <thead> <!-- Adicione um cabeçalho de tabela -->
                            <tr>
                                <th>Imagem do Produto:</th>
                                <th>Código da Bebida:</th>
                                <th>Nome:</th>
                                <th>Email:</th>
                                <th>Pedido:</th>
                                <th>Valor:</th>
                                <th>Quantidade no carrinho:</th>
                                <th>Funcionalidades:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            if (isset($_POST['deletarPedido'])) {
                                $id_bebida_a_deletar = $_POST['id_bebida']; // Obtém o ID da bebida a ser deletada
                            
                                // Remove a bebida do carrinho com base no ID
                                if (isset($_SESSION['carrinho'][$id_bebida_a_deletar])) {
                                    unset($_SESSION['carrinho'][$id_bebida_a_deletar]);

                                    // Exiba um alerta em JavaScript
                                    echo '<script>alert("Produto deletado do carrinho com sucesso!");</script>';
                                    // Recarregue a página
                                    echo '<script>window.location.reload();</script>';
                                }
                            }

                            foreach ($itens_carrinho as $id_bebida => $quantidade) {
                                // Preparar uma consulta SQL segura
                                $stmt = $mysqli->prepare("SELECT * FROM cadastro_bebidas WHERE id_bebida = ?");

                                // Associar o parâmetro "id_bebida" ao statement
                                $stmt->bind_param("i", $id_bebida);

                                // Executar a consulta
                                $stmt->execute();

                                // Obter os resultados
                                $resultado = $stmt->get_result();

                                // Pegar os dados do produto
                                if ($produto = $resultado->fetch_assoc()) {
                                    // Inicie uma nova linha para cada item do carrinho
                                    echo "<tr>";


                                    echo "<td><img src='../" . $produto['arquivo_caminho'] . "' alt='Imagem da bebida' width='100'></td>";
                                    echo "<td>" . $produto['id_bebida'] . "</td>";
                                    echo "<td>" . $produto['nome_bebida'] . "</td>";
                                    echo "<td>" . $_SESSION['email'] . "</td>";
                                    echo "<td>" . $produto['descricao'] . "</td>";
                                    echo "<td>" . $produto['valor'] . "</td>";
                                    echo "<td>" . $quantidade . "</td>";
                                    echo "<td><form method='post' action=''>
                                    <input type='hidden' name='id_bebida' value='$id_bebida'>
                                    <button type='submit' name='deletarPedido' class='btn btn-danger'>Deletar</button>
                                  </form></td>";

                                    // Feche a linha para o item do carrinho
                                    echo "</tr>";
                                }

                                // Fechar o statement
                                $stmt->close();
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
                <p>Valor total = R$ <?php echo number_format($total, 2, ',', '.'); ?></p>
            </div>
            <button class="btn btn-danger"><a class="btn btn-danger" href="../index.php">Cancelar</a></button>
            <button class="btn btn-success"><a id="finalizar_compra" class="btn btn-success"
                    href="../user/metodo_pag.php">Finalizar Compra</a></button>
        </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</html>