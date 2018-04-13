<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doceria</title>
</head>

<style>

    .horizontal-menu {
        width: 200px;
    }

    .horizontal-menu a {
        color: hotpink;
        display: block;
        padding: 12px;
        text-decoration: none;
    }

    .horizontal-menu a:hover {
        background-color: pink;
    }

    .horizontal-menu {
        width: 600px;
        height: 300px;
        overflow-y: auto;
    }
</style>


<div class="horizontal-menu">
    <a href="produtos.php?acao=1">Cupcake</a>
    <a href="produtos.php?acao=2">Chocolate</a>
    <a href="produtos.php?acao=3">Brownie</a>
    <a href="produtos.php?acao=4">Bolo de Cenoura com Chocolate</a>

    <form action="produtos.php" method="post">
        <input type="text" name="busca" placeholder="Buscar">
        <input type="submit" value="Buscar">
    </form>

</div>

<?php
    if(isset($_GET['erro']) and $_GET['erro']==1){
    echo ('<h3>Dados Incorretos</h3>');
}
?>

<form action="valida.php" method="post">
    <input type="text" name="login" placeholder="Nome de Usuário">
    <input type="password" name="senha" placeholder="Digite sua senha">
    <input type="submit" value="Entrar">
</form>

</body>
</html>