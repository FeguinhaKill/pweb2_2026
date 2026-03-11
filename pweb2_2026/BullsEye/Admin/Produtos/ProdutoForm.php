<?php
include '../header.php';
include '../Database/db.class.php';

$db = new db('produtos');
$data = null;

$dbCategoria = new db('categorias');
$categorias = $dbCategoria->all();
$dbTipoMecanismo = new db('tipomecanismo');
$tipomecanismo = $dbTipoMecanismo->all();

if (!empty($_POST)) {
    try {
        $errors = [];

        if (empty($_POST['nome'])) $errors[] = 'O nome é obrigatório';
        if (empty($_POST['descricao'])) $errors[] = 'A descrição é obrigatória';
        if (empty($_POST['preco'])) $errors[] = 'O preço é obrigatório';
        if (empty($_POST['categoria_id'])) $errors[] = 'A categoria é obrigatória';
        if (empty($_POST['mecanismo_id'])) $errors[] = 'O tipo de mecanismo é obrigatório';

        if (!empty($errors)) {
            foreach ($errors as $err) {
                echo "<div class='alert alert-danger text-center'>$err</div>";
            }
        } else {
            if (empty($_POST['id'])) {
                unset($_POST['id']);
                $db->store($_POST);
                echo "<div class='alert alert-success text-center'>Produto salvo com sucesso!</div>";
            } 
            else {
                $db->update($_POST);
                echo "<div class='alert alert-info text-center'>Produto atualizado com sucesso!</div>";
            }

            echo "<script>
                setTimeout(()=> window.location.href = '/PHP/Bullseye/Admin/Produtos/ProdutosList.php', 2000);
            </script>";
        }
    } catch (Exception $e) {
        echo "<div class='alert alert-danger'>Erro: " . $e->getMessage() . "</div>";
    }
}

if (!empty($_GET['id'])) {
    $data = $db->find($_GET['id']);
}
?>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white text-center">
            <h3><i class="bi bi-box-seam"></i> Formulário de Produto</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $data->id ?? '' ?>">

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Nome</label>
                        <input class="form-control" type="text" name="nome" value="<?= $data->nome ?? '' ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Preço</label>
                        <input class="form-control" type="number" step="0.01" name="preco" value="<?= $data->preco ?? '' ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Categoria</label>
                        <select name="categoria_id" class="form-select" required>
                            <option value="">Selecione...</option>
                            <?php foreach ($categorias as $item) {
                                $selected = ($data && $data->categoria_id == $item->id) ? "selected" : "";
                                echo "<option value='$item->id' $selected>$item->formato</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tipo de Mecanismo</label>
                        <select name="mecanismo_id" class="form-select" required>
                            <option value="">Selecione...</option>
                            <?php foreach ($tipomecanismo as $item) {
                                $selected = ($data && $data->mecanismo_id == $item->id) ? "selected" : "";
                                echo "<option value='$item->id' $selected>$item->nome</option>";
                            } ?>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descrição</label>
                    <textarea class="form-control" name="descricao" rows="4" required><?= $data->descricao ?? '' ?></textarea>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="/PHP/Bullseye/Admin/Produtos/ProdutosList.php" class="btn btn-secondary">
                        <i class="bi bi-arrow-left-circle"></i> Voltar
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>