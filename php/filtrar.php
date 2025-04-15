<?php
include 'dados.php';

// Captura a categoria escolhida no filtro (se houver)
$categoriaFiltrada = $_GET['categoria'] ?? '';

// Cria um array de categorias únicas
$categorias = [];
foreach ($musicas as $musica) {
    // Divide as categorias da música por vírgula e adiciona no array
    $categorias = array_merge($categorias, explode(',', $musica['categoria']));
}

?>

<!-- Formulário de filtro -->
<div class="col-md-3">
    <form method="get" class="mb-4">
        <label for="categoria" class="form-label">Filtre por Categoria:</label>
        <select name="categoria" id="categoria" class="form-select">
            <option value="">Todas</option>
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?= $categoria ?>" <?= $categoriaFiltrada == $categoria ? 'selected' : '' ?>><?= $categoria ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="btn mt-2" style="background-color:rebeccapurple; color:white; ">Filtrar</button>
    </form>
</div>