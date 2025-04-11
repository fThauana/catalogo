<?php
include 'navbar.php';
session_start();
if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novo = [
        'id' => time(),
        'titulo' => $_POST['titulo'],
        'categoria' => $_POST['categoria'],
        'imagem' => $_POST['imagem'],
        'descricao' => $_POST['descricao']
    ];
    $_SESSION['musicasExtras'][] = $novo;
    header('Location: index.php');
    exit;
}
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; padding-top:2cm;">
    <div class="bg-dark text-light p-3" style="width: 100%; max-width: 500px; border-radius: 8px;">
        <h2 class="text-center mb-4">Adicionar nova música</h2>
        <form method="post">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Título" required>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" name="categoria" id="categoria" class="form-control" placeholder="Categoria" required>
            </div>
            <div class="mb-3">
                <label for="imagem" class="form-label">URL da Imagem</label>
                <input type="text" name="imagem" id="imagem" class="form-control" placeholder="URL da imagem" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" placeholder="Descrição" required></textarea>
            </div>
            <div class="mt-2">
                <button type="submit" class="btn w-30" style="background-color: rgb(58, 2, 54); color: white;">Adicionar</button>
            </div>
        </form>
        <div>
            <div class="mt-2">
               <!--  <a href="logout.php" class="btn w-30" style="color:white; background-color:rebeccapurple">Sair da conta</a>
            </div>
            <div class="mt-2"> -->
                <a href="index.php" class="btn w-30" style="background-color: #333; color: white;">Voltar</a>
            </div>
        </div>
    </div>
</div>

<!-- Incluindo o Bootstrap via CDN (caso não tenha no seu projeto) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>