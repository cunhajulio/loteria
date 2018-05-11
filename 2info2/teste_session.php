<?php


session_start();
$_SESSION['login'] = 'chaves';
$_SESSION['esta_logado'] = true;

echo $_SESSION['login'];
echo $_SESSION['esta_logado'];
