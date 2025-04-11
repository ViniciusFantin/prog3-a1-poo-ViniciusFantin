<?php

require_once 'Classes/Autenticador.php';
require_once 'Classes/Sessao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] :'';

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $senha = trim($senha);

    if (Autenticador::login($email, $senha)) {
        // Se marcado, cria um cookie com expiração de 30 dias
        if (isset($_POST['lembrar'])) {
            setcookie('email', $email, time() + (86400 * 30), "/"); // 86400 = 1 dia
        } else {
            setcookie("email", $email, time() - 3600);
        }

        header("Location: dashboard.php");
        exit();
    } else {
        echo "Email ou senha inválidos! <a href='login.php'>Tente Novamente</a>";
    }
} else {
    header("Location: login.php");
    exit();
}

?>