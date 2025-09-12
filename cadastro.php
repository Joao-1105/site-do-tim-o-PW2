<?php
session_start();
include("conexao.php"); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM aluno WHERE email = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION['usuario'] = $email;
        header("Location: pagina1.php");
        exit;
    } else {
        $erro = "E-mail ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <div class="faixa-esquerda"></div>
    <div class="faixa-direita"></div>

    <div class="container">
        <img class="logo" src="https://th.bing.com/th/id/R.6402dea91d23f6c1fdb88648939abbdb?rik=iN9K%2f3MHYFOONA&pid=ImgRaw&r=0" alt="Corinthians" width="120">

        <div class="login-box">
            <h2>Login</h2>
            <?php if (isset($erro)) echo "<p class='erro'>$erro</p>"; ?>
            <form method="POST" action="">
                <input type="rm" name="rm" placeholder="RM" required>
                <input type="text" name="Nome" placeholder="Nome" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="text" name="cpf" placeholder="CPF" required>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>
