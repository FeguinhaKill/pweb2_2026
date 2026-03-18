<?php
session_start();
?>

<header class="header">
    <nav class="nav">
        <h3 class="welcome">Bem vindo, <?php echo $_SESSION['nome']; ?></h3>

        <ul class="nav-links">
            <li><a class="btn" href="{{ route('produtos') }}">Produtos</a></li>
            <li><a class="btn" href="{{ route('servicos') }}">Serviços</a></li>
            <li><a class="btn" href="{{ route('sugestoes') }}">Sugestões</a></li> 
        </ul>
    </nav>
</header>
<style>
    .header {
    background-color: #1abc9c;
    padding: 15px 30px;
}

.nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.welcome {
    color: white;
    margin: 1rem;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 100px;
    margin: 0;
}

.nav-links .btn {
    display: inline-block;
    padding: 10px 18px;
    background-color: white;
    color: #1abc9c;
    text-decoration: none;
    font-weight: bold;
    border-radius: 8px;
    transition: 0.3s;
}

.nav-links .btn:hover {
    background-color: #16a085;
    color: white;
}
</style>