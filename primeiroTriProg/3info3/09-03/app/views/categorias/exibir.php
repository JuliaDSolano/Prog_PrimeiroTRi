

<body>
    <h1>Detalhes da categoria - <?= $categoria->getNome()  ?> </h1>
    <p>Descrição; <?= $categoria->getDescricao(); ?></p>
    <a href="categorias.php?acao=alterar&id= <? $categoria->getNome() ?>">Editar a categoria</a>
    <a href="categorias.php?acao=excluir">Excluir a categotia</a>

</body>

