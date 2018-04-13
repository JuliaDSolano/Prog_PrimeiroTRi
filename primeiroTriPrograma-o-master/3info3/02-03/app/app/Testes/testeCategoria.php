<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 09:01
 */



require "../modelo/Categoria.php";

$comida = new Categoria();
$comida -> setId(1);
$comida ->setNome = "Bolo de Chocolate Recheado";
$comida ->setDescricao('Muita comida');
var_dump($comida);


//teste do metodo get categorias()
$comida2 = new Categoria(2, 'Brigadeiro', 'Chocolate com morango');
var_dump($comida2);

$crud =new Categoria();
$categorias = $crud->getCategorias();
var_dump($categorias);

$categoria -> crud-> getCategoria (1);
var_dump($categoria);