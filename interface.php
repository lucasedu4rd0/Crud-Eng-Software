<?php
include("conexao.php");

$sql = "SELECT * FROM livros";
$stmt = $conn->prepare($sql);
$stmt->execute();
$lista_livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja de Livros - Catálogo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <h1>Loja de Livros</h1>

        <nav>
            <a href="index.php">Catálogo de Livros</a>
            <a href="subirlivro.php">Cadastrar Livro</a>
        </nav>
        <hr>

        <h2>Cadastrar Novo Livro</h2>
        
        <form action="insert.php" method="POST">
            <label>Título do Livro:</label>
            <input type="text" name="titulo" required>

            <label>Autor:</label>
            <input type="text" name="autor" required>

            <label>Preço:</label>
            <input type="number" name="preco" step="0.01" required>

            <button type="submit">Salvar Livro</button>
        </form>

        <hr>

        <h2>Livros Disponíveis no Banco</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_livros as $livro): ?>
                    <tr>
                        <td><?php echo $livro['id']; ?></td>
                        <td><?php echo $livro['titulo']; ?></td>
                        <td><?php echo $livro['autor']; ?></td>
                        <td>R$ <?php echo $livro['preco']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <footer>
            <p>Trabalho de Banco de Dados - Loja de Livros</p>
        </footer>
    </div>

</body>
</html>
