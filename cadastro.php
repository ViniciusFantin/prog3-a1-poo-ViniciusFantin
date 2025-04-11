
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Usuário</title>
    </head>
    <body>
        <h2>Cadastro de Usuário</h2>
        <form action="processa_cadastro.php" method="post">
            <label>Nome:</label>
            <input type="text" name="name" required><br><br>

            <label>E-mail:</label>
            <input type="email" name="email" required><br><br>

            <label>Senha:</label>
            <input type="password" name="password" required><br><br>

            <button type="submit">Cadastrar</button>
        </form>
        <br>
        <a href="login.php">Já possuí cadastro? Faça Login</a>
    </body>
</html>