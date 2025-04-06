<?php
session_start();

$musicasFixas = [
    [
        'id' => 1,
        'titulo' => 'Bohemian Rhapsody',
        'categoria' => 'Rock',
        'imagem' => 'img/bohemian.jpg',
        'descricao' => 'Uma das músicas mais famosas do Queen.'
    ],
    [
        'id' => 2,
        'titulo' => 'Shape of You',
        'categoria' => 'Pop',
        'imagem' => 'img/shape.jpg',
        'descricao' => 'Hit do cantor Ed Sheeran.'
    ],
];

$musicasExtras = $_SESSION['musicasExtras'] ?? [];

$musicas = array_merge($musicasFixas, $musicasExtras);
?>
