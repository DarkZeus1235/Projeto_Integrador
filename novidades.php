<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novidades de Valhalla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <div class="container">
        <h1 id="h1-novid">Novidades</h1>
        <div id="espaconovidad"></div>
        <div id="card-novd" class="card">
            <div id="joaquim2" class="card-body">
                <h1 class="h1-card-novid"><span class="span-novid">18/07/2023</span></h1>
                <h5>Foram adicionados novos lotes de Jägermeister, Buffalo Trace e Johnny Walker. Venha conferir essa
                    maravilha!</h5>
            </div>
            <div id="card-novd" class="card">
                <div id="joaquim2" class="card-body">
                    <h1 class="h1-card-novid"><span class="span-novid">22/07/2023</span></h1>
                    <h5>Mudamos o design do site, inserindo uma nova logo da empresa, alterando o menu e adicionando
                        novas bebidas em nosso cardápio: Dalmatore, Rémy Martin e Ballantines. </h5>
                </div>
            </div>
            <div id="card-novd" class="card">
                <div id="joaquim2" class="card-body">
                    <h1 class="h1-card-novid"><span class="span-novid">13/08/2023</span></h1>
                    <h5>Promoção de Dia dos Pais!!! Insira o nosso cupom <span class="span-novid">"PAIPINGUÇO"</span> para receber 10% de desconto em
                        todas as nossas bebidas! Compre agora!</h5>
                </div>
            </div>
            <div id="card-novd" class="card">
                <div id="joaquim2" class="card-body">
                    <h1 class="h1-card-novid"><span class="span-novid">05/09/2023</span></h1>
                    <h5>A Taverna de Valhalla estará inativa em seus serviços no dia <span class="span-novid">07/09/2023</span> por conta de feriado
                        nacional. Rebriremos novamente na próxima semana dia <span class="span-novid">11/09/2023</span>!!!</h5>
                </div>
            </div>

        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>