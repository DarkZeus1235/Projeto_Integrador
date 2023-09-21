<?php
include('conexao.php');

if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novidades - Taverna de Valhalla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> <!-- Arquivo de estilo personalizado -->
    <link rel="stylesheet" href="css/dieimes.css">
    <link rel="stylesheet" href="css/menu_dieimes.css">
    <link rel="icon" href="Imagens/icon.png">

</head>

<body>
    <?php
    include('menu.php');
    ?>
    <div class="container">
        <br>
        <h1 id="h1-novid">Novidades da Semana</h1>
        <section class="news">
            <div class="news-item">
                <div class="date"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar-check" viewBox="0 0 16 16">
                        <path
                            d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg> Segunda-Feira</div>
                <h2>Novo Design do Site.</h2>
                <p>Mudamos o Design do Site, inserindo uma nova logo da empresa, alterando o menu e adicionando novas
                    bebidas em nosso cardápio: Dalmatore, Rémy Martin e Ballantines.</p>
            </div>

            <div class="news-item">
                <div class="date"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar-check" viewBox="0 0 16 16">
                        <path
                            d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg> Terça-feira</div>
                <h2>Nova Promoção!!</h2>
                <p>Promoção de Dia dos Pais!!! Insira o nosso CUPOM <b>"PAIPINGUÇO"</b> para receber 10% de desconto em
                    todas as nossas bebidas! Compre agora!</p>
            </div>

            <div class="news-item">
                <div class="date"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar-check" viewBox="0 0 16 16">
                        <path
                            d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg> Quarta-feira</div>
                <h2>Inatividade!!</h2>
                <p>O site da Taverna de Valhalla estará inativa em seus serviços entre os dias 07/09 e 10/09 devido ao
                    feriado nacional! Retornaremos com nossos serviços no dia 11/09.</p>
            </div>

            <div class="news-item">
                <div class="date"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar-check" viewBox="0 0 16 16">
                        <path
                            d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg> Quinta-feira</div>
                <h2>Atualização para Sistemas Operacionais.</h2>
                <p>Nosso sistema da Taverna de Valhalla foi atualizado para os sistemas operacionais mais recentes, como
                    Windows 11.</p>
            </div>

            <div class="news-item">
                <div class="date"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar-check" viewBox="0 0 16 16">
                        <path
                            d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg> Sexta-feira</div>
                <h2>Promoção do Halloween!!</h2>
                <p>A partir do mês de Outubro, a Taverna de Valhalla estará fazendo uma mega promoção devido ao
                    halloween, removendo frete de todas as bebidas, haverá diversas promoções de diversas bebidas
                    também.</p>
            </div>

            <div class="news-item">
                <div class="date"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar-check" viewBox="0 0 16 16">
                        <path
                            d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg> Sábado</div>
                <h2>Novas Bebidas Adicionadas.</h2>
                <p>Foram adicionados novos lotes de Jägermeister, Buffalo Trace e Johnny Walker. Venha conferir essas
                    maravilhas.</p>
            </div>

            <!-- Adicione mais notícias aqui -->

        </section>

    </div>
    <div id="espacamentonovidades"></div>
    <?php
    include('rodape.php');
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</html>