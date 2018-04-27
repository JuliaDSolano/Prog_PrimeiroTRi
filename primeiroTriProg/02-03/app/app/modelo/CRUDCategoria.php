<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 16:36
 */
require_once "Conexao.php";
require_once "Categoria.php";

class CRUDCategoria
{

    private $conexao;

    public function getCategorias(){
        $this-> conexao = Conexao::getConexao();
        $sql = 'select * from categoria';
        $resultado = $this -> conexao -> query($sql);
        $categorias = $resultado -> fetchAll(PDO::FETCH_ASSOC);
        $lista_Categoria = [];
        foreach ($categorias as $categoria)
            $lista_Categoria[] = new Categoria($categorias);
        return $categorias;
    }

    public function getCategoria (int $id){
        //recebe um $id inteiro e retorna o objeto categoria correspondente

        $this->conexao = DBConnection::getConexao();
        $sql= "select * from categoria where id_categoria".$id;
        $result = $this->conexao-> query($sql);
        $categoria = $result->fetch(PDO::FETCH_ASSOC);
        $objCat = new Categoria($categoria['id_categoria'], $categoria['nome_categoria'], $categoria['descricao_categoria'] );
        return $objCat;
    }
    
    
    public function insertCategoria (Categoria $categoria){
        //recebe um objeto $cat e insere na tabela categoria do BD
    }

    public function updateCategoria (Categoria $categoria){
        //
    }
}

$croods  = new CRUDCategoria();
$cats = $croods->getCategorias();

var_dump($cats);