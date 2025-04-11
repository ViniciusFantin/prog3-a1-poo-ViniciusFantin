<?php

class Sessao {

    public function start() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Define valor na sessão
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    // Retorna o valor da sessão
    public static function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null; 
    }

    // Destroi a sessão
    public static function destruct() {
        if (session_status() != PHP_SESSION_NONE) {
            session_unset();
            session_destroy();
        }
    }


}


?>