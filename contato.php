<?php
    include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <title>Página de Contato</title>
  </head>
  <body>
      
      <div class="container">
          <h2>ENTRE EM CONTATO CONOSCO</h2>
          <h4>Horário de Atendimento:</h1>
          <p>R-Segunda à Sexta-Feira das 08h às 12h e 13:30h às 19h</p>
          <h4>Telefone / Celular:</h4>
          <p class="contato">R-(43) 3023-9521/ (43) 99650-6831</p>
          <h4>E-mail:</h4>
          <p class="contato">R-tavernavalhalla@gmail.com</p>
          <h1>Sobre a empresa</h1>
          <h4>Qual é o objetivo desta empresa?</h4>
          <p class="contato">R- A Tavererna de Valhalla nasceu para suprir a demanda de vendas de bebidas no Brasil pela Internet. Nosso e-commerce rapidamente ganhou visão e reconhecimento nacional pela grande excelência dos seus produtos e entrega rápida, tornando-se referência no ramo de vendas de bebidas. Aproveite!</p>
          <h4>Qual a motivação da criação desta empresa?</h4>
          <p class="contato">R- Os criadores ( João Pedro Fernandes Almeida, Joaquim Klima Sagionetti , João Rafael
              Bissoloti, Maria Luiza, Matheus Vital e Juan Vitor) idealizaram esta empresa a fim de cumprirem seu Projeto
              Integrador (PI) de seu Curso Técnico em Informática Para Internet do Serviço Nacional de Aprendizagem
              Comercial (Senac).</p>
        </div>

        <?php
            include('menu.php');
        ?>
      <div class="container">


          <div class="row">

            <div class="col"> 

                <h1>Mande sua dúvida</h1>
                  <form>
                      <div class="form-group">
                          <label for="nome"> Nome:</label>
                          <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite seu nome...">
                      </div>
                      <div class="form-group">
                          <label for="email"> E-mail: </label>
                          <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu e-mail...">
                      </div>
                      <div class="form-group">
                          <label for="email"> Dúvida: </label>
                          <textarea class="form-control" type="mensagem" name="mensagem" id="mensagem" placeholder="Digite sua mensagem..."></textarea> 
                      </div>
                      <div class="form-group">
                          <button id="duvida" type="submit" class="btn btn-primary"> Enviar </button>
                      </div>
                  </form>
              </div>
          </div>
        </div>
    
  </body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  
</html>