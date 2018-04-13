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

$comida2 = new Categoria(2, 'Brigadeiro', 'Chocolate com morango');
var_dump($comida2);