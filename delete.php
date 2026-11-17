<?php
include('conexao.php');

// Pega o id que veio pela URL (excluir.php?id=5)
$id = $_GET['id'];

try {
    $sql = "DELETE FROM livros WHERE id = :id";

    $declaracao = $conn->prepare($sql);
    $declaracao->bindParam(':id', $id);
    $declaracao->execute();

    header("Location: interface.php");
    exit();

} catch (PDOException $e) {
    echo "Erro ao remover o livro: " . $e->getMessage();
}
?>
