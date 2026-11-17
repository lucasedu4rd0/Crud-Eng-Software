<?php
include('conexao.php');

$titulo_livro = $_POST['titulo'];
$preco_livro  = $_POST['preco'];
$autor_livro  = $_POST['autor'];

try {
    $sql = "INSERT INTO livros (titulo, autor, preco) VALUES (:titulo, :autor, :preco)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':titulo', $titulo_livro);
    $stmt->bindParam(':preco', $preco_livro);
    $stmt->bindParam(':autor', $autor_livro);
    $stmt->execute();
    
    echo "A operação de adicionar o livro '{$titulo_livro}' foi concluída com sucesso.";

} catch (PDOException $e) {
    echo "Erro ao inserir o livro: " . $e->getMessage();
}
?>