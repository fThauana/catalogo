<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<style>
    /* Estilo para o input de busca */
    .search-input {
        background-color: transparent;
        /* fundo transparente */
        border: 1px solid white;
        color: white;
        padding-left: 2rem;
    }

    /* cor do placeH */
    .search-input::placeholder {
        color: white;
    }

    /* icone pesquisaa */
    .search-icon {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: white;
    }

    /* pesqauisa quando clicado */
    .search-input:focus {
        background-color: #000000;
        /* fundo preto quando apertado o botao de pesquisa */
        border-color: white;
        color: white;
        outline: none;
    }

    .row-cols-md-4 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding-top: 1cm;
    }

    .botao-dark {
        background-color: #1f1f1f;
        color: #f0f0f0;
        border: 2px solid #333;
        padding: 10px 20px;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .botao-dark:hover {
        background-color: #333;
        border-color: #555;
        color: #ffffff;
        box-shadow: 0 0 8px rgba(255, 255, 255, 0.1);
    }
</style>
</head>
<!-- cor do site -->

<body class="bg-black text-light">
    <!-- parte de cima do site (nav)-->
    <nav class="navbar fixed-top" style="background-color:rgb(58, 2, 54); height: 70px; ">
        <!-- container com todos os elementos -->
        <div class="container-fluid d-flex align-items-start">
            <!-- nome do site! redirecionando para pagina principal quando clicado -->
            <a class="navbar-brand d-flex align-items-center " href="index.php" style="color:white;">
                <i class="bi bi-moon-stars" style="font-size: 30px; color:white;">TopTuns</i>
            </a>
            <?php
            $current_page = basename($_SERVER['PHP_SELF']);
            if ($current_page !== 'detalhes.php' && $current_page !== 'login.php' && $current_page !== 'protegido.php'): ?>
                <!-- Busca de músicas (aparecer música e quando clicar ser redirecionado para o ver mais da música <detalhes.php>) -->
                <div class="d-flex ms-auto me-auto position-relative" style="max-width: 400px;">
                    <input class="form-control search-input" type="search" placeholder="Buscar músicas" aria-label="Search">
                    <i class="bi bi-search search-icon"></i>
                </div>
            <?php endif; ?>
            <?php
            if ($current_page !== 'protegido.php'): ?>
                <!-- Link para cadastrar música -->
                <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item ms-3">
                        <a href="login.php" class="nav-link" style="color:white; font-weight:900; "><i class="bi bi-music-note-list"> Cadastrar Musica </i></a><br><br>
                    </li>
                </ul>
            <?php endif; ?>

        </div>
    </nav>