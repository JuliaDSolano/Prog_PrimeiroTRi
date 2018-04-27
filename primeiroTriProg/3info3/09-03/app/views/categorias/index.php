
<h1> Categorias </h1>

<a href="?acao=inserir">Inserir Categoria</a>

<table>

    <tr>
        <th> # </th>
        <th> Nome Da Categoria </th>
    </tr>


    <?php foreach ($categorias as $categoria): ?>
        <tr>
            <td> <?= $categoria->getId(); ?> <td/>
            <td><a href = "?acao=exibir&id=<?= $categoria->getId(); ?>" ><?= $categoria->getNome() ?> </a></td>
        </tr>
    <?php endforeach;?>

</table>
