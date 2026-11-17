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

            <a href="subirlivro.php">Cadastrar Livro</a>
        </nav>

        <hr>

        <h2>Livros Disponíveis no Banco</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_livros as $livro): ?>
                    <tr>
                        <td><?php echo $livro['id']; ?></td>
                        <td><?php echo $livro['titulo']; ?></td>
                        <td><?php echo $livro['autor']; ?></td>
                        <td>R$ <?php echo number_format($livro['preco'], 2, ',', '.'); ?></td>
                        <td>
                            <a href="update_interface.php?id=<?php echo $livro['id']; ?>">Editar</a> | 
                            <a href="excluir.php?id=<?php echo $livro['id']; ?>" onclick="return confirm('Tem certeza que deseja remover este livro?');">Remover</a>
                        </td>
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