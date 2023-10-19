<?php
    include('../conexao.php');

    require('../protect/protect_adm.php');
    
    if(!isset($_SESSION)){
        session_start();
    }

    if (isset($_POST['bt_nome'])) {
      /*----------------------------------*/
      $email = $_POST['bt_email'];
      $senha = password_hash ($_POST['bt_senha'], PASSWORD_DEFAULT);
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/dieimes.css">
    <link rel="stylesheet" href="../css/menu_dieimes.css">
    <link rel="icon" href="../Imagens/icon.png">
</head>
<body>
<?php
        include('menu_adm.php');
    ?>
    <div id="container" class="container">
        <div class="signup-container">
          <img src="../Imagens/cadastro_adm_logo.png" class="img-fluid" id="img-cadastro_adm" alt="">
            <form id="cadastro"action="#" method="post">
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
    include('../rodape.php');
  ?>
  <script src="script/zere.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>