<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "SELECT * FROM livros WHERE id = :id";
$declaracao = $conn->prepare($sql);
$declaracao->bindParam(':id', $id);
$declaracao->execute();
$livro = $declaracao->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Livro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Editar Livro</h2>

        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $livro['id']; ?>">

            <label>Título do Livro:</label>
            <input type="text" name="titulo" value="<?php echo $livro['titulo']; ?>" required>

            <label>Autor:</label>
            <input type="text" name="autor" value="<?php echo $livro['autor']; ?>" required>

            <label>Preço:</label>
            <input type="number" name="preco" step="0.01" value="<?php echo $livro['preco']; ?>" required>

            <button type="submit">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>