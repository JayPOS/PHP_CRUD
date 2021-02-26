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
    
    <div class="container" style="width: 800px;">
    <br>
    <h3 style="text-align: center;">Listagem de Usuários</h3>
        <table class="table" style="margin-top: 10px;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include '../Model/conexao.php';
                    $sql = "SELECT * FROM `users`";
                    $busca = mysqli_query($conexao, $sql);

                    while( $array = mysqli_fetch_array($busca) )
                    {
                        $id_user = $array['id_user'];
                        $username = $array['username'];
                        $nome_user = $array['nome_user'];
                        $email_user = $array['email_user'];
                ?>
                <tr>
                    <td><?php echo $id_user ?></td>
                    <td><?php echo $username ?></td>
                    <td><?php echo $nome_user ?></td>
                    <td><?php echo $email_user ?></td>
                    <td>
                        <a href="editar_user.php?id=<?php echo $id_user ?>" role="button" class="btn btn-warning btn-sm" style="color: white; margin-right: 3px;"><i class="far fa-edit"></i> Editar</a>
                        <a href="deletar_user.php?id=<?php echo $id_user ?>" role="button" class="btn btn-sm apagar" > <i class="far fa-trash-alt"></i> Apagar</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>  
    </div>
    <br>
    <div class="container" style="width: 800px;">
        <h6 style="text-align: center;">Clique no botão abaixo para voltar</h6>
        <a href="../index.php" role="button" class="btn btn-sm" id="botao" style="text-align: center;">Voltar para o início</a>
    </div>
    a
</body>
</html>