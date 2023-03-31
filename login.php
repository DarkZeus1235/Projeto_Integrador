<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="Imagens\vikingpinguço.png">
        <title>Login - Taverna</title>
    </head>
    <body>
        <div class="container">
            <div class="teste">
            <h2>Não é cadastrado? Cadastre-se agora!!</h2>
            <p>Para se cadastrar basta ter os seguintes requisitos:</p>
                <p>-Idade maior de 18 anos</p>
                <p>-Seu endereço de e-mail</p>
                <p>-Sua senha pessoal</p>
                <p>-Seu CPF </p>
            <h1>Login - Taverna de Valhalla</h1>
            <p id="email">Digite seu e-mail e senha para entrar:</p>
            </div>
                <form>
                    <div class="teste2">
                    <div id="centralizar2" class="mb-3">
                        <label >Email:</label>
                        <input placeholder="Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nós nunca compartilharemos seu e-mail com ninguém!!.</div>
                    </div>
                    <div id="centralizar3" class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Senha:</label>
                        <input placeholder="Senha" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <a id="centralizar6" href="senha.php">Esqueceu sua senha?</a>
                    <div id="centralizar4" class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Lembre-me</label>
                    </div>
                    <a type="submit" id="centralizar5" href="#" class="btn btn-primary">Entrar</a>
                </form>
            </div>
        </div>
    </div>
    <a href="cadastro.php" type="submit" class="btn btn-success" id="cadastrar">Cadastrar</a>
    </body>
</html>