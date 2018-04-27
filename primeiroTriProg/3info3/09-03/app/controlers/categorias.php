<?php

 //Controladores/ categorias.php

 //Ação principal: listar todas as categorias

require_once '../modelo/CRUDCategoria.php';

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){

    case 'index';

        $crud = new CRUDCategoria();
        $categorias = $crud->getCategorias();
        echo ('<pre>');

       include '../views/categorias/index.php';
        break;


    case 'exibir';
    $id = $_GET ['id'];
    $crud = new CRUDCategoria();
    $categoria = $crud->getCategoria($id);

    include '../views/templates/cabecalho.php';
    include '../views/categorias/exibir.php';
    include '../views/templates/rodape.php';
    break;

    case 'inserir';
        if (!isset($_POST['gravar'])) {
            include '../views/templates/cabecalho.php';
            include '../views/categorias/inserir.php';
            include '../views/templates/rodape.php';

        }else{ //gravar dados no bd

            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];

            $novaCat = new Categoria(null, $nome, $descricao);
            $crud = new CRUDCategoria();
            $crud->insertCategoria($novaCat);

            header('Location: categorias.php');
        }

    case 'alterar';

        if (!isset($_POST['gravar'])) {

            $id = $_GET;
            include '../views/templates/cabecalho.php';
            include '../views/categorias/alterar.php';
            include '../views/templates/rodape.php';

        }else{ //gravar dados no bd

            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];

            $novaCat = new Categoria(null, $nome, $descricao);
            $crud = new CRUDCategoria();
            $crud->insertCategoria($novaCat);

            header('Location: categorias.php');
        }


    default; //caso não seja nenhum dos anteriores
        echo 'Ação inválida';
}



