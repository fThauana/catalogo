<?php
session_start();

// Se não estiver logado, redireciona para o login
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: login.php');
    exit;
}

// Verificar se o usuário é o admin
$isAdmin = ($_SESSION['logado'] === true) ?: false;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novo = [
        'id' => time(),  // Usando o time() como ID único
        'titulo' => $_POST['titulo'],
        'categoria' => $_POST['categoria'],
        'imagem' => $_POST['imagem'],
        'descricao' => $_POST['descricao']
    ];

    // Adiciona a nova música à sessão
    $_SESSION['musicasExtras'][] = $novo;  // Adiciona a música ao array de músicas extras
    header('Location: index.php');
    exit;
}

include 'navbar.php';  // Inclui o navbar
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
                <button id="addMusicForm" type="submit" class="btn w-30" style="background-color: rgb(58, 2, 54); color: white;">Adicionar</button>
            </div>
        </form>
        <div>
            <div class="mt-2 d-flex justify-content-between">
                <a href="index.php" class="btn " style="background-color:darkorchid; width:70px; padding: 10px; color: white;">Voltar</a>
                <a href="javascript:void(0);" class="botao-dark" style="background-color: #333" id="logoutBtn">Sair da sessão</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    /* FUNCAO DE LOGOUT */
    document.getElementById('logoutBtn').addEventListener('click', function() {
        Swal.fire({
            title: 'Você tem certeza?',
            text: "Deseja sair da sessão?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, sair!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Exibir o loading
                Swal.fire({
                    title: 'Saindo da sessão...',
                    text: 'Por favor, aguarde.',
                    imageUrl: 'https://cdn.dribbble.com/users/1415337/screenshots/10781083/media/0466184625e53796cfeb7d5c5918dec8.gif', // Você pode colocar o URL de uma imagem GIF de carregamento aqui
                    imageWidth: 100,
                    imageHeight: 100,
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    didOpen: () => {
                        // Redireciona para o logout após 2 segundos (tempo de transição do loading)
                        setTimeout(() => {
                            window.location.href = 'logout.php';
                        }, 2000);
                    }
                });
            }
        });
    });
</script>