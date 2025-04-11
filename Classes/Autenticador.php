<?php

require_once 'Usuario.php';
require_once 'Sessao.php';

class Autenticador {

    // Pega a lsita de usuários armazenada na sessão, e se não tiver, inicia um array

    private static function userCollection() {
        Sessao::start();
        if (!isset($_SESSION['users'])) {
            $_SESSION['users'] = array();
        }
        return $_SESSION['users'];
    }

    private static function saveUsers($users) {
        Sessao::start();
        $_SESSION['users'] = $users;
    }

    public static function register(User $user) {
        $users = self::userCollection();
        foreach ($users as $u) {
            if ($u->getEmail() == $user->getEmail()) {
                throw new Execption("Usuario á cadastrado");
            }
        }
        $users[] = $user;
        self::saveUsers($users);
    }

    public static function login($email, $password) {
        $users = self::userCollection();
        foreach ($users as $user) {
            if ($user->getEmail() == $email && $user->PasswordVerification($password)) {
                Sessao::set('Usuario', $user);
                return true;
            }
        }
        return false;
    }
}

?>