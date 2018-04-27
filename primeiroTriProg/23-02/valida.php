<?php

session_start();

function verificaLogin($login, $senha){
    if($login=='admin' and $senha=='12345'){
        return true;
    }else{
        return false;
    }
}

if(verificaLogin($_POST['login'], $_POST['senha'])){
    //redirecionar
    $_SESSION['nome'] = "Administrador";
    $_SESSION['email'] = "admin@teste.com";
    header('Location:index.php');
}else{
    //redirecionar
    header('Location:index.php?erro=1');
}