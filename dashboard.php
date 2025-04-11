<?php

require_once 'Classes/Sessao.php';

Sessao::start();

// Verifica se o usuário está logado já
$user = Sessao::get('usuario');
if (!$user) {
    header("Locarion: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
    </head>
    <body>
        <h2>Bem vindo <?php echo $user->getName();?>! Aproveite a estadia.</h2>
        <p>Seu e-mail: <?php echo $user->getEmail();?> vamo melhora esse email ai</p>
        <?php if (isset($_COOKIE['email'])): ?>
            <p>E-mail que está salvo no cookie: <?php echo $_COOKIE['email']; ?></p>
        <?php endif; ?>
        <br>
        <a href="logout.php">Sair</a>
    </body>
</html>