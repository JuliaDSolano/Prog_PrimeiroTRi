

<h2>Alterar categoria</h2>

<form method="post" action="?acao=alterar">

    <label for="nome"> Nome </label>
    <input type="hidden" value="<?= $categoria->getId() ?>"/>
    <input type="text" name="nome" id="nome" value="<?= $categoria->getNome(); ?>">
    <br>
    <label for="descricao" id="descricao"> Descrição </label>
    <textarea name="descricao" id="descricao" cols="30" rows="3"></textarea>
    <br>
    <input type="submit" name="gravar" value="Gravar"/>

</form>
