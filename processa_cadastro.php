<?php

require_once 'Classes/Usuario.php';
require_once 'Classes/Autenticador.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email']: '';
    $password = isset($_POST['password']) ? $_POST['password']: '';

    // Sanitização dos dados
    $name = htmlspecialchars(trim($name));
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = trim($password);

    // trycatch para tratamento de erro
    try {
        $user = new User($name, $email, $password);
        Autenticador::register($user);
        echo "Usuário cadastrado com sucesso! <a>href='login.php'>Faça Login</a>";
    } catch (Exception $e) {
        echo "Erro:". $e->getMessage() . "<a href='cadastro.php'>Voltar</a>";
    }
}else {
    header("Location: cadastro.php");
    exit();
}

?>