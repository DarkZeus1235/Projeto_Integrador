<?php
include("conexao.php");
require("protect/protect.php");

/* teste do professor */

if (!isset($_SESSION)) {
    session_start();
}

$consultar_banco = "SELECT * FROM cadastro";

$retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
$quantidade_cadastros = $retorno_consulta->num_rows;

$id = $_SESSION['id_login_adm'];

$stmt = $mysqli->prepare("SELECT * FROM cadastro_adm WHERE id_login_adm = ? LIMIT 1");
$stmt->bind_param("s", $id);
$stmt->execute();


$result = $stmt->get_result();
$usuario = $result->fetch_assoc();


$_SESSION['id_login_adm'] = $usuario['id_login_adm'];
$_SESSION['nome'] = $usuario['nome'];
$_SESSION['funcao'] = $usuario['funcao'];
$_SESSION['email'] = $usuario['email'];
$_SESSION['senha'] = $usuario['senha'];


if (isset($_FILES["foto"])) {

    // Verifique se o arquivo é uma imagem
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check === false) {
        die("O arquivo não é uma imagem.");
    }

    // Verifique a extensão do arquivo
    $extensoesPermitidas = array('jpeg', 'jpg', 'png', 'gif');
    $extensaoArquivo = strtolower(pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION));
    if (!in_array($extensaoArquivo, $extensoesPermitidas)) {
        die("Tipo de arquivo não suportado.");
    }

    // Verifique o tamanho do arquivo (por exemplo, limite de 5MB aqui)
    if ($_FILES["foto"]["size"] > 5000000) {
        die("Arquivo muito grande!! Max: 5MB");
    }

    // Defina o local para salvar a imagem
    $diretorioUpload = "Imagens/ftperfil/";
    $novoNomeArquivo = uniqid() . "." . $extensaoArquivo;
    $caminhoFinal = $diretorioUpload . $novoNomeArquivo;

    // Tente mover o arquivo temporário para o diretório final
    if (!move_uploaded_file($_FILES["foto"]["tmp_name"], $caminhoFinal)) {
        die("Ocorreu um erro ao fazer o upload da imagem.");
    }

    // Atualize o caminho da imagem no banco de dados
    $stmt = $mysqli->prepare("UPDATE cadastro_adm SET foto_perfil_caminho = ? WHERE id_login_adm = ?");
    $stmt->bind_param("ss", $caminhoFinal, $id);
    if (!$stmt->execute()) {
        die("Erro ao atualizar o caminho da imagem no banco de dados.");
    }



    // Atualize a variável de sessão para refletir a mudança feita
    $_SESSION["foto_perfil_caminho"] = $caminhoFinal;
}




?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/menu_dieimes.css">
    <link rel="stylesheet" href="css/dieimes.css">
    <link rel="icon" href="Imagens/icon.png">

    <title>Minha Conta</title>
</head>

<body>
    <?php include("menu.php"); ?>

    <div class="container profile-container">
        <div class="text-center mb-4">
            <?php
            $imgPath = isset($usuario["foto_perfil_caminho"]) && !empty($usuario["foto_perfil_caminho"]) ? $usuario["foto_perfil_caminho"] : 'Imagens/Foto_padrao.png';
            //echo "Caminho da imagem: " . $imgPath . "<br>";
            if (file_exists($imgPath)) {
                echo "<img class='profile-picture' src='$imgPath' alt='Foto de perfil'>";
            } else {
                echo "<img class='profile-picture' src='Imagens/Foto_padrao.png' alt='Foto de perfil'>";
                echo "O arquivo $imgPath não foi encontrado."; // isso é apenas para depuração
            }


            ?>
            <h1 class="mt-3">Olá <?php echo $_SESSION["nome"]; ?></h1>
        </div>

        <form action="upload_imagem.php" method="post" enctype="multipart/form-data" class="mb-4" id="uploadForm">
            <div class="mb-3">
                <input type="file" name="foto" class="form-control" placeholder="Mudar foto de perfil">
            </div>
            <div class="text-center">
                <input type="submit" value="Envie a sua foto" class="btn btn-primary">
            </div>
        </form>
        <script>
            $(document).ready(function() {
                $("#uploadForm").submit(function(e) {
                    e.preventDefault();

                    var formData = new FormData(this);

                    $.ajax({
                        url: $(this).attr("action"),
                        type: $(this).attr("method"),
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            if (response.success) {
                                // Atualize a imagem de perfil na página
                                $(".profile-picture").attr("src", response.image_url);
                            } else {
                                alert("Erro ao enviar a imagem.");
                            }
                        },
                        error: function() {
                            alert("Erro ao enviar a imagem.");
                        }
                    });
                });
            });
        </script>

        <main>

            <h2 class="mb-3">Minhas informações:</h2>
            <p><span class="info-title">Nome:</span> <?php echo $_SESSION["nome"]; ?>

            <p><span class="info-title">Endereço:</span> <?php echo $_SESSION['funcao']; ?></p>

            <p><span class="info-title">Email:</span> <?php echo $_SESSION["email"]; ?></p>

            <div class="text-center mt-5">
                <p><a href="sair.php" class="btn btn-danger">Sair</a></p>
        </main>
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
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>

</html>