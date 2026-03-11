<?php
include '../header.php';
include '../Database/db.class.php';

$db = new db('produtos');

$dbCategoria = new db('categorias');
$categorias = $dbCategoria->all();
$dbTipoMecanismo = new db('tipomecanismo');
$tipomecanismo = $dbTipoMecanismo->all();

$categoriasMap = [];
foreach ($categorias as $cat) {
    $categoriasMap[$cat->id] = isset($cat->formato) ? $cat->formato : ($cat->nome ?? $cat->id);
}

$mecanismosMap = [];
foreach ($tipomecanismo as $mec) {
    $mecanismosMap[$mec->id] = $mec->nome ?? $mec->id;
}

if (!empty($_GET['id'])) {
    $db->destroy($_GET['id']);
}

if (!empty($_POST)) {
    $dados = $db->search($_POST);
} else {
    $dados = $db->all();
}
?>

<div class="container mt-5">
    <h3 class="text-center mb-4 text-primary">
        <i class="bi bi-box-seam"></i> Listagem de Produtos
    </h3>

    <form action="./ProdutoList.php" method="post" class="mb-4">
        <div class="row g-3 align-items-center">
            <div class="col-md-3">
                <select name="tipo" class="form-select">
                    <option value="nome">Nome</option>
                    <option value="descricao">Descrição</option>
                    <option value="categoria_id">Categoria</option>
                    <option value="mecanismo_id">Mecanismo</option>
                </select>
            </div>

            <div class="col-md-5">
                <input type="text" name="valor" placeholder="Pesquisar..." class="form-control">
            </div>

            <div class="col-md-4 d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-search"></i> Buscar
                </button>
                <a href="./ProdutoForm.php" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Cadastrar
                </a>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle shadow-sm">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Mecanismo</th>
                    <th scope="col" colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($dados as $item) {
                    $categoriaNome = $categoriasMap[$item->categoria_id] ?? '—';
                    $mecanismoNome = $mecanismosMap[$item->mecanismo_id] ?? '—';

                    echo "<tr>
                        <th scope='row' class='text-center'>$item->id</th>
                        <td>$item->nome</td>
                        <td>$item->descricao</td>
                        <td class='text-success fw-bold'>R$ " . number_format($item->preco, 2, ',', '.') . "</td>
                        <td>$categoriaNome</td>
                        <td>$mecanismoNome</td>
                        <td class='text-center'>
                            <a href='./ProdutoForm.php?id=$item->id' class='btn btn-sm btn-warning'>
                                <i class='bi bi-pencil-square'></i> Editar
                            </a>
                        </td>
                        <td class='text-center'>
                            <a href='./ProdutosList.php?id=$item->id' 
                               onclick='return confirm(\"Deseja realmente excluir?\")'
                               class='btn btn-sm btn-danger'>
                                <i class='bi bi-trash'></i> Deletar
                            </a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include '../footer.php';