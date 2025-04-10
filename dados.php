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
        'categoria' => 'Hip-Hop, rap',
        'imagem' => 'https://akamai.sscdn.co/uploadfile/letras/albuns/9/8/4/e/2420011730135018.jpg',
        'descricao' => 'Com produção vibrante e atmosfera cinematográfica, "ST. CHROMA" de Tyler, The Creator é uma viagem sonora ousada e cheia de estilo.'
    ],
    [
        'id' => 3,
        'titulo' => 'APT',
        'categoria' => 'Pop, Pop coreano',
        'imagem' => 'https://upload.wikimedia.org/wikipedia/pt/7/78/Ros%C3%A9_%26_Bruno_Mars_-_Apt.png',
        'descricao' => 'Uma mistura envolvente de batidas modernas com letras introspectivas, APT é aquela faixa que te faz pensar e sentir ao mesmo tempo.'
    ],
    [
        'id' => 4,
        'titulo' => 'Abracadabra',
        'categoria' => 'Dance-pop, Electropop',
        'imagem' => 'https://marcapop.com.br/wp-content/uploads/2025/02/lady-gaga-mastercard.jpeg',
        'descricao' => 'Um pop energético e misterioso, "Abracadabra" de Lady Gaga encanta com sua magia sonora e estilo ousado.'
    ],
    [
        'id' => 5,
        'titulo' => 'Oscar Winning Tears',
        'categoria' => 'Jazz',
        'imagem' => 'https://i.scdn.co/image/ab67616d0000b27394e5237ce925531dbb38e75f',
        'descricao' => 'Com elegância e emoção, "Oscar Winning Tears" de RAYE entrega um jazz intenso que mistura vulnerabilidade e sofisticação.'
    ],
    
];

$musicasExtras = $_SESSION['musicasExtras'] ?? [];

$musicas = array_merge($musicasFixas, $musicasExtras);
