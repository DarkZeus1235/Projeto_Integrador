<?php
include('../../static/conexao.php');

require('../../protect/protect_adm.php');

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['bt_nome'])) {
    /*----------------------------------*/
    $email = $_POST['bt_email'];
    $senha = password_hash($_POST['bt_senha'], PASSWORD_DEFAULT);
    $nome = $_POST['bt_nome'];
    $funcao = $_POST['bt_funcao'];
    $caminho_imagem = "Imagens/foto_padrao.png";
    /*----------------------------------*/
    $mysqli->query("INSERT INTO cadastro_adm (nome, funcao, email, senha, foto_perfil_caminho) values('$nome', '$funcao', '$email', '$senha', '$caminho_imagem')") or
        die($mysqlierrno);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Administradores</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dieimes.css">
    <link rel="stylesheet" href="../../css/menu_dieimes.css">
    <link rel="icon" href="../../Imagens/icon.png">
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="../../index.php">
                <img src="../../Imagens/viking.png.png" alt="Logo Taverna de Valhalla" class="logo-img">
            </a>
            <span class="logo-text">
                <a href="../../index.php">Taverna de Valhalla</a>
            </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-straw" viewBox="0 0 16 16">
                                <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z" />
                            </svg>
                            Bebidas</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a id="nav-link2" class="nav-link" href="../../page/champ.php">Champanhe</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav-link" class="nav-link" href="../../page/vodka.php">Vodka</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav-link" class="nav-link" href="../../page/whisky.php">Uísque</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav-link" class="nav-link" href="../../page/rum.php">Rum</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav-link" class="nav-link" href="../../page/vinhos.php">Vinhos</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav-link" class="nav-link" href="../../page/conhaque.php">Conhaque</a>
                            </li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="../../page/novidades.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                            </svg> Novidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../page/contato.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> Contato</a>
                    </li>
                    </li>
                    <?php
                    if (isset($_SESSION['id_login_adm'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../../adm/dashboard.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
                                    <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z" />
                                </svg> Painel</a>
                        </li>
                        </li>
                    <?php
                    }
                    ?>
                    <?php
                    if (!isset($_SESSION['id_login'])) {
                    if (!isset($_SESSION['id_login_adm'])){   
                    ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg></i>
                                Minha conta</a>
                        <?php
                    }}
                        ?>
                        <?php
                        if (isset($_SESSION['nome'])) {

                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg></i>
                                <?php echo $_SESSION['nome']; ?></a>
                        <?php
                        }
                        ?>
                        <ul class="dropdown-menu">
                            <?php
                            if (!isset($_SESSION['nome'])) {
                            ?>
                                <li class="nav-item">
                                    <a id="nav-link2" class="nav-link" href="../../user/login.php">Entrar</a>
                                </li>
                                <li class="nav-item">
                                    <a id="nav-link" class="nav-link" href="../../user/cadastro.php">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a id="nav-link2" class="nav-link" href="../../adm/cadastro/login_adm.php">Login de Administrador</a>
                                </li>
                            <?php
                            } else {
                            ?>

                                <?php
                                if (isset($_SESSION['id_login_adm'])) {

                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../adm/conta_adm.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
                                                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Minhas Informações</a>
                                    </li>
                                <?php
                                }
                                ?>
                                <?php
                                if (isset($_SESSION['id_login_adm'])) {

                                ?>
                                    <li class="nav-item">
                                        <a id="nav-link" class="nav-link" href="../cadastro/cadastro_adm.php">Cadastrar Administrador</a>
                                    </li>
                                <?php
                                }
                                ?>


                                <li class="nav-item">
                                    <a class="nav-link" id="logout" href="../../Projeto_Integrador/static/logout.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg>
                                        Sair</a>
                                </li>
                                <?php
                                if (isset($_SESSION['id_login'])) {

                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../Projeto_Integrador/user/conta.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
                                                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Minhas Informações</a>
                                    </li>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </ul>
                        </form>
            </div>
        </div>
    </nav>
</header>
    <div id="container" class="container">
        <div class="signup-container">
            <img src="../../Imagens/cadastro_adm_logo.png" class="img-fluid" id="img-cadastro_adm" alt="">
            <form id="cadastro" action="#" method="post">
                <h2 id="cadastro-text">Cadastro de Administradores</h2>
                <input type="text" name="bt_nome" placeholder="Nome Completo" required>
                <input type="text" name="bt_funcao" placeholder="Função" required>
                <input type="email" name="bt_email" placeholder="Email" required>
                <input type="password" name="bt_senha" placeholder="Senha" required>
                <input type="submit" name="cadastrar" value="Cadastrar" onclick="return validateFields()">
            </form>
            <script>
                // Manipule o evento de envio do formulário
                $('#cadastro').on('submit', function(e) {
                    e.preventDefault(); // Impede o envio padrão do formulário

                    // Coleta os dados do formulário
                    var formData = $(this).serialize();

                    // Faça uma solicitação AJAX para enviar os dados ao servidor
                    $.ajax({
                        type: 'POST',
                        url: 'cadastro_adm.php', // Substitua 'processa_cadastro.php' pelo nome do arquivo de processamento real
                        data: formData,
                        success: function(response) {
                            if (response === 'success') {
                                // Redirecione para a página de login após o cadastro bem-sucedido
                                Swal.fire({
                                    title: 'Error',
                                    text: 'Erro no cadastro!',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                })
                            } else {
                                Swal.fire({
                                    title: 'Sucesso',
                                    text: 'Cadastro criado com sucesso!',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Redirecione para a página de login após o cadastro bem-sucedido
                                        window.location.href = 'cadastro_adm.php'; // Substitua 'login.php' pela página desejada
                                    }
                                });
                            }
                        },
                        error: function() {
                            Swal.fire({
                                title: 'Erro',
                                text: 'Erro na comunicação com o servidor.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                });
            </script>
            </script>
        </div>
    </div>
    </div>
    </div>
    <?php
    include('../../static/rodape.php');
    ?>
    <script src="../../script/zere.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>