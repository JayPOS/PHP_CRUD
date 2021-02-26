<?php

include_once  '../../Model/conexao.php';

// Recebendo valores dos atributos do formulario em cadastro.php
$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];

$sql = "INSERT INTO `users`(`username`, `nome_user`, `email_user`, `senha_user`) VALUES ('$usuario', '$nome', '$email', '$senha')";
$inserir = mysqli_query($conexao, $sql);
?>

<html>
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../View/css/cadastro.css">
</head>
<div class="container" style="width: 600px; margin-top: 20px;">
    <h4>Usuário cadastrado com sucesso</h4>
    <div class="container" style="align-items: center; padding-top: 10px;">
        <a href="../../index.php" role="button" class="btn btn-sm" id="botao">Voltar para o início</a>
    </div>
    <br>
    <h4 style="margin-top: 20px;">Para cadastrar um novo usuário:</h4>
    <br>
    <div class="container" style="align-items: center;">
        <a href="../../View/cadastro.php" role="button" class="btn btn-sm" id="botao">Cadastrar novo usuário</a>
    </div>

</div>
</html>