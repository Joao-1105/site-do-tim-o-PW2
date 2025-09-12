<?php
$host = "localhost";
$dbname = "etimpwiiAluno";  // atenção ao nome certo
$user = "root";
$pass = "";  // senha vazia no XAMPP por padrão

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
