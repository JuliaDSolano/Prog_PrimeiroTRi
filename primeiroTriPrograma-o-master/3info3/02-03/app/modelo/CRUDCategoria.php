<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 16:36
 */

require_once "Categoria.php";

class CRUDCategoria
{

    private $conexao;

    public function getCategorias(){
        $this-> conexao = Conexao::getConexao;
        $sql = 'select * from Categoria';
        $resultado = $this -> conexao -> query($sql);
        $categorias = $resultado -> fetchAll(PDO::FETCH_ASSOC);

        $lista_Categoria = [];
        foreach ($categorias as $categoria)
        $lista_Categoria[] = new Categoria($)

        return $categorias;
    }

}

$croods  = new CRUDCategoria();
$cats = $croods->getCategorias();

var_dump($cats);