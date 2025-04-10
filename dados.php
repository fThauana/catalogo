<?php
session_start();

$musicasFixas = [
    [
        'id' => 1,
        'titulo' => 'Bohemian Rhapsody',
        'categoria' => 'Hard rock,',
        'imagem' => 'https://queennet.com.br/wp-content/uploads/2022/12/NATO-7-010.jpg',
        'descricao' => 'Uma das músicas mais famosas do Queen.'
    ],
    [
        'id' => 2,
        'titulo' => 'St. Chroma',
        'categoria' => 'Hip-Hop/rap',
        'imagem' => 'https://akamai.sscdn.co/uploadfile/letras/albuns/9/8/4/e/2420011730135018.jpg',
        'descricao' => 'Música percursora do albúm "Crhomakopia" de Tyler, the Creator.'
    ],
    [
        'id' => 3,
        'titulo' => 'St. Chroma',
        'categoria' => 'Hip-Hop/rap',
        'imagem' => 'https://akamai.sscdn.co/uploadfile/letras/albuns/9/8/4/e/2420011730135018.jpg',
        'descricao' => 'Música percursora do albúm "Crhomakopia" de Tyler, the Creator.'
    ],
    [
        'id' => 4,
        'titulo' => 'St. Chroma',
        'categoria' => 'Hip-Hop/rap',
        'imagem' => 'https://akamai.sscdn.co/uploadfile/letras/albuns/9/8/4/e/2420011730135018.jpg',
        'descricao' => 'Música percursora do albúm "Crhomakopia" de Tyler, the Creator.'
    ],
    [
        'id' => 5,
        'titulo' => 'St. Chroma',
        'categoria' => 'Hip-Hop/rap',
        'imagem' => 'https://akamai.sscdn.co/uploadfile/letras/albuns/9/8/4/e/2420011730135018.jpg',
        'descricao' => 'Música percursora do albúm "Crhomakopia" de Tyler, the Creator.'
    ],
    [
        'id' => 6,
        'titulo' => 'St. Chroma',
        'categoria' => 'Hip-Hop/rap',
        'imagem' => 'https://akamai.sscdn.co/uploadfile/letras/albuns/9/8/4/e/2420011730135018.jpg',
        'descricao' => 'Música percursora do albúm "Crhomakopia" de Tyler, the Creator.'
    ],
    [
        'id' => 7,
        'titulo' => 'St. Chroma',
        'categoria' => 'Hip-Hop/rap',
        'imagem' => 'https://akamai.sscdn.co/uploadfile/letras/albuns/9/8/4/e/2420011730135018.jpg',
        'descricao' => 'Música percursora do albúm "Crhomakopia" de Tyler, the Creator.'
    ],
    [
        'id' => 8,
        'titulo' => 'St. Chroma',
        'categoria' => 'Hip-Hop/rap',
        'imagem' => 'https://akamai.sscdn.co/uploadfile/letras/albuns/9/8/4/e/2420011730135018.jpg',
        'descricao' => 'Música percursora do albúm "Crhomakopia" de Tyler, the Creator.'
    ],
    [
        'id' => 9,
        'titulo' => 'St. Chroma',
        'categoria' => 'Hip-Hop/rap',
        'imagem' => 'https://akamai.sscdn.co/uploadfile/letras/albuns/9/8/4/e/2420011730135018.jpg',
        'descricao' => 'Música percursora do albúm "Crhomakopia" de Tyler, the Creator.'
    ],
    [
        'id' => 10,
        'titulo' => 'St. Chroma',
        'categoria' => 'Hip-Hop/rap',
        'imagem' => 'https://akamai.sscdn.co/uploadfile/letras/albuns/9/8/4/e/2420011730135018.jpg',
        'descricao' => 'Música percursora do albúm "Crhomakopia" de Tyler, the Creator.'
    ],
    [
        'id' => 11,
        'titulo' => 'St. Chroma',
        'categoria' => 'Hip-Hop/rap',
        'imagem' => 'https://akamai.sscdn.co/uploadfile/letras/albuns/9/8/4/e/2420011730135018.jpg',
        'descricao' => 'Música percursora do albúm "Crhomakopia" de Tyler, the Creator.'
    ],
    [
        'id' => 12,
        'titulo' => 'St. Chroma',
        'categoria' => 'Hip-Hop/rap',
        'imagem' => 'https://akamai.sscdn.co/uploadfile/letras/albuns/9/8/4/e/2420011730135018.jpg',
        'descricao' => 'Música percursora do albúm "Crhomakopia" de Tyler, the Creator.'
    ],
    [
        'id' => 13,
        'titulo' => 'St. Chroma',
        'categoria' => 'Hip-Hop/rap',
        'imagem' => 'https://akamai.sscdn.co/uploadfile/letras/albuns/9/8/4/e/2420011730135018.jpg',
        'descricao' => 'Música percursora do albúm "Crhomakopia" de Tyler, the Creator.'
    ],
];

$musicasExtras = $_SESSION['musicasExtras'] ?? [];

$musicas = array_merge($musicasFixas, $musicasExtras);
