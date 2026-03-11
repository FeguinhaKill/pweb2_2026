<?php
include './header.php';
include './database/db.class.php';

$db = new db('usuario');
$data = null;

if (!empty($_POST)) {
    try {
        $errors = [];

        if (empty($_POST['login'])) {
            $errors[] = 'O login é obrigatório';
        }

        if (empty($_POST['senha'])) {
            $errors[] = 'A senha é obrigatória';
        }

        if (!empty($_POST['login']) && !empty($_POST['senha'])) {
            $result = $db->login($_POST);

            if ($result !== 'error') {
                session_start();
                $_SESSION['usuario_id'] = $result->id;
                $_SESSION['login'] = $result->login;
                $_SESSION['nome'] = $result->nome;

                echo "<div class='alert alert-success text-center'>Login realizado com sucesso!</div>";
                echo "<script>
                    setTimeout(()=> window.location.href = 'main.php', 2000);
                </script>";
            } else {
                echo "<div class='alert alert-danger text-center'>Login ou senha incorretos, tente novamente!</div>";
            }
        }
    } catch (Exception $e) {
        echo "<div class='alert alert-danger'>Erro: " . $e->getMessage() . "</div>";
    }
}
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%;">
        <div class="card-body">
            <h3 class="text-center mb-4 text-primary">
                <i class="bi bi-shield-lock"></i> Login - Estoque BullsEye
            </h3>
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Login</label>
                    <input class="form-control" type="text" name="login" placeholder="Digite seu login">
                </div>
                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input class="form-control" type="password" name="senha" placeholder="Digite sua senha">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-box-arrow-in-right"></i> Entrar
                    </button>
                    <a href="./Usuario/UsuarioForm.php" class="btn btn-primary">
                        <i class="bi bi-person-plus"></i> Criar novo usuário
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include './footer.php'; ?>