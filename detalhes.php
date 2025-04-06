<?php
include 'dados.php';
$id = $_GET['id'] ?? null;

foreach ($musicas as $musica) {
    if ($musica['id'] == $id) {
        echo "<h1>{$musica['titulo']}</h1>";
        echo "<img src='{$musica['imagem']}' width='200'><br>";
        echo "<p>Categoria: {$musica['categoria']}</p>";
        echo "<p>{$musica['descricao']}</p>";
        exit;
    }
}
echo "Música não encontrada.";
