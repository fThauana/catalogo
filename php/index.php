<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopTuns - catálogo de músicas favoritas</title>
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

        .imagem-logo {
            position: relative;
            top: -50px;
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
                <!-- <i class="bi bi-moon-stars" style="font-size: 30px; color:white;">TopTuns</i> -->
                <img class="imagem-logo" src="imagens/ChatGPT Image 14 de abr. de 2025, 21_08_15_preview_rev_1.png" alt="TopTuns" width="150" height="150" style="margin-right: 10px;">
            </a>

            <!-- busca de musicas (aparecer musica e quando clicar ser redirecionado para o ver mais da musica <detalhes.php>) -->
            <div class="d-flex ms-auto me-auto position-relative" style="max-width: 400px;">
                <form method="get" action="index.php">
                    <input class="form-control search-input" type="search" name="search" placeholder="Buscar músicas" aria-label="Search">
                    <i class="bi bi-search search-icon"></i>
                </form>
            </div>

            <!-- cadastro de musica (so para ADM que entra com senha)  -->
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item ms-3">
                    <a href="login.php" class="nav-link" style="color:white; font-weight:900; "><i class="bi bi-music-note-list"> Cadastrar Musica </i></a><br><br>
                </li>
            </ul>

        </div>
    </nav>

    <!-- FILTRAR EM 4 POR LINHA (DANDO ERRO layout) -->

    <div class="container my-5">
        <h1 class="text-center mb-5" style="color:white; padding-top:1cm; ">Catálogo de Músicas</h1>

        <?php include 'filtrar.php'; ?> <!-- filtro de musicas -->

        <div class="">
            <?php include 'dados.php';

            $search = isset($_GET['search']) ? $_GET['search'] : '';

            foreach ($musicas as $musica):
                if (!$categoriaFiltrada || stripos($musica['categoria'], $categoriaFiltrada) !== false):
                    if (!$search || stripos($musica['titulo'], $search) !== false):
            ?>
                        <div class="row row-cols-md-4 g-4">
                            <div class="card bg-dark text-light">
                                <img src="<?= $musica['imagem'] ?>" class="card-img-top" alt="Imagem do álbum">
                                <div class="card-body">
                                    <h3><?= $musica['titulo'] ?></h3>
                                    <p class="card-text">Categoria: <?= $musica['categoria'] ?></p>
                                    <a class="botao-dark" style="background-color:darkorchid" href="detalhes.php?id=<?= $musica['id'] ?>">Ver mais</a>
                                </div>
                            </div>
                        </div>
                        <hr>
            <?php
                    endif;
                endif;
            endforeach; ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>

</html>