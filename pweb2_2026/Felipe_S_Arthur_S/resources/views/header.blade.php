<header class="site-header py-3 mb-4">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
        <a href="{{ route('produtos.index') }}" class="d-flex align-items-center text-decoration-none">
            <div class="header-brand d-flex align-items-center justify-content-center me-3">
                <img src="{{ asset('app/public/imagens/Logo.png') }}" alt="Logo" class="header-logo" onerror="this.style.display='none'">
                <span class="header-logo-fallback">BE</span>
            </div>
            <div>
                <h1 class="h4 text-white mb-0">Bullseye Store</h1>
                <p class="text-white-50 mb-0">Produtos, Acessórios, Serviços e Sugestões</p>
            </div>
        </a>

        <nav class="nav flex-column flex-md-row gap-2">
            <a class="btn btn-light btn-sm px-4" href="{{ route('produtos.index') }}">Produtos</a>
            <a class="btn btn-light btn-sm px-4" href="{{ route('acessorios.index') }}">Acessórios</a>
            <a class="btn btn-light btn-sm px-4" href="{{ route('servicos.index') }}">Serviços</a>
            <a class="btn btn-light btn-sm px-4" href="{{ route('sugestoes.index') }}">Sugestões</a>
        </nav>
    </div>
</header>

<style>
    .site-header {
        background: linear-gradient(135deg, #041836 0%, #004cff 100%);
        border-bottom: 1px solid rgba(255,255,255,.15);
    }

    .header-brand {
        width: 64px;
        height: 64px;
        min-width: 64px;
        border-radius: 18px;
        background: rgba(255,255,255,.15);
        position: relative;
        overflow: hidden;
    }

    .header-logo {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .header-logo-fallback {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgba(255,255,255,.95);
        font-weight: 700;
        letter-spacing: .06em;
        font-size: 1rem;
        background: rgba(13, 110, 253, .2);
    }

    .site-header .nav .btn {
        color: #0d6efd;
        background-color: #ffffff;
        border: 1px solid rgba(255,255,255,.85);
    }

    .site-header .nav .btn:hover {
        background-color: rgba(255,255,255,.9);
        color: #0d6efd;
    }
</style>
