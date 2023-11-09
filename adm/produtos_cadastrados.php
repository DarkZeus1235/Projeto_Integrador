<?php
    require('../protect/protect_adm.php');

    if(!isset($_SESSION)){
        session_start();
    }
    // Conexão com o banco de dados
    $host = "localhost";
    $usuario = "PI";
    $senha = "projeto_integrador";
    $banco = "projeto_integrador";
    
    $mysqli = new mysqli($host, $usuario, $senha, $banco);
    
    if ($mysqli->connect_error) {
        die("Erro de conexão: " . $mysqli->connect_error);
    }
    
    // Consulta SQL para selecionar dados da tabela1
    $query_tabela1 = "SELECT * FROM cadastro_bebidas";
    $result_tabela1 = $mysqli->query($query_tabela1);
    
    // Consulta SQL para selecionar dados da tabela2
    $query_tabela2 = "SELECT * FROM cadastro_champ";
    $result_tabela2 = $mysqli->query($query_tabela2);

     // Consulta SQL para selecionar dados da tabela3
     $query_tabela3 = "SELECT * FROM cadastro_vodka";
     $result_tabela3 = $mysqli->query($query_tabela3);

      // Consulta SQL para selecionar dados da tabela4
      $query_tabela4 = "SELECT * FROM cadastro_uisque";
      $result_tabela4 = $mysqli->query($query_tabela4);

      // Consulta SQL para selecionar dados da tabela5
      $query_tabela5 = "SELECT * FROM cadastro_rum";
      $result_tabela5 = $mysqli->query($query_tabela5);

      // Consulta SQL para selecionar dados da tabela6
      $query_tabela6 = "SELECT * FROM cadastro_vinhos";
      $result_tabela6 = $mysqli->query($query_tabela6);

      // Consulta SQL para selecionar dados da tabela7
      $query_tabela7 = "SELECT * FROM cadastro_conhaque";
      $result_tabela7 = $mysqli->query($query_tabela7);
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/dieimes.css">
    <link rel="stylesheet" href="../css/menu_dieimes.css">
    <link rel="icon" href="../Imagens/icon.png">
</head>
<body>
<?php
    include('../static/menu.php');
    ?>
    <br>
    <br>
    <main>
        <h2>Bem-vindo ao Dashboard de Administradores!</h2>
    </main>
    <div id="contaaiiner" class="container-fluid">
    <div class="row-fluid">
        <div id="alinhar_dashboard" class="table-responsive"> <!-- Adicione a classe 'table-responsive' para tornar a tabela responsiva -->
            <h2>Bebidas Cadastradas no Index do Sistema:</h2>
            <div class="table-responsive">
            <table id="table" class="table table-striped">
                <thead> <!-- Adicione um cabeçalho de tabela -->
                    <tr>
                        <th>Imagem da Bebida:</th>
                        <th>ID da Bebida:</th>
                        <th>Nome:</th>
                        <th>Quantidade:</th>
                        <th>Valor:</th>
                        <th>Funcionalidades:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($logins = $result_tabela1->fetch_assoc()) {
                    ?>
                        <tr>
                        <td><img class="img-fluid" src="../<?php echo $logins['arquivo_caminho'];?>" alt="" width="80px" height="80px"></td>
                            <td><?php echo $logins['id_bebida']; ?></td>
                            <td><?php echo $logins['nome_bebida']; ?> </td>
                            <td><?php echo $logins['quantidade']; ?> </td>
                            <td><?php echo $logins['valor']; ?></td>
                            <td class="text-center">
                                <a id="butao-adm" class="btn btn-danger" href="deletar_produtos_cadastrados.php?codigo_bebida=<?php echo $logins['id_bebida']; ?>">Deletar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
        <div id="alinhar_dashboard" class="table-responsive"> <!-- Adicione a classe 'table-responsive' para tornar a tabela responsiva -->
            <h2>Champanhes Cadastrados no Sistema:</h2>
            <div class="table-responsive">
            <table id="table" class="table table-striped">
                <thead> <!-- Adicione um cabeçalho de tabela -->
                    <tr>
                        <th>Imagem da Bebida:</th>
                        <th>ID da Bebida:</th>
                        <th>Nome:</th>
                        <th>Quantidade:</th>
                        <th>Valor:</th>
                        <th>Funcionalidades:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($logins = $result_tabela2->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><img class="img-fluid" src="<?php echo $logins['arquivo_caminho'];?>" alt="" width="80px" height="80px"></td>
                            <td><?php echo $logins['id_champ']; ?></td>
                            <td><?php echo $logins['nome_bebida']; ?> </td>
                            <td><?php echo $logins['quantidade']; ?> </td>
                            <td><?php echo $logins['valor']; ?></td>
                            <td class="text-center">
                                <a id="butao-adm" class="btn btn-danger" href="deletar_produtos_cadastrados.php?codigo_bebida=<?php echo $logins['id_champ']; ?>">Deletar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
        <div id="alinhar_dashboard" class="table-responsive"> <!-- Adicione a classe 'table-responsive' para tornar a tabela responsiva -->
            <h2>Vodkas Cadastradas no Sistema:</h2>
            <div class="table-responsive">
            <table id="table" class="table table-striped">
                <thead> <!-- Adicione um cabeçalho de tabela -->
                    <tr>
                        <th>Imagem da Bebida:</th>
                        <th>ID da Bebida:</th>
                        <th>Nome:</th>
                        <th>Quantidade:</th>
                        <th>Valor:</th>
                        <th>Funcionalidades:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($logins = $result_tabela3->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><img class="img-fluid" src="<?php echo $logins['arquivo_caminho'];?>" alt="" width="80px" height="80px"></td>
                            <td><?php echo $logins['id_vodka']; ?></td>
                            <td><?php echo $logins['nome_bebida']; ?> </td>
                            <td><?php echo $logins['quantidade']; ?> </td>
                            <td><?php echo $logins['valor']; ?></td>
                            <td class="text-center">
                                <a id="butao-adm" class="btn btn-danger" href="deletar_produtos_cadastrados.php?codigo_bebida=<?php echo $logins['id_vodka']; ?>">Deletar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
        <div id="alinhar_dashboard" class="table-responsive"> <!-- Adicione a classe 'table-responsive' para tornar a tabela responsiva -->
            <h2>Uísque Cadastrados no Sistema:</h2>
            <div class="table-responsive">
            <table id="table" class="table table-striped">
                <thead> <!-- Adicione um cabeçalho de tabela -->
                    <tr>
                        <th>Imagem da Bebida:</th>
                        <th>ID da Bebida:</th>
                        <th>Nome:</th>
                        <th>Quantidade:</th>
                        <th>Valor:</th>
                        <th>Funcionalidades:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($logins = $result_tabela4->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><img class="img-fluid" src="<?php echo $logins['arquivo_caminho'];?>" alt="" width="80px" height="80px"></td>
                            <td><?php echo $logins['id_uisque']; ?></td>
                            <td><?php echo $logins['nome_bebida']; ?> </td>
                            <td><?php echo $logins['quantidade']; ?> </td>
                            <td><?php echo $logins['valor']; ?></td>
                            <td class="text-center">
                                <a id="butao-adm" class="btn btn-danger" href="deletar_produtos_cadastrados.php?codigo_bebida=<?php echo $logins['id_uisque']; ?>">Deletar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
        <div id="alinhar_dashboard" class="table-responsive"> <!-- Adicione a classe 'table-responsive' para tornar a tabela responsiva -->
            <h2>Rum Cadastrados no Sistema:</h2>
            <div class="table-responsive">
            <table id="table" class="table table-striped">
                <thead> <!-- Adicione um cabeçalho de tabela -->
                    <tr>
                        <th>Imagem da Bebida:</th>
                        <th>ID da Bebida:</th>
                        <th>Nome:</th>
                        <th>Quantidade:</th>
                        <th>Valor:</th>
                        <th>Funcionalidades:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($logins = $result_tabela5->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><img class="img-fluid" src="<?php echo $logins['arquivo_caminho'];?>" alt="" width="80px" height="80px"></td>
                            <td><?php echo $logins['id_rum']; ?></td>
                            <td><?php echo $logins['nome_bebida']; ?> </td>
                            <td><?php echo $logins['quantidade']; ?> </td>
                            <td><?php echo $logins['valor']; ?></td>
                            <td class="text-center">
                                <a id="butao-adm" class="btn btn-danger" href="deletar_produtos_cadastrados.php?codigo_bebida=<?php echo $logins['id_rum']; ?>">Deletar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
        <div id="alinhar_dashboard" class="table-responsive"> <!-- Adicione a classe 'table-responsive' para tornar a tabela responsiva -->
            <h2>Vinhos Cadastrados no Sistema:</h2>
            <div class="table-responsive">
            <table id="table" class="table table-striped">
                <thead> <!-- Adicione um cabeçalho de tabela -->
                    <tr>
                        <th>Imagem da Bebida:</th>
                        <th>ID da Bebida:</th>
                        <th>Nome:</th>
                        <th>Quantidade:</th>
                        <th>Valor:</th>
                        <th>Funcionalidades:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($logins = $result_tabela6->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><img class="img-fluid" src="<?php echo $logins['arquivo_caminho'];?>" alt="" width="80px" height="80px"></td>
                            <td><?php echo $logins['id_vinho']; ?></td>
                            <td><?php echo $logins['nome_bebida']; ?> </td>
                            <td><?php echo $logins['quantidade']; ?> </td>
                            <td><?php echo $logins['valor']; ?></td>
                            <td class="text-center">
                                <a id="butao-adm" class="btn btn-danger" href="deletar_produtos_cadastrados.php?codigo_bebida=<?php echo $logins['id_vinho']; ?>">Deletar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
        <div id="alinhar_dashboard" class="table-responsive"> <!-- Adicione a classe 'table-responsive' para tornar a tabela responsiva -->
            <h2>Conhaque Cadastrados no Sistema:</h2>
            <div class="table-responsive">
            <table id="table" class="table table-striped">
                <thead> <!-- Adicione um cabeçalho de tabela -->
                    <tr>
                        <th>Imagem da Bebida:</th>
                        <th>ID da Bebida:</th>
                        <th>Nome:</th>
                        <th>Quantidade:</th>
                        <th>Valor:</th>
                        <th>Funcionalidades:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($logins = $result_tabela7->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><img class="img-fluid" src="<?php echo $logins['arquivo_caminho'];?>" alt="" width="80px" height="80px"></td>
                            <td><?php echo $logins['id_conhaque']; ?></td>
                            <td><?php echo $logins['nome_bebida']; ?> </td>
                            <td><?php echo $logins['quantidade']; ?> </td>
                            <td><?php echo $logins['valor']; ?></td>
                            <td class="text-center">
                                <a id="butao-adm" class="btn btn-danger" href="deletar_produtos_cadastrados.php?codigo_bebida=<?php echo $logins['id_conhaque']; ?>">Deletar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    <?php
    include('../static/rodape.php');
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>