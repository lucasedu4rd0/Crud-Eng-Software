<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livro</title>
</head>
<body>
    <h2>Deseja cadastrar um novo livro?</h2>
    
    <form action="insert.php" method="POST">
        <label>Título do livro a ser adicionado:</label>
        <input type="text" name="titulo" required><br><br>

        <label>Autor da Obra:</label>
        <input type="text" name="autor" required><br><br>

        <label>Preço:</label>
        <input type="number" name="preco" step="0.01" required><br><br>

        <button type="submit">Salvar Livro</button>
    </form>
</body>
</html>