<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Meu site</h1>

    <a href="cadastro.html">Registre-se aqui</a>
    <a href="acesso.php">Área restrita</a>

    <h2>Acesso à área restrita</h2>

    <form method="POST">
        <label for="email">E-mail</label><br>
        <input type="email" name="email"><br><br>
        <label for="senha">Senha</label><br>
        <input type="password" name="senha"><br><br>
        <input type="submit" value="Entrar">

        <?php
            include_once("assets/db/pessoa/login.php");
        ?>
    </form>
</body>
</html>