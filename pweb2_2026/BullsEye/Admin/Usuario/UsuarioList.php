<?php
include '../header.php';
include '../Database/db.class.php';

$db = new db('usuario');
$db->checkLogin();

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
        <i class="bi bi-people-fill"></i> Listagem de Usuários
    </h3>

    <!-- Formulário de busca -->
    <form action="./UsuarioList.php" method="post" class="mb-4">
        <div class="row g-3 align-items-center">
            <div class="col-md-3">
                <select name="tipo" class="form-select">
                    <option value="nome">Nome</option>
                    <option value="cpf">CPF</option>
                    <option value="telefone">Telefone</option>
                </select>
            </div>

            <div class="col-md-5">
                <input type="text" name="valor" placeholder="Pesquisar..." class="form-control">
            </div>

            <div class="col-md-4 d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-search"></i> Buscar
                </button>
                <a href="./UsuarioForm.php" class="btn btn-success">
                    <i class="bi bi-person-plus"></i> Cadastrar
                </a>
            </div>
        </div>
    </form>

    <!-- Tabela de usuários -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle shadow-sm">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Email</th>
                    <th scope="col" colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($dados as $item) {
                    echo "<tr>
                        <th scope='row' class='text-center'>$item->id</th>
                        <td>$item->nome</td>
                        <td>$item->telefone</td>
                        <td>$item->cpf</td>
                        <td>$item->email</td>
                        <td class='text-center'>
                            <a href='./UsuarioForm.php?id=$item->id' class='btn btn-sm btn-warning'>
                                <i class='bi bi-pencil-square'></i> Editar
                            </a>
                        </td>
                        <td class='text-center'>
                            <a href='./UsuarioList.php?id=$item->id' 
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
?>