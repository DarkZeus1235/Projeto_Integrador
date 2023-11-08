<?php
    include("../static/conexao.php");
    session_start();
    $itens_carrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : array();

    var_dump($itens_carrinho);

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
            // Aqui você terá acesso aos dados do produto e pode exibir como desejar
            echo "Nome: " . $produto['nome_bebida'] . "<br>";
            echo "Descrição: " . $produto['descricao'] . "<br>";
            echo "Preço: " . $produto['valor'] . "<br>";
            echo "Quantidade no carrinho: " . $quantidade . "<br><br>";
        }
        
        // Fechar o statement
        $stmt->close();
    }

    if (isset($_POST['confirmarPedido'])) {
        // Aqui você pegaria os itens da sessão e os inseriria no banco
        foreach ($_SESSION['carrinho'] as $id_bebida => $quantidade) {
            // Faça a inserção no banco para cada item do carrinho
            // ...
        }
        // Limpa o carrinho depois de processar o pedido
        unset($_SESSION['carrinho']);
        // Redirecionar para uma página de confirmação ou algo do tipo
        header('Location: confirmacao.php');
        exit;
    }
    
    
    
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="../css/menu_dieimes.css">
        <link rel="stylesheet" href="../css/dieimes.css">
        <link rel="icon" href="../Imagens/Icon.png">
        <title>Taverna de Valhalla - Carrinho</title>
    </head>


<body>
    <?php
    include('../static/menu.php');
    ?>

</body>

</html>