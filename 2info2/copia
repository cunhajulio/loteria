<?php

    if ($_POST['login']=="admin" && $_POST['senha']=="4002"){
        setcookie('esta_logado' , true,time() + 3600);
    }

    if(isset($_GET['acao'] && $_GET['acao']== "sair")){
        setcookie('esta_logado' , false, -1);
        header('location: https://facebook.com');
    }
    if (isset($_COOKIE ['esta_logado'])){
        echo "Bem vindo ao site";
    }else{
        echo "o cookie não existe, FAÇA O LOGIN NOVAMENTE";
    }

?>

    <form action="" method="post">
        <input type="text" name="login">
        <input type="password" name="senha" >
        <input type="submit" value="logar">
    </form>

<a href="cookie.php?acao=sair">Sair</a>
