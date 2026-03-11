<?php
include './header.php';
include './database/db.class.php';

$db = new db('usuario');
$db->checkLogin();
?>

<div class="container mt-5">
    <h2 class="text-center mb-5 text-primary">
        BullsEye - Controle da loja
    </h2>

    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg h-100">
                <img src="../assets/usuarioMain.jpg" class="card-img-top" alt="Usuários">
                <div class="card-body text-center">
                    <h4 class="card-title">Usuários</h4>
                    <p class="card-text">Gerencia de usuários.</p>
                    <a href="./Usuario/UsuarioList.php" class="btn btn-primary w-100">
                        Acessar Usuários
                    </a>
                </div>
            </div>
        </div>  

        <div class="col-md-4 mb-4">
            <div class="card shadow-lg h-100">
                <img src="../assets/produtoMain.jpg" class="card-img-top" alt="Produtos">
                <div class="card-body text-center">
                    <h4 class="card-title">Produtos</h4>
                    <p class="card-text">Controle de estoque e cadastro de produtos.</p>
                    <a href="./Produtos/ProdutosList.php" class="btn btn-success w-100">
                        Acessar Produtos
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-lg h-100">
                <img src="../assets/servicoMain.jpg" class="card-img-top" alt="Serviços">
                <div class="card-body text-center">
                    <h4 class="card-title">Serviços</h4>
                    <p class="card-text">Gerencia de serviços.</p>
                    <a href="./Servicos/ServicoList.php" class="btn btn-warning w-100">
                        Acessar Serviços
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './footer.php'; ?>