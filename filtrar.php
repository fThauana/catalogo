<?php include 'dados.php'; ?>
<form method="get">
    <label>Categoria:</label>
    <input type="text" name="categoria">
    <button type="submit">Filtrar</button>
</form>

<?php
$filtro = $_GET['categoria'] ?? '';

foreach ($musicas as $musica) {
    if (!$filtro || stripos($musica['categoria'], $filtro) !== false) {
        echo "<div><strong>{$musica['titulo']}</strong> - {$musica['categoria']}</div>";
    }
}


?>
