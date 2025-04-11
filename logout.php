<?php

require_once 'Classes/Sessao.php';

Sessao::start();
Sessao::destruct();
header("Location: login.php");
exit();

?>