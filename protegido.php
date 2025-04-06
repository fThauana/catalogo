<?php
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

<h2>Adicionar nova música</h2>
<form method="post">
    <input type="text" name="titulo" placeholder="Título"><br>
    <input type="text" name="categoria" placeholder="Categoria"><br>
    <input type="text" name="imagem" placeholder="URL da imagem"><br>
    <textarea name="descricao" placeholder="Descrição"></textarea><br>
    <button type="submit">Adicionar</button>
</form>
<a href="logout.php">Sair</a>
