
<h2>Excluir categoria</h2>

<form method="post" action="?acao=excluir">

    <label for="nome"> Nome </label>
    <input type="hidden" value="<?= $categoria->getId() ?>"/>
    <input type="text" name="nome" id="nome" value="<?= $categoria->getNome(); ?>">
    <br>
    <label for="descricao" id="descricao"> Descrição </label>
    <textarea name="descricao" id="descricao" cols="30" rows="3"></textarea>
    <br>
    <input type="submit" name="excluir" value="Excluir"/>

</form>
