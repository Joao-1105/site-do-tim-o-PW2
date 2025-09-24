<?php
require 'Aluno.class.php';

$aluno = new Aluno();

if(!$aluno){ 
    echo "<h1>Banco indisponível. Tente mais tarde</h1>";
    exit;
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
        <img class="logo" src="https://th.bing.com/th/id/R.6402dea91d23f6c1fdb88648939abbdb?rik=iN9K%2f3MHYFOONA&pid=ImgRaw&r=0" 
             alt="Corinthians" width="140">

        <div class="login-box">
            <h2>Login</h2>
             

            <form method="POST" action="aluno.php">
                <input type="text" name="rm" placeholder="rm" required>
                <input type="text" name="nome" placeholder="nome" required>
                <input type="email" name="email" placeholder="email" required>
                <input type="password" name="senha" placeholder="senha" required>
                <input type="text" name="cpf" placeholder="cpf" required>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>



