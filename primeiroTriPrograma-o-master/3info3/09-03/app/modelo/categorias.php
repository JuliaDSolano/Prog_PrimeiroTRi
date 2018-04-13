<?php

 //Controladores/ categorias.php

 //Ação principal: listar todas as categorias

require_once '../modelo/CrudCategoria.php';

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){

    case 'index';
        echo '<pre>';

        $crud = new CRUDCategoria();
        $categorias = $crud->getCategorias();

       include '../views/categorias/index.php';
        break;

    case 'inserir';
        echo 'Você escolheu inserir';
        break;

    default; //caso não seja nenhum dos anteriores
        echo 'Ação inválida';
}

$acao = $_GET['acao'];


