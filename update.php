<?php
include('conexao.php');

$id = $_POST['id'];
$titulo_livro = $_POST['titulo'];
$preco_livro = $_POST['preco'];
$autor_livro = $_POST['autor'];

try {
    $sql = "UPDATE livros SET titulo = :titulo, autor = :autor, preco = :preco WHERE id = :id";

    $declaracao = $conn->prepare($sql);
    $declaracao->bindParam(':titulo', $titulo_livro);
    $declaracao->bindParam(':preco', $preco_livro);
    $declaracao->bindParam(':autor', $autor_livro);
    $declaracao->bindParam(':id', $id);
    $declaracao->execute();

    header("Location: interface.php");
    exit();

} catch (PDOException $e) {
    echo "Erro ao atualizar o livro: " . $e->getMessage();
}
?>