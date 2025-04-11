<?php
include 'navbar.php';
include 'dados.php';

$id = $_GET['id'] ?? null;

foreach ($musicas as $musica) {
    if ($musica['id'] == $id) {
        // HTML para exibição de conteúdo
?>
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; padding-top: 2cm;">
            <div class="bg-dark text-light p-4" style="width: 100%; max-width: 600px; border-radius: 8px;">
                <h1 class="text-center mb-4"><?php echo $musica['titulo']; ?></h1>
                <img src="<?php echo $musica['imagem']; ?>" class="img-fluid d-block mx-auto mb-4"  style="max-width: 60%; height: auto;" alt="<?php echo $musica['titulo']; ?>"><br>
                <p class="text-center">Categoria: <?php echo $musica['categoria']; ?></p>
                <p class="text-center mb-4"><?php echo $musica['descricao']; ?></p>

                <!-- Botão Voltar -->
                <div class="text-center mt-3">
                    <a href="index.php" class="btn" style="background-color: #333; color: white; width: 100%; max-width: 200px;">Voltar</a>
                </div>
            </div>
        </div>
<?php
        exit; // Encerrar o script para evitar que outros conteúdos sejam exibidos
    }
}

echo "Música não encontrada.";
?>