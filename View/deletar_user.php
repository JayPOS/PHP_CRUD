<?php
include '../Model/conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `users` WHERE id_user = $id";
$deletar = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>Listagem de Usuários</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/listar_produtos.css">
<script src="https://kit.fontawesome.com/accbe2296f.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container container500" style="display: flex; flex-direction: column; position: relative;">
    <center>
        <h1 style="position:relative; margin-top: 10px">Deletado com sucesso!</h1>
        <br>
        <a href="./listar_produtos.php" class="btn btn-primary" style="max-width: min-content; position:relative; transform:translateX(-50%)"><strong>Voltar</strong></a>  
    </center> 
    </div>
</body>
</html>