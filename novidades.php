<?php
    include('conexao.php');

    if(!isset($_SESSION)){
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novidades - Minha Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> <!-- Arquivo de estilo personalizado -->
    <link rel="stylesheet" href="css/dieimes.css">
    <link rel="stylesheet" href="css/menu_dieimes.css">

</head>
<body>
    <?php
        include('menu.php');
    ?>
<div class="containeer">
    <br>
    <h1 id="h1-novid">Novidades da Semana</h1>
<section class="news">
        <div class="news-item">
            <div class="date">Segunda-Feira</div>
            <h2>Novo Design do Site</h2>
            <p>Mudamos o Design do Site, inserindo uma nova logo da empresa, alterando o menu e adicionando novas bebidas em nosso cardápio: Dalmatore, Rémy Martin e Ballantines.</p>
        </div>

        <div class="news-item">
            <div class="date">Terça-feira</div>
            <h2>Nova Promoção!!</h2>
            <p>Promoção de Dia dos Pais!!! Insira o nosso CUPOM <b>"PAIPINGUÇO"</b> para receber 10% de desconto em todas as nossas bebidas! Compre agora!</p>
        </div>

        <div class="news-item">
            <div class="date">Quarta-feira</div>
            <h2>Inatividade!!</h2>
            <p>O site da Taverna de Valhalla estará inativa em seus serviços entre os dias 07/09 e 10/09 devido ao feriado nacional! Retornaremos com nossos serviços no dia 11/09.</p>
        </div>

        <div class="news-item">
            <div class="date">Quinta-feira</div>
            <h2>Título da Notícia 3</h2>
            <p>Vestibulum ac dolor at lectus bibendum fermentum. Sed dignissim urna non dolor feugiat, ac tempus libero dapibus.</p>
        </div>

        <div class="news-item">
            <div class="date">Sexta-feira</div>
            <h2>Título da Notícia 3</h2>
            <p>Vestibulum ac dolor at lectus bibendum fermentum. Sed dignissim urna non dolor feugiat, ac tempus libero dapibus.</p>
        </div>

        <div class="news-item">
            <div class="date">Sabádo</div>
            <h2>Novas Bebidas Adicionadas</h2>
            <p>Foram adicionados novos lotes de Jägermeister, Buffalo Trace e Johnny Walker. Venha conferir essas maravilhas.</p>
        </div>

        <!-- Adicione mais notícias aqui -->

    </section>

</div>
<?php
        include('espacamento.php');
    ?>
    <?php
        include('rodape.php');
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>