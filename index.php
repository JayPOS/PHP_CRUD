
<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario de Testes</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./View/css/principal.css">
</head>
<body>

<div class="container" id="container500" >
    <h4 style="margin-top: 40px;" >Login</h4>
    <form action="#" id="login" class="less-margin">
        <div class="form-group">
            <label for="email-input" class="form-label">Endereço de Email</label>
            <input type="email" class="form-control" id="email-input" name="email" placeholder="Insira seu Email">
        </div>
        <br>
        <div class="form-group">
            <label for="password-input" class="form-label">Endereço de Email</label>
            <input type="password" class="form-control" id="password-input" name="senha" placeholder="Insira sua Senha">
        </div>
        <button type="submit" id="botao" class="btn btn-sm" style="margin-top: 10px;">Login</button>
    </form>
</div>
<div id="container500" class="container">
    <form action="./View/cadastro.php" id="login" class="less-margin">
        <div class="form-group" style="text-align: left;">
            <label class="form-label">Ainda não tem uma conta?</label>
            <button type="submit" id="botao" class="btn btn-sm">Cadastre-se Aqui</button>
        </div>
    </form>
</div>
<div class="container" id="container500" style="margin-top: 100px; display: block;" >
    <h5>Deseja listar os usuários?</h5>
    <a href="./View/listar_produtos.php" role="button" id="botao" class="btn btn-sm" style="margin-top: 10px;">Clique aqui</a>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>