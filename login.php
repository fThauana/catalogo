<form method="post">
    <input type="text" name="usuario" placeholder="Usuário">
    <input type="password" name="senha" placeholder="Senha">
    <button type="submit">Entrar</button>
</form>

<?php
    session_start();
    $usuarioCorreto = 'rush';
    $senhacorreta = '12345678';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // Use o hash real gerado anteriormente
        if ($usuario === $usuarioCorreto && $senha === $senhacorreta) {
            $_SESSION['logado'] = true;
            header('Location: protegido.php');
            exit;
        } else {
            echo "Usuário ou senha inválidos.";
        }
    }
?>


