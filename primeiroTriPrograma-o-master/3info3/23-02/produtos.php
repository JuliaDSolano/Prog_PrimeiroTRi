<?php

//BANCO https://github.com/rafaelsperoni/modelo3info




    if (isset($_GET['acao'])){
        if ($_GET['acao'] = 1){
            $categoria = "Categoria cupcake";
        }
        elseif ($_GET['acao'] = 2){
            $categoria = "Categoria chocolate";
        }

        elseif ($_GET['acao'] = 3){
            $categoria = "Categoria brownie";
        }

        elseif ($_GET['acao'] = 4){
            $categoria = "Categoria bolo de cenoura com chocolate";
        }
            else{
                $categoria = "Opção inválida";
            }

    }elseif (isset($_GET['acao'])){
       $categoria = "Não foi encontrado nenhum produto com o tema buscado".$_POST['busca'];
    }else{
        $categoria = "Opção inválida";
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
<h1><?= $categoria ?></h1>
</body>
</html>

