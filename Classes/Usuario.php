<?php

class Usuario {
    private $name;
    private $email;

    // senha armazenada com hash
    private $password;

    public function __construct($name, $email, $password) {

        // Sanitiza os dados que são recebidos
        $this->name = htmlspecialchars(strip_tags(trim($name)));
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Armazena a senha com hash 
        $this->password = password_hash(trim($password), PASSWORD_DEFAULT);
    }

    // Getters

    public function getNome() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->password;
    }

    // Autenticação que verifica a senha que foi digitada
    public function  PasswordVerification($typedPassword) {
        return password_verify($typedPassword, $this->password);
    }
}


?>