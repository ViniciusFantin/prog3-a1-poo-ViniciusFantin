<?php

$email_cookie = isset($_COOKIE["email"]) ? $_COOKIE["email"] : "";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <h2>Login</h2>
        <form action="processa_login.php" method="post">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo ($email_cookie); ?>" required><br><br>

            <label>Senha:</label>
            <input type="password" name="password" required><br><br>

            <label>
                <input type="checkbox" name="lembrar" <?php if ($email_cookie) echo 'checked'; ?>>
                Lembrar-me
            </label><br><br>
            <button type="submit" >Entrar</button>
        </form>
        <br>
        <a href="cadastro.php">Não possuí cadastro? Cadastre-se</a>
    </body>
</html>