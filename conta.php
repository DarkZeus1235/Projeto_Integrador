<?php
include('conexao.php');

if (!isset($_SESSION)) {
    session_start();
}
$consultar_banco = "SELECT * FROM cadastro";

$retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
$quantidade_cadastros = $retorno_consulta->num_rows;

if (isset($_POST['foto'])) {
    if (isset($_FILES['foto'])) {
        $arquivo = $_FILES['foto'];
        if ($arquivo['size'] > 15000000) {
            die("Arquivo muito grande!! Max: 15MB");
        }
        if ($arquivo['error']) {
            die("Falha ao enviar arquivo");
        }
    }

    $pasta = "ftperfil/";
    $nome_arquivo = $arquivo['foto'];
    $novo_nome_arquivo = uniqid();
    $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));

    $camimg = $pasta . $novo_nome_arquivo . "."  . $extensao;

    $deucerto = move_uploaded_file($arquivo["foto"], $camimg);

    if ($deucerto) {
        $mysqli->query("INSERT INTO usuario (camimg) 
                values ('$camimg')") or die($mysqli->error);
    }
}
    


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_FILES["foto"])) {

$check = getimagesize($_FILES["foto"]["tmp_name"]);
if ($check === false) {
    echo "O arquivo não é uma imagem.";
    exit;
}
$arquivoUpload = $diretorioUpload . basename($_FILES["foto"]["name"]);
$extensaoArquivo = strtolower(pathinfo($arquivoUpload, PATHINFO_EXTENSION));
$extensoesPermitidas = array('jpeg', 'jpg', 'png', 'gif');

$extensaoArquivo = strtolower(pathinfo($arquivoUpload, PATHINFO_EXTENSION));

if (!in_array($extensaoArquivo, $extensoesPermitidas)) {
    echo "Tipo de arquivo não suportado.";
    exit;
}


$diretorioUpload = $_SERVER['DOCUMENT_ROOT'] . "/imagens/ftperfl/";





if (move_uploaded_file($_FILES["foto"]["tmp_name"], $arquivoUpload)) {
    $stmt = $mysqli->prepare("UPDATE pessoas SET camimg = ? WHERE id_pessoa = ?");
    $stmt->bind_param("ss", $arquivoUpload, $id);
    $stmt->execute();

    // Atualize a variável $usuario para refletir a mudança feita
    $usuario["camimg"] = $arquivoUpload;
} else {
    echo "Ocorreu um erro ao fazer o upload da imagem.";
}
}



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dieimes.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu_dieimes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="Imagens/icon.png">
    <title>Minha Conta</title>
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <h1 class="h1_text">Minha Conta</h1>

    <div class="container profile-container">
        <div class="text-center mb-4">
            <?php
            $imgPath = isset($usuario["camimg"]) && !empty($usuario["camimg"]) ? $usuario["camimg"] : 'ftperfl/foto_teste.png';
            //echo "Caminho da imagem: " . $imgPath . "<br>";
            if (file_exists($imgPath)) {
                echo "<img class='profile-picture' src='$imgPath' alt='Foto de perfil'>";
            } else {
                echo "<img class='profile-picture' src='ftperfl/foto_teste.png' alt='Foto de perfil'>";
                echo "O arquivo $imgPath não foi encontrado."; // isso é apenas para depuração
            }
            
            
            ?>

<form action="" method="post" enctype="multipart/form-data" class="mb-4">
            <div class="mb-3">
                <input type="file" name="foto" class="form-control" placeholder="Mudar foto de perfil">
            </div>
            <div class="text-center">
                <input type="submit" value="Envie a sua foto" class="btn btn-primary">
            </div>
        </form>
    <div class="contaaiiner">
        <!-- Profile Section -->
        <div class="account-section">
            <h2>Meu Perfil</h2>

            <div class="profile-info">
                <div class="info-item">
                    <?php
                    if (isset($_SESSION)) {
                    ?>
                        <h3>Nome: <?php echo $_SESSION['nome']; ?>
                        </h3>
                        <p>Email Cadastrado: <?php echo $_SESSION['email']; ?></p>
                        <p>Senha Cadastrada: <?php echo $_SESSION['senha'];?></p>
                </div>
                <div class="info-item">
                    <?php
                        if(isset($_SESSION['id_login_adm'])){
                    ?>
                    <h3>Função do Administrador:</h3>
                    <?php echo $_SESSION['funcao'];?>
                    <?php
                    }else{
                    ?>
                     <h3>Endereço:</h3>
                    <p><?php echo $_SESSION['endereco']; ?></p>
                    <?php
                    }
                    ?>
                </div>
            <?php
                    }
            ?>
            </div>
        </div>

        <!-- Orders Section -->
        <?php 

        $logins = $retorno_consulta -> fetch_assoc();
            if(isset($_SESSION['id_login_adm'])){
        ?>
        <div class="account-section">
            <h2>Solicitações de Ajuda</h2>
            <ul class="order-list">
                <li class="order-item">
                    <strong>Solicitação #68980</strong>
                    <p>Data da Solicitação: 10/09/2023 </p>
                    <p>Solicitação: Preciso de Ajuda para cadastrar uma conta, o meu endereço de email está dando erro.</p>
                </li>
                <li class="order-item">
                    <strong>Solicitação #67890</strong>
                    <p>Data da Solicitação: 18/09/2023</p>
                    <p>Solicitação: Não consigo efetuar a compra da bebida Whisky Malboro.</p>
                </li>
            </ul>
        </div>
        <?php
        }else{
        ?>
        <div class="account-section">
            <h2>Meus Pedidos</h2>
            <ul class="order-list">
                <li class="order-item">
                    <strong>Pedido #68980</strong>
                    <p>Data do Pedido: 10/09/2023 </p>
                    <p>Valor: R$ 1.500,43</p>
                </li>
                <li class="order-item">
                    <strong>Pedido #67890</strong>
                    <p>Data do Pedido: 18/09/2023</p>
                    <p>Valor: R$750.50</p>
                </li>
            </ul>
        </div>
        <?php
        }
        ?>

        <!-- Delete Account Section -->
        <?php
            if(isset($logins)){ 
            ?>
        <div class="account-section delete-account">
            <h2>Deletar Conta</h2>
            <p>Se você quiser deletar sua conta, clique no botão abaixo:</p>
            <button class="btn btn-danger"><a id="botao-aviso" href="deletar.php?codigo_cadastro=<?php echo $logins['id_login'];?>">Deletar Minha Conta</a></button>
        </div>
        <?php
        }
        ?>
    </div>
    <?php
    include('rodape.php');
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>