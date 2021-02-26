<?php 

include '../Model/conexao.php';

$id = $_POST['id'];
$nome_user = $_POST['nome'];
$username_user = $_POST['usuario'];
$email_user = $_POST['email'];
$senha_user = $_POST['senha'];


?> 

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta charset="utf-8">
        <title>Formulario de Testes</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/principal.css">
        <title></title>
    </head>
    <body>

<?php
if ($senha_user != $_POST['confirmaSenha'])
{
    ?> 
    <div class="container container500" style="margin-top: 20px; align-items: center;">
        <h1>Confirmação de senha está invalida tente novamente!</h1>
        <br>
        <a href="./listar_produtos.php" role="button" class="btn btn-sm btn-primary" id="botao">Voltar</a>
    </div>     
    
    <?php
}

else
{

    $sql = "UPDATE `users` SET `username`='$username_user',`nome_user`='$nome_user',`email_user`='$email_user',`senha_user`='$senha_user' WHERE id_user = $id";
    $atualizar = mysqli_query($conexao, $sql);

    ?> 

    <div class="container container500" style="margin-top: 20px; align-items: center;">
        <h1>Alterado com sucesso!</h1>
        <br>
        <a href="./listar_produtos.php" role="button" class="btn btn-sm btn-primary" id="botao">Voltar</a>
    </div>     

    
    <?php
}

?>

    </body>
</html>