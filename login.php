<?php
// Habilitar a exibição de erros (para depuração)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Iniciar a sessão
session_start();

// Incluir o navbar
include 'navbar.php';

$usuarioCorreto = 'rush';
$senhacorreta = '12345678';

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verificar se as credenciais estão corretas
    if ($usuario === $usuarioCorreto && $senha === $senhacorreta) {
        $_SESSION['logado'] = true;
        header('Location: protegido.php');
        exit; // Certifique-se de que o script pare após o redirecionamento
    } else {
        echo "Usuário ou senha inválidos."; // Mensagem de erro
    }
}
?>

<!-- Formulário de login -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; margin-top: 80px;">
    <div class="bg-dark text-light p-4" style="width: 100%; max-width: 400px;">
        <form method="post">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuário</label>
                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
            </div>
            <button type="submit" class="btn w-100" style="background-color:rgb(58, 2, 54); color: white; ">Entrar</button>
        </form>
        <?php if (isset($error_message)): ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= $error_message ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Incluindo o Bootstrap via CDN (caso não tenha no seu projeto) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>