<h2>Alterar categoria</h2>

<form method="post" action="categorias.php?acao=alterar">

    <label for="nome"> Nome </label>

    <input type="name" value="<?=$categoria->getNome();?>" name="nome">
    <input type="descricao" value="<?=$categoria->getDescricao();?>" name="descricao">
    <input type="hidden" value="<?=$categoria->getId()?>" name="id">
    <input type="submit" name="gravar">

</form>
