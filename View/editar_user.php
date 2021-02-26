<?php 
include '../Model/conexao.php';
$id  = $_GET['id'];

?>

<?php
/* Essa é a pagina de cadastro. Acessada via index somente.*/
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
<link rel="stylesheet" href="./css/cadastro.css">
</head>
<body>


<div class="container margin-topo" id="container500">
    <h4>Edite Suas Informações</h4>
    <form action="./atualizar_produto.php" method="POST" id="login">
    <?php 
        $sql = "SELECT * FROM `users` WHERE id_user = $id";
        $buscar = mysqli_query($conexao, $sql);
        
        while ( $array = mysqli_fetch_array($buscar) )
        {
            $id_user = $array['id_user'];
            $username = $array['username'];
            $nome_user = $array['nome_user'];
            $email_user = $array['email_user'];
    ?>
            <input type="text" class="form-control" id="id-input" name="id" value="<?php echo $id_user ?>" style="display: none;">
     <div class="form-group">
            <label for="nome-input" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome-input" name="nome" value="<?php echo $nome_user ?>" required>
        </div>
        <div class="form-group">
            <label for="email-input" class="form-label">Email</label>
            <input type="email" class="form-control" id="email-input" name="email"  value="<?php echo $email_user?>" required>
        </div>
        <br>
        <div class="form-group">
            <label for="usuario-input" class="form-label">Usuário</label>
            <input type="text" class="form-control" id="usuario-input" name="usuario"  value="<?php echo $username ?>" required>
        </div>
        <br>
        <div class="form-group">
            <label for="password-input" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password-input" name="senha" placeholder="Escreva sua senha" required>
        </div>
        <br>
        <div class="form-group">
            <label for="passwordConfirm-input" class="form-label">Confirme sua senha</label>
            <input type="password" class="form-control" id="passwordConfirm-input" name="confirmaSenha" placeholder="Confirme sua senha" required>
        </div>
        <br>
        <button type="submit" id="botao" class="btn btn-sm btn-primary">Atualizar</button>
        <?php
        }
        ?>
    </form>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>