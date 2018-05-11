<?php

    print_r($_GET);

    //isset - is set - verificaa se a variável existe e foi informada
    //empty - verifica se a variável está vazia
    //$_GET serve para pegar as coisas da URL
    //$_SESSION armazena as informação no cookie chamado PHPSESSID
    //session_start() e session_destroy()

    if (isset($_GET['mes']) and !empty($_GET['mes'])){
        echo "o mes informado foi: ".$_GET['mes'];
    }else{
        echo "o mes nao foi informado";
    }

?>