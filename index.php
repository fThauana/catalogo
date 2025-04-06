<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopTuns - catálogo de músicas favoritas</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>

<?php include 'dados.php'; ?>
<h1>Catálogo de Músicas</h1>
<a href="filtrar.php">Filtrar por categoria</a> | 
<a href="login.php">Área restrita</a><br><br>

<?php foreach ($musicas as $musica): ?>
    <div>
        <img src="<?= $musica['imagem'] ?>" width="150">
        <h3><?= $musica['titulo'] ?></h3>
        <p>Categoria: <?= $musica['categoria'] ?></p>
        <a href="detalhes.php?id=<?= $musica['id'] ?>">Ver mais</a>
    </div>
    <hr>
<?php endforeach; ?>

    
</body>
</html>