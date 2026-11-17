<?php
$host = "localhost";
$dbname = "loja_livros";
$usuario = "root";
$senha = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
?>