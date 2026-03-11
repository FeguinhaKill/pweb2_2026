<?php
include '../header.php';
include '../Database/db.class.php';

$db = new db('usuario');
$data = null;

if (!empty($_POST)) {
    try {
        $errors = [];

        if (empty($_POST['nome'])) $errors[] = 'O nome é obrigatório';
        if (empty($_POST['telefone'])) $errors[] = 'O telefone é obrigatório';
        if (empty($_POST['cpf'])) $errors[] = 'O CPF é obrigatório';

        if (empty($errors)) {
            if (empty($_POST['id'])) {
                if (!empty($_POST['senha']) && $_POST['senha'] === $_POST['c_senha']) {
                    $_POST['senha'] = password_hash($_POST['senha'], PASSWORD_BCRYPT);
                    unset($_POST['c_senha'], $_POST['id']);
                    $db->store($_POST);
                    echo "<div class='alert alert-success text-center'>Registro salvo com sucesso!</div>";
                } else {
                    echo "<div class='alert alert-danger text-center'>As senhas não conferem!</div>";
                }
            } 
            else {
                if (!empty($_POST['senha'])) {
                    if ($_POST['senha'] === $_POST['c_senha']) {
                        $_POST['senha'] = password_hash($_POST['senha'], PASSWORD_BCRYPT);
                    } else {
                        echo "<div class='alert alert-danger text-center'>As senhas não conferem!</div>";
                        exit;
                    }
                } else {
                    unset($_POST['senha'], $_POST['c_senha']);
                }
                unset($_POST['c_senha']);
                $db->update($_POST);
                echo "<div class='alert alert-info text-center'>Registro atualizado com sucesso!</div>";
            }

            echo "<script>
                setTimeout(()=> window.location.href = './UsuarioList.php', 2000);
            </script>";
        } else {
            foreach ($errors as $err) {
                echo "<div class='alert alert-danger text-center'>$err</div>";
            }
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
        <div class="card-header bg-primary text-white text-center">
            <h3><i class="bi bi-person-fill"></i> Formulário do Usuário</h3>
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
                        <label class="form-label">Email</label>
                        <input class="form-control" type="email" name="email" value="<?= $data->email ?? '' ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">CPF</label>
                        <input class="form-control" type="text" name="cpf" value="<?= $data->cpf ?? '' ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Telefone</label>
                        <input class="form-control" type="text" name="telefone" value="<?= $data->telefone ?? '' ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Login</label>
                        <input class="form-control" type="text" name="login" value="<?= $data->login ?? '' ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Senha</label>
                        <input class="form-control" type="password" name="senha" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Confirmar Senha</label>
                        <input class="form-control" type="password" name="c_senha" required>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="./UsuarioList.php" class="btn btn-secondary">
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